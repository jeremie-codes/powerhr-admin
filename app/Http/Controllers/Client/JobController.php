<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Job;
use App\Models\JobUser;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jobs = Job::with('user', 'category') -> where('user_id',Auth::user()->id)->latest()-> paginate(10);
        return view('client.job.index',[
            'jobs' => $jobs
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $matricule)
    {
        $job = Job::with('user', 'candidates')-> where('matricule', $matricule)->firstOrFail();
        // $matchingUsers = $job->findMatchingUsers();
        //return [$job, $matchingUsers];
        $view = views($job)->count();
        return view('client.job.show',[
            'job' => $job,
            // 'matchingUsers' => $matchingUsers,
            'view' => $view
        ]);
    }

    public function create(){
        $categories = Category::all();
        return view('client.job.create', [
            'categories' => $categories,
        ]);
    }

    public function store(Request $request){
        // dd($request->all());
        $request->validate([
            'title' => 'required',
            'category_id' => 'required',
            'skills' => 'required',
            'salary' => 'required',
            'location' => 'required',
            'available_until' => 'required',
            'duration' => 'required',
            'work_type' => 'required',
            'contract_type' => 'required',
            'place' => 'required',
            'id_number' => 'required',
        ]);
        try {
            $job = Job::create([
                'title' => $request->title,
                'description' => $request->description ?? null,
                'category_id' => $request->category_id,
                'skills' => $request->skills,
                'salary' => $request->salary,
                'location' => $request->location,
                'user_id' => Auth::user()->id,
                'is_current' => true,
                'available_until' => $request->available_until,
                'duration' => $request->duration,
                'work_type' => $request->work_type,
                'contract_type' => $request->contract_type,
                'place' => $request->place,
                'matricule' => $request->id_number,
            ]);

            // dd('ss');

            // return redirect()->back()->with('success', 'Offre d\'emploi créée avec succès !');
            return redirect()->route('jobs.show', $job->matricule)->with('success', 'Offre d\'emploi créée avec succès !');
        } catch (\Throwable $th) {
            //throw $th;
            return redirect()->back()->with('error', 'Erreur lors de la création de l\'offre, ' . $th->getMessage());
            // dd($th->getMessage());
        }
    }

    public function accept(string $matricule)
    {
        try {
            $candidate = JobUser::with('job')-> where('matricule', $matricule)->firstOrFail();
            // $approvedCandidates = JobUser::where('client_approved_at', '!=', null);
            $candidate->client_approved_at = now();
            $candidate->client_rejected_at = null;
            $candidate->is_active = true;
            // if ($candidate->job->place <= $candidate->job->approvedCandidates->count() ) {
            //     $candidate->is_active = false;
            // }
            $candidate->save();
            return redirect()->back()->with('success', 'Candidat accepté avec succès !');
            // return redirect()->route('jobs.show', $candidate->job->matricule);
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', $th->getMessage());
        }
    }

    public function reject(string $matricule)
    {
        try {
            $candidate = JobUser::with('job')-> where('matricule', $matricule)->firstOrFail();
            $candidate->client_rejected_at = now();
            $candidate->client_approved_at = null;
            $candidate->save();
            return redirect()->route('jobs.show',$candidate->job->matricule);
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', $th->getMessage());
        }
    }

    public function hireUser(Request $request)
    {
        $request->validate([
            'job' => 'required',
            'user' => 'required',
        ]);
        try {
            $job = Job::find($request->job);
            $user = User::find($request->user);
            $hired = JobUser::where('user_id', $user->id)->where('job_id', $job->id)->first();
            if ($hired) {
                return redirect()->route('jobs.show', $job->matricule);
            }
            $jobUser = JobUser::create([
                'job_id' => $job->id,
                'user_id' => $user->id,
                'is_active' => true,
                'matricule' => uniqid(),
                'client_approved_at' => null,
                'user_approved_at' => null,
                'client_rejected_at' => null,
                'user_rejected_at' => null,
            ]);
            return redirect()->route('jobs.show',$job->matricule);
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', $th->getMessage());
        }
        
    }
}
