<?php

namespace App\Http\Controllers;

use App\Charts\MonthlyUsersChart;
use App\Models\Job;
use App\Models\JobUser;
use App\Models\User;
use Illuminate\Http\Request;
use Akaunting\Apexcharts\Chart;
use App\Models\Prospect;

class RouteController extends Controller
{
    public function index()
    {
        $users = User::with(['personne', 'profile', 'ratings', 'roles'])
            ->get()
            ->map(function ($user) {
                $user->setAttribute('is_employee', $user->hasRole('employee'));
                $user->setAttribute('is_candidate', $user->hasRole('candidate'));
                $user->setAttribute('is_customer', $user->hasRole('customer'));
                return $user;
            });



        $hirings = JobUser::where('is_active', true)->with(['user', 'job'])->limit(10)->get();

        $usersByMonth = User::selectRaw('COUNT(*) as count, MONTH(created_at) as month')
            ->whereYear('created_at', date('Y'))
            ->groupBy('month')
            ->orderBy('month')
            ->pluck('count', 'month')
            ->toArray();

        $jobsByMonth = Job::selectRaw('COUNT(*) as count, MONTH(created_at) as month')
            ->whereYear('created_at', date('Y'))
            ->groupBy('month')
            ->orderBy('month')
            ->pluck('count', 'month')
            ->toArray();

        $months = array_map(function ($month) {
            return date('F', mktime(0, 0, 0, $month, 1));
        }, array_keys($jobsByMonth));

        $userChart = (new Chart)
            ->setType('bar')
            ->setWidth('100%')
            ->setHeight(300)
            ->setLabels($months)
            ->setDataset('Utilisateurs par mois', 'bar', array_values($usersByMonth));

        $hiringsByMonth = JobUser::selectRaw('COUNT(*) as count, MONTH(created_at) as month')
            ->where('is_active', true)
            ->whereYear('created_at', date('Y'))
            ->groupBy('month')
            ->orderBy('month')
            ->pluck('count', 'month')
            ->toArray();

        $jobsChart = (new Chart)
            ->setType('bar')
            ->setWidth('100%')
            ->setHeight(300)
            ->setLabels($months)
            ->setDataset('Jobs publiés', 'bar', array_values($jobsByMonth))
            ->setDataset('Embauches', 'bar', array_values($hiringsByMonth))
            ->setOptions([
                'stroke' => [
                    'curve' => 'smooth'
                ],
                'chart' => [
                    'zoom' => [
                        'enabled' => false
                    ]
                ],
                'title' => [
                    'text' => 'Évolution des jobs et embauches',
                    'align' => 'center',
                    'style' => [
                        'fontSize' => '16px',
                        'fontWeight' => 'bold',
                    ]
                ],
                'markers' => [
                    'size' => 4
                ],
                'xaxis' => [
                    'type' => 'category',
                    'categories' => $months,
                    'labels' => [
                        'style' => [
                            'colors' => '#fff'
                        ]
                    ]
                ],
                'yaxis' => [
                    'title' => [
                        'text' => 'Nombre de jobs et embauches'
                    ]
                ]
            ]);

        $prospects = Prospect::all();
        return view('index', [
            'users' => $users,
            'employees' => $users->filter(fn($user) => $user->is_employee),
            'candidates' => $users->filter(fn($user) => $user->is_candidate),
            'customers' => $users->filter(fn($user) => $user->is_customer),
            'prospects' => $prospects,
            'hirings' => $hirings,
            'userChart' => $userChart,
            'jobsChart' => $jobsChart,
        ]);
    }

    public function routes(Request $request)
    {
        if (view()->exists($request->path())) {
            return view($request->path());
        } else {
            return abort(404);
        }
    }
}
