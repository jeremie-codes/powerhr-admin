<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Client;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CustomerController extends Controller
{
    public function create()
    {
        return view('client.customer.create');
    }

    public function store(Request $request)
    {
        try {
            // 1. Validation
            $validated = $request->validate([
                'email' => 'required|string|max:255',
                'name' => 'required|string|max:255',
                'address' => 'nullable|string|max:255',
                'activity' => 'required|string|max:100',
                'phone' => 'required|string|max:20',
                'contact_name' => 'required|string|max:255',
                'contact_phone' => 'required|string|max:20',
                'contact_email' => 'required|email|max:255',
                'website' => 'required|string|max:255',
                'description' => 'nullable|string',
                'city' => 'required|string|max:100',
                'country' => 'required|string|max:100',
                // 'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048' // à activer si tu gères l'upload de fichiers
            ]);

            $userId = Auth::id();

            // 2. Mise à jour ou création
            Client::updateOrCreate(
                ['user_id' => $userId],
                [
                    'name' => $validated['name'],
                    'profile_mail' => $validated['email'] ?? null,
                    'adress' => $validated['address'] ?? null,
                    'activity' => $validated['activity'],
                    'phone' => $validated['phone'],
                    'contact_name' => $validated['contact_name'],
                    'contact_phone' => $validated['contact_phone'],
                    'contact_email' => $validated['contact_email'],
                    'website' => $validated['website'],
                    'description' => $validated['description'] ?? null,
                    'city' => $validated['city'],
                    'country' => $validated['country'],
                    // 'logo' => $path ?? null
                ]
            );

            return redirect()->back()->with('success', 'Profil modifié avec succès.');

        } catch (Exception $e) {
            return redirect()->back()->with('error', 'Erreur lors de la modification du profil : ' . $e->getMessage());
        }
    }

}
