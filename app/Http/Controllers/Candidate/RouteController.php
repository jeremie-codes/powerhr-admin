<?php

namespace App\Http\Controllers\Candidate;

use App\Charts\MonthlyUsersChart;
use App\Http\Controllers\Controller;
use App\Models\Job;
use App\Models\JobUser;
use App\Models\User;
use Illuminate\Http\Request;
use Akaunting\Apexcharts\Chart;
use App\Models\Prospect;

class RouteController extends Controller
{
    public function index() {
        $users = User::with(['personne', 'profile', 'ratings', 'roles'])
            ->get()
            ->map(function ($user) {
                $user->setAttribute('is_employee', $user->hasRole('employee'));
                $user->setAttribute('is_candidate', $user->hasRole('candidate')); 
                $user->setAttribute('is_customer', $user->hasRole('customer'));
                return $user;
            });
        
        

        $hirings = JobUser::where('is_active', true)->with(['user', 'job'])->limit(10) ->get();

        $documents = \App\Models\Document::where('user_id', auth()->id())->get();

        return view('index', [
            'users' => $users,
            'employees' => $users->filter(fn($user) => $user->is_employee),
            'candidates' => $users->filter(fn($user) => $user->is_candidate),
            'customers' => $users->filter(fn($user) => $user->is_customer),
        ]);
    }

    

    public function routes(Request $request) {
        if(view()->exists($request->path())) {
            return view($request->path());
        } else {
            return abort(404);
        }
    }
}
