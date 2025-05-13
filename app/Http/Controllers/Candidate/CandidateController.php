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
        return view('candidate.index', [
            'user' => $user
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
        $jobs = Job::where('is_open', true)->latest()->paginate(10);
        return view('candidate.candidature');
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
        // dd($candidate);

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

            $personneData['matricule'] = strtoupper(Str::random(8));
            
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
            
            if (!$profile) {
                Profile::updateOrInsert(
                    ['user_id' => $user->id],
                );
            }

            return redirect()->back()->with('success', 'Your informations have been updated.');
            
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
