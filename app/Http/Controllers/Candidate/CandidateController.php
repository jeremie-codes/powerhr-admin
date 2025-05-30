<?php

namespace App\Http\Controllers\Candidate;

use App\Http\Controllers\Controller;
use App\Models\Candidat;
use App\Models\User;
use App\Models\Job;
use App\Models\JobUser;
use App\Models\Personne;
use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class CandidateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = User::with('candidate', 'profile', 'personne')->findOrFail(Auth::user()->id);
        $documents = \App\Models\Document::where('user_id', auth()->id())->get();

        return view('candidate.index', [
            'user' => $user,
            'documents' => $documents,
        ]);
    }
     
    /**
     * Display a listing of the resource.
     */
    public function show()
    {
        $user = User::with('candidate', 'profile', 'personne')->findOrFail(Auth::user()->id);
        
        return view('candidate.index', [
            'user' => $user
        ]);
    }

    public function candidature()
    { 
        $offerts = JobUser::where('user_id', Auth()->user()->id)->latest()->paginate(10);
        $approved = JobUser::where('user_id', Auth()->user()->id)->where('client_approved_at', '!=', null)->count();
        $rejected = JobUser::where('user_id', Auth()->user()->id)->where('client_rejected_at', '!=', null)->count();
        $waiting = JobUser::where('user_id', Auth()->user()->id)->where('client_approved_at', null)->where('client_rejected_at', null)->count();

        return view('candidate.candidature', compact('offerts', 'approved', 'rejected', 'waiting'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user = User::with('candidate', 'profile', 'personne')->findOrFail(Auth::user()->id);
        
        $personne = Personne::where('user_id', $user->id)->first();
        $candidate = Candidat::where('user_id', $user->id)->first();
        $profile = Profile::where('user_id', $user->id)->first();
        // dd($profile);

        // if (!$personne && !$candidate && !$profile) {
        //     return redirect()->back()->with('error', 'User not found');
        // }

        // dd($candidate);

        try {
            $personneData = $request->only([
                'nom', 'postNom', 'prenom', 'dateNaissance', 'sexe', 'nationalite', 'adresse', 'codePostal', 'ville', 'telephone'
            ]);

            $personneData = array_filter($personneData, function($value) {
                return !is_null($value) && $value !== '';
            });

            // $personneData['matricule'] = strtoupper(Str::random(8));
            
            $person = Personne::updateOrInsert(
                ['user_id' => $user->id],
                $personneData
            );

            // dd($person);

            
            $candidateData = $request->only([
                'SkillSet', 'HighestQualificationHeld','ExperienceDetails', 'salary'
            ]);
            
            $candidateData = array_filter($candidateData, function($value) {
                return !is_null($value) && $value !== '';
            });
            
            $candidat = Candidat::updateOrInsert(
                ['user_id' => $user->id],
                $candidateData
            );

             $candidatProfileData = $request->only([
                'bio', 'website','linkedin', 'twitter', 'github'
            ]);
            
            $candidatProfileData = array_filter($candidatProfileData, function($value) {
                return !is_null($value) && $value !== '';
            });
            
            $candidatProfile = Profile::updateOrInsert(
                ['user_id' => $user->id],
                $candidatProfileData
            );
            
            return redirect()->back()->with('success', 'Vos informations sont mise à jour avec succès.');
            
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', $th->getMessage());
        }
    }


    
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->route('users.index')->with('delete-success', 'User deleted successfully.');
    }
}
