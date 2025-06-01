<?php

    namespace App\Http\Controllers\Candidate;
    
    use App\Http\Controllers\Controller;
    use App\Models\Candidates;
    use App\Models\Category;
    use App\Models\User;
    use App\Models\Job;
    use App\Models\JobUser;
    use App\Models\Personne;
    use App\Models\Profile;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Auth;
    use Illuminate\Support\Str;

    class JobController extends Controller
    {
        
    public function index(Request $request)
    {
        $user = User::with('candidate', 'profile', 'personne')->findOrFail(Auth::user()->id);
        $categories = Job::with('category')->where('is_open', true)->select('category_id')->distinct()->get();
        
        $jobs = Job::where('is_open', true)->latest()->paginate(10);

        if($request->filter && $request->filter != '*') {
            $categoryId = Category::where('name', $request->filter)->first()->id;
            $jobs = Job::where('is_open', true)->where('category_id', $categoryId)->latest()->paginate(10);
        }
        
        return view('candidate.job.index', compact('user', 'jobs', 'categories'));
    }
    
    public function show(string $matricule)
    {
        $job = Job::with('user', 'candidates')-> where('matricule', $matricule)->firstOrFail();
        // $matchingUsers = $job->findMatchingUsers();
        $minutes = 5;
        $view = views($job)->cooldown($minutes)->record();
        $jobuser = JobUser::where('user_id', Auth::user()->id)->where('job_id', $job->id)->first();

        // dd($jobuser);
        return view('candidate.job.show',[
            'job' => $job,
            // 'matchingUsers' => $matchingUsers,
            'view' => $view,
            'jobuser' => $jobuser,
        ]);
    }

    public function postuler(string $id)
    {
        $user = User::with('candidate', 'profile', 'personne')->findOrFail(Auth::user()->id);
        $job = Job::findOrfail($id);
        $jobuser = JobUser::updateOrInsert(
            [
                'user_id' => $user->id,
                'job_id' => $job->id,
            ],
            [
                'is_active' => true,
                'user_approved_at' => now(),
                'user_rejected_at' => null,
                'matricule' => strtoupper(Str::random(10))
            ]);
        return redirect()->back()->with('success', 'Vous avez postulé avec succès à cette offre.');
    }

    public function cancel(string $id)
    {
        $user = User::with('candidate', 'profile', 'personne')->findOrFail(Auth::user()->id);
        $job = Job::findOrfail($id);
        $jobuser = JobUser::where('user_id', $user->id)->where('job_id', $job->id)->first();

        // Check if the user has already applied for the job
        if (!$jobuser) {
            return redirect()->back()->with('error', 'Vous n\'avez pas postulé à cette offre.');
        }

        if ($jobuser->is_active == false) {
            return redirect()->back()->with('error', 'Vous avez déjà annulé votre candidature.');
        }

        // Update the is_active to false and set the cancellation date
        $jobuser->is_active = false;
        $jobuser->user_approved_at = null;
        $jobuser->user_rejected_at = now();
        $jobuser->save();

        // Optionally, you can delete the record instead of just updating the status
        $jobuser->delete();
        return redirect()->back()->with('success', 'Vous avez annulé votre candidature avec succès.');
    }
    
}