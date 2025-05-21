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
                
                $userId = Auth::user()->id;

                $customer = Client::updateOrInsert(
                    ['user_id' => $userId],
                    [
                        'name' => $request->name,
                        'adress' => $request->address,
                        'activity' => $request->activity,
                        'phone' => $request->phone,
                        'logo' => $request->logo,
                        'contact_name' => $request->contact_name,
                        'contact_phone' => $request->contact_phone,
                        'contact_email' => $request->contact_email,
                        'website' => $request->website,
                        'description' => $request->description,
                        'city' => $request->city,
                        'country' => $request->country,
                    ]);

                return redirect()->back()->with('success', 'Profile Modifié avec succès');
            }catch (Exception $e) {
                return redirect()->back()->with('error', 'Erreur lors de la modification du profile, ' . $e->getMessage());
            }
                
    }
}
