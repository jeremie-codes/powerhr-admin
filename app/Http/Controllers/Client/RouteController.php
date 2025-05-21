<?php

namespace App\Http\Controllers\Client;

use App\Models\Job;
use App\Models\JobUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\Client;

class RouteController extends Controller
{
    public function index() {
        $jobs = Job::with('user', 'category')->where('user_id', Auth::user()->id)->latest()-> get();
        $candidates = JobUser::whereIn('job_id', $jobs->pluck('id'))->get();
        $lastmembers = JobUser::with(['job', 'user' => function ($query) {
            $query->with('personne', 'profile', 'ratings');
        }])
        ->whereHas('job', function ($query) {
            $query->where('user_id', auth()->id());
        })
        ->limit(5)->get();
        $profile = Client::where('user_id', Auth::user()->id)->first() ?? null;
        return view('client.index',[
            'jobs' => $jobs,
            'candidates' => $candidates,
            'lastmembers' => $lastmembers,
            'profile' => $profile,
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
