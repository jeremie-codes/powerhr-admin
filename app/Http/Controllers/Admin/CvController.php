<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Candidates;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class CvController extends Controller
{
    public function view($id)
    {
        $candidat = Candidates::findOrFail($id);
        $pdf = Pdf::loadView('cv.modele1', compact('candidat'));
        return $pdf->stream('cv.pdf'); // Affiche dans le navigateur
    }

    public function download($id)
    {
        $candidat = Candidates::findOrFail($id);
        $pdf = Pdf::loadView('cv.modele1', compact('candidat'));
        return $pdf->download('cv_' . $candidat->nom . '.pdf');
    }
}
