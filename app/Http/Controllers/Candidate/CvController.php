<?php

namespace App\Http\Controllers\candidate;

use App\Http\Controllers\Controller;
use App\Models\Candidat;
use App\Models\Curriculum;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Storage;

class CvController extends Controller
{
    public function view($id)
    {
        $candidat = Candidat::findOrFail($id);
        $pdf = Pdf::loadView('cv.modele1', compact('candidat'));
        return $pdf->stream('cv.pdf'); // Affiche dans le navigateur
    }

    public function download($id)
    {
        $candidat = Candidat::findOrFail($id);
        $pdf = Pdf::loadView('cv.modele1', compact('candidat'));
        return $pdf->download('cv_' . $candidat->nom . '.pdf');
    }

    public function store_file(Request $request)
    {

        dd($request->all());
        // Vérifier si le fichier est présent dans la requête
        if (!$request->hasFile('file')) {
            return response()->json(['success' => false, 'message' => 'Aucun fichier téléchargé.']);
        }
        $request->validate([
            'file' => ['required', 'file', 'mimes:pdf,doc,docx', 'max:2048'], // max 2MB
        ]);

        $userId = auth()->user()->id;
        $cv = Curriculum::where('user_id', $userId);

        // Supprimer l'ancien CV si existe
        if ($cv->cv_path) {
            Storage::delete($cv->cv_path);
        }

        $path = $request->file('file')->store("cv/{$userId}");

        $cv->update(['cv_path' => $path]);

        return response()->json(['success' => true, 'path']);
    }

    public function store(Request $request)
    {
        $userId = auth()->user()->id;
        $cv = Curriculum::where('user_id', $userId);

        // Supprimer l'ancien CV si existe
        if ($cv->cv_path) {
            Storage::delete($cv->cv_path);
        }

        $path = $request->file('file')->store("cv/{$userId}");

        $cv->update(['cv_path' => $path]);

        return response()->json(['success' => true, 'path' => $path]);
    }
}
