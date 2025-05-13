<?php

namespace App\Http\Controllers\candidate;

use App\Http\Controllers\Controller;
use App\Models\Candidat;
use App\Models\User;
use App\Models\Personne;
use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GenerateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $user = User::with('candidate', 'profile', 'personne')->findOrFail(Auth::user()->id);
        $user = User::with('candidate', 'profile', 'personne')->findOrFail(Auth::user()->id);
        return view('candidate.cv.index', compact('user'));
    }
     
    /**
     * Display a listing of the resource.
     */
    public function show()
    {
        // $user = User::with('candidate', 'profile', 'personne')->findOrFail(Auth::user()->id);

        // return view('candidate.index', [
        //              'user' => $user
        // ]);
        return view('candidate.cv.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $user = User::with('candidate', 'profile', 'personne')->findOrFail(Auth::user()->id);

        // $personne = Personne::where('user_id', $user->id)->get();
        // $candidate = Candidat::where('user_id', $user->id)->get();
        // $profile = Profile::where('user_id', $user->id)->get();

        // if (!$personne && !$candidate && !$profile) {
        //     return redirect()->back()->with('error', 'User not found');
        // } 

        // try {
        //     Personne::updateOrInsert([
        //         'user_id' => $user->id],[
        //         'nom' => $request['nom'],
        //         'postNom' => $request['postNom'],
        //         'prenom' => $request['prenom'],
        //         // 'dateNaissance' => $request['dateNaissance'],
        //         // 'sexe' => $request['sexe'],
        //         // 'nationalite' => $request['nationalite'],
        //         // 'adresse' => $request['adresse'],
        //         // 'codePostal' => $request['codePostal'],
        //         // 'ville' => $request['ville'],
        //         'telephone' => $request['telephone'],
        //     ]);
            
        //     // Candidat::updateOrInsert([
        //     //     'user_id' => $user->id,
        //     //     'SkillSet' => $request['SkillSet'],
        //     //     'HighestQualificationHeld' => $request['HighestQualificationHeld'],
        //     //     'AdditionalInformation' => $request['AdditionalInformation'],
        //     //     'School' => $request['School'],
        //     // ], [
        //     //     'id' => $candidate->id,
        //     // ]);

        //     return view('candidate.index', [
        //         'user' => $user
        //     ]);
            
        // } catch (\Throwable $th) {
        //     return redirect()->back()->with('error', $th->getMessage());
        // }
    }
    
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // $user = User::findOrFail($id);
        // $user->delete();
        // return redirect()->route('users.index')->with('delete-success', 'User deleted successfully.');
    }
}
