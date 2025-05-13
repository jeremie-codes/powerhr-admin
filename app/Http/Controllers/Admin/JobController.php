<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Job;
use App\Models\JobUser;
use App\Models\User;
use Illuminate\Http\Request;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jobs = Job::with('user', 'category')->latest()-> paginate(10);
        return view('admin.job.index',[
            'jobs' => $jobs
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $jobs = Job::where('is_open', true)->get();
        $hireds = JobUser::where('is_active', true)->with('user', 'job')->where('client_approved_at', '!=', null)->get();
        $users = User:: with('personne', 'profile')->get();
        // dd($users);
        return view('admin.job.add',[
            'jobs' => $jobs,
            'hireds' => $hireds,
            'users' => $users
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user = User::findOrFail($request->user);
        $job = Job::findOrFail($request->job);
        $hired = JobUser::where('user_id', $user->id)->where('job_id', $job->id)->first();
        
        // $user->syncRoles(['employee']);
        if ($hired) {
            $hiring = $hired->update([
                'job_id' => $job->id,
                'is_active' => true,
            ]);
            return redirect()->back()->with('success', 'Candidat récommandé avec succès !');
        }

        // dd($request->all());
        
        try {
            $hiring = JobUser::create([
                'user_id' => $user->id,
                'job_id' => $job->id,
                'is_active' => true,
                'matricule' => uniqid(),
            ]);
            
            return redirect()->back()->with('success', 'Candidat récommandé avec succès !');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', $th->getMessage());
        }
        
    }

    public function cancel(Request $request)
    {
        $user = User::findOrFail($request->user);
        $job = Job::findOrFail($request->job);
        $hired = JobUser::where('user_id', $user->id)->where('job_id', $job->id)->first();
        if ($hired) {
            $hired->update([
                'job_id' => $job->id,
                'is_active' => false,
            ]);
            return redirect()->back()->with('success', 'Récommandation annulée avec succès !');
        }
    }


    /**
     * Display the specified resource.
     */
    public function show(string $matricule)
    {
        $job = Job::with('user', 'candidates')-> where('matricule', $matricule)->firstOrFail();
        // $matchingUsers = $job->findMatchingUsers();
        $minutes = 5;
        $view = views($job)->cooldown($minutes)->record();
        return view('admin.job.show',[
            'job' => $job,
            // 'matchingUsers' => $matchingUsers,
            'view' => $view
        ]);
    }

    public function opening(Request $request){
        
        $job = Job::findOrFail($request->id);
        $job->update(['is_open' => true]);
        
        return redirect()->back()->with('success', "modifié avec succès");
        
    }

    public function closing(Request $request){
         
        $job = Job::findOrFail($request->id);
        $job->update(['is_open' => false]);
        
        return redirect()->back()->with('success', "modifié avec succès");
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $candidate = JobUser::findOrFail($id);
            $candidate->update([
                'client_approved_at' => null,
                'client_rejected_at' => null,
            ]);
            return redirect()->route('jobs.show', $candidate->job->matricule);
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', $th->getMessage());
        }
    }
}
