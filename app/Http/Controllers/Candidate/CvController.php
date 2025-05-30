<?php

namespace App\Http\Controllers\Candidate;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Curriculum;
use App\Models\Experience;
use App\Models\Formation;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Storage;
use PhpOffice\PhpWord\IOFactory;

class CvController extends Controller
{
    public function view()
    {
        $candidat = User::with('candidate', 'profile', 'personne')->findOrFail(auth()->user()->id);
        $cv = Curriculum::with('experience', 'formation')->where('user_id', auth()->user()->id)->first();
        $model = 'cv.modele1';

        if ($cv && $cv->model == 2) {
            $model = 'cv.modele2';
        }
        if ($cv && $cv->model == 3) {
            $model = 'cv.modele3';
        }
        if ($cv && $cv->model == 4) {
            $model = 'cv.modele4';
        }

        $pdf = Pdf::loadView($model, compact('candidat', 'cv'));
        return $pdf->stream('cv.pdf'); // Affiche dans le navigateur
    }

    public function download()
    {
        $candidat = User::with('candidate', 'profile', 'personne')->findOrFail(auth()->user()->id);
        $cv = Curriculum::where('user_id', auth()->user()->id)->first();

        $model = 'cv.modele1';

        if ($cv && $cv->model == 2) {
            $model = 'cv.modele2';
        }
        if ($cv && $cv->model == 3) {
            $model = 'cv.modele3';
        }
        if ($cv && $cv->model == 4) {
            $model = 'cv.modele4';
        }
        
        $pdf = Pdf::loadView($model, compact('candidat', 'cv'));
        
        // $pdf = Pdf::loadView('cv.modele1', compact('candidat', 'cv'));

        if ($cv && $cv->cv_path && Storage::disk('public')->exists($cv->cv_path)) {
            return response()->download(storage_path('app/public/' . $cv->cv_path), 'cv_' . $candidat->name . '.pdf');
        }

        return $pdf->download('cv_' . $candidat->name . '.pdf');
    }

    public function store_file(Request $request)
    {

        // Vérifier si le fichier est présent dans la requête
        if (!$request->hasFile('file')) {
            return response()->json(['success' => false, 'message' => 'Aucun fichier téléchargé.']);
        }

        $request->validate([
            'file' => ['required', 'file', 'mimes:pdf,doc,docx', 'max:2048'], // max 2MB
        ]);

        $userId = auth()->user()->id;
        $cv = Curriculum::where('user_id', $userId)->get();

        // Vérifier si le CV existe déjà
        if ($cv->isEmpty()) {;

           // Vérifier si le fichier a été téléchargé avec succès
            
            $uploadedFile = $request->file('file');
            $extension = $uploadedFile->getClientOriginalExtension();

            if (in_array($extension, ['doc', 'docx'])) {
                // C'est un fichier Word → on convertit en PDF
                $wordPath = $uploadedFile->store("cv/", 'public');

                if (!$wordPath) {
                    return redirect()->back()->with('error', 'Erreur lors du téléchargement du fichier.');
                }
                
                $pdfPath = $this->convertWordToPdf($wordPath);
                
                // Optionnel : supprimer l'original Word
                Storage::disk('public')->delete($wordPath);
                
                $finalPath = $pdfPath;
            } elseif ($extension === 'pdf') {

                // Déjà en PDF → on stocke simplement
                $finalPath = $uploadedFile->store("cv/", 'public');
                if (!$finalPath) {
                    return redirect()->back()->with('error', 'Erreur lors du téléchargement du fichier.');
                }
                
            } else {
                return back()->withErrors(['file' => 'Format non supporté. Veuillez envoyer un PDF ou un Word.']);
            }

            $cv = Curriculum::create([
                'cv_path' => $finalPath,
                'user_id' => $userId,
            ]);

        } else {
            $cv = $cv->first();
            // Supprimer l'ancien CV si existe
            if ($cv->cv_path && Storage::disk('public')->exists($cv->cv_path)) {
                Storage::disk('public')->delete($cv->cv_path);
            }

            $uploadedFile = $request->file('file');
            $extension = $uploadedFile->getClientOriginalExtension();

            if (in_array($extension, ['doc', 'docx'])) {
                // C'est un fichier Word → on convertit en PDF
                $wordPath = $uploadedFile->store("cv/", 'public');
                
                if (!$wordPath) {
                    return redirect()->back()->with('error', 'Erreur lors du téléchargement du fichier.');
                }

                $pdfPath = $this->convertWordToPdf($wordPath);
                
                // Optionnel : supprimer l'original Word
                Storage::disk('public')->delete($wordPath);
                
                $finalPath = $pdfPath;
            } elseif ($extension === 'pdf') {

                // Déjà en PDF → on stocke simplement
                $finalPath = $uploadedFile->store("cv/", 'public');
                 if (!$finalPath) {
                    return redirect()->back()->with('error', 'Erreur lors du téléchargement du fichier.');
                }

            } else {
                return back()->withErrors(['file' => 'Format non supporté. Veuillez envoyer un PDF ou un Word.']);
            }

            // Enregistrer dans la base de données
            $cv->update([
                'cv_path' => $finalPath,
            ]);
        }

        return redirect()->back()->with('success', 'CV enregistré avec succès.');
    }

    public function store(Request $request)
    {
        // Vérifier si le fichier est présent dans la requête
        
        $userId = auth()->user()->id;
        $cv = Curriculum::where('user_id', $userId)->first();

        // dd($request->all());

        try {

            if ($cv) {
                // Supprimer l'ancien CV si existe
                if ($cv->cv_path && Storage::disk('public')->exists($cv->cv_path)) {
                    Storage::disk('public')->delete($cv->cv_path);
                }
            }

            // stockage des données simples de la table curriculum
            $curriculumData1 = $request->only([
                'firstname', 'lastname', 'email', 'phone', 'lieunaissance', 'birthday', 'nationalité', 'etatcivil', 'adresse', 'description'
            ]);

            $curriculumData1 = array_filter($curriculumData1, function($value) {
                return !is_null($value) && $value !== '';
            });
            
            $curriculum = Curriculum::updateOrInsert(
                ['user_id' => $userId],
                $curriculumData1
            );

            // dd($curriculum);

            // stockage des competences et langue de la table curriculum sous forme de tableau
            $curriculumData2 = $request->only(['competence', 'langue',]);

            $curriculumData2 = array_map(function ($field) {
                if (is_array($field)) {
                    return array_filter($field, fn ($item) => !is_null($item) && $item !== '');
                }
                return $field;
            }, $curriculumData2);

            // Enregistrement JSON dans la base de données
            $curriculum2 = Curriculum::updateOrCreate(
                ['user_id' => auth()->id()],
                [
                    'competence' => json_encode($curriculumData2['competence'] ?? null),
                    'langue'     => json_encode($curriculumData2['langue'] ?? null),
                ]
            );

            $cvId = $cv->id ?? $curriculum->id ?? $curriculum2->id; 

            // stockage des données de la table experience
            $experienceData = $request->only(['job_title', 'company', 'start_date', 'end_date']);

            // Compter le nombre d'expériences à insérer
            $count = count($experienceData['job_title']);

            if ($count > 0) {
                Experience::where('curriculum_id', $cvId)->delete();
                for ($i = 0; $i < $count; $i++) {
                    // Vérifie si tous les champs pour cette ligne sont valides
                    if (
                        !empty($experienceData['job_title'][$i]) &&
                        !empty($experienceData['company'][$i]) &&
                        !empty($experienceData['start_date'][$i]) &&
                        !empty($experienceData['end_date'][$i])
                    ) {
                        $experience = Experience::create([
                            'curriculum_id' => $cvId,
                            'job_title'  => $experienceData['job_title'][$i],
                            'company'    => $experienceData['company'][$i],
                            'start_date' => $experienceData['start_date'][$i],
                            'end_date'   => $experienceData['end_date'][$i],
                        ]);
                    }
                }
            }

            // dd($experience);

            // stockage des données de la table formation
            // $formationData = $request->only(['title', 'school', 'start_date', 'end_date']);
            $formationData = $request->only(['title', 'school', 'start_dat', 'end_dat']);

            // Compter le nombre d'expériences à insérer
            $count = count($formationData['title']);

            if ($count > 0) {
                Formation::where('curriculum_id', $cvId)->delete();
                for ($i = 0; $i < $count; $i++) {
                    // Vérifie si tous les champs pour cette ligne sont valides
                    if (
                        !empty($formationData['title'][$i]) &&
                        !empty($formationData['school'][$i]) &&
                        // !empty($formationData['start_date'][$i]) &&
                        // !empty($formationData['end_date'][$i])
                        !empty($formationData['start_dat'][$i]) &&
                        !empty($formationData['end_dat'][$i])
                    ) {
                        $formation = Formation::create([
                            'curriculum_id' => $cvId,
                            'title'  => $formationData['job_title'][$i],
                            'school'    => $formationData['school'][$i],
                            // 'start_date' => $formationData['start_date'][$i],
                            // 'end_date'   => $formationData['end_date'][$i],
                            'start_date' => $formationData['start_dat'][$i],
                            'end_date'   => $formationData['end_dat'][$i],
                        ]);
                    }
                }
                dd($formation);
            }

            return redirect()->back()->with('success', 'Vos informations sont bien mise à jour !');
            
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', $th->getMessage());
        }

    }

    public function delete($id)
    {
        $cv = Curriculum::where('user_id', $id)->first();

        // Supprimer l'ancien CV si existe
        if ($cv) {
            if ($cv->cv_path && Storage::disk('public')->exists($cv->cv_path)) {
                Storage::disk('public')->delete($cv->cv_path);       
                $cv->cv_path = null;
                $cv->save();                                                                                                                                                                                                                                                                                                                                             
            } else {
                $cv->cv_path = null;
                $cv->save();
            }
        }

        return redirect()->back()->with('success', 'CV supprimé avec succès.');
    }

    /**
     * Convertit un fichier Word stocké dans storage/app/public en PDF
     */
    private function convertWordToPdf(string $wordPath): string
    {
        $fullWordPath = storage_path("app/public/" . $wordPath);
        $phpWord = IOFactory::load($fullWordPath, 'Word2007');

        // Convertir en HTML d'abord
        $htmlWriter = IOFactory::createWriter($phpWord, 'HTML');
        $tempHtmlPath = storage_path("app/temp_cv.html");
        $htmlWriter->save($tempHtmlPath);

        $html = file_get_contents($tempHtmlPath);

        $pdf = Pdf::loadHTML($html);

        $pdfPath = str_replace('.docx', '.pdf', $wordPath);
        $pdfPath = str_replace('.doc', '.pdf', $pdfPath);
        Storage::disk('public')->put($pdfPath, $pdf->output());

        // Supprimer le fichier temporaire HTML
        @unlink($tempHtmlPath);

        return $pdfPath;
    }
}
