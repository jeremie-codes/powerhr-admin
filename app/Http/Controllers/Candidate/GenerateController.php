<?php

namespace App\Http\Controllers\candidate;

use App\Http\Controllers\Controller;
use App\Models\Candidat;
use App\Models\Curriculum;
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
        $cv = Curriculum::where('user_id', Auth::user()->id)->with('user')->first();
        
        return view('candidate.cv.index', compact('user', 'cv'));
    }
    /**
     * Display a listing of the resource.
     */
    public function create()
    {
        $user = User::with('candidate', 'profile', 'personne')->findOrFail(Auth::user()->id);
        $cv = Curriculum::where('user_id', Auth::user()->id)->with('user')->first();
        $langues = json_decode($cv->langue ?? '[]', true);
        $competences = json_decode($cv->competence ?? '[]', true);

        return view('candidate.cv.form', compact('user', 'cv', 'langues', 'competences'));
    }
     
    /**
     * Display a listing of the resource.
     */
    public function select($id)
    {
        $userId = Auth::user()->id;
        
        Curriculum::updateOrInsert(
            ['user_id' => $userId],
            [
                'model' => $id,
            ]
        );

        return redirect()->back()->with('success', 'Modèle selectionné avec succès');
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
