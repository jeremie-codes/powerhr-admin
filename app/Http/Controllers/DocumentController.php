<?php

namespace App\Http\Controllers;

use App\Models\Document;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class DocumentController extends Controller
{
    public function upload(Request $request)
    {
        $request->validate([
            'document_type' => 'required|string',
            'file' => 'required|file|mimes:pdf,jpg,jpeg,png|max:2120', // max 5MB
        ]);

        $path = $request->file('file')->store('documents', 'public');

        Document::create([
            'user_id' => Auth::id(),
            'type' => $request->document_type,
            'filename' => basename($path),
        ]);

        return back()->with('success', 'Document uploadé avec succès.');
    }


    public function delete(Request $request)
    {

        // dd($request->all());    
        $request->validate([
            'document_id' => 'required|exists:documents,id',
        ]);

        $document = Document::findOrFail($request->document_id);

        if ($document->user_id !== Auth::id()) {
            abort(403);
        }

        // Supprimer le fichier physique
        Storage::disk('public')->delete('documents/' . $document->filename);

        $document->delete();

        return back()->with('success', 'Document supprimé.');

    }
}
