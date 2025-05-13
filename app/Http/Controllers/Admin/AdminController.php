<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AdminController extends Controller
{
    public function create()
    {
        return view('admin.setting.create');
    }

    public function index()
    {
        $admins = User::role('admin')->with('customer')->get();
        return view('admin.setting.index', [
            'admins' => $admins
        ]);
    }

    public function category()
    {
        $categories = Category::all();
        return view('admin.setting.category', [
            'categories' => $categories
        ]);
    }

        /**
     * Store a newly created resource in storage.
     */
    public function removecategory($id)
    {
        try {
            // Récupérer l'instance de la catégorie
            $category = Category::findOrFail($id);
            
            // Supprimer la catégorie
            $category->delete();
            
            // Rediriger avec un message de succès
            return redirect()->route('admin.category')->with('success', 'Category deleted successfully');
        } catch (\Throwable $th) {
            // Rediriger avec un message d'erreur
            return redirect()->route('admin.category')->with('error', 'Category deletion failed');
        }
    }
        /**
     * Store a newly created resource in storage.
     */
    public function addcategory(Request $request)
    {
        
        try {
            $category = Category::create([
                'name' => $request->name,
                'slug' => Str::slug($request->name),
                'description' => $request->description,
            ]);
            return redirect()->route('admin.category')->with('success', 'Category created successfully');
        } catch (\Throwable $th) {
            return redirect()->route('admin.category')->with('error', 'Category creation failed');
        }
        
    }

        /**
     * Store a newly created resource in storage.
     */
    public function editcategory(Request $request)
    {

        // dd($request->all());
        
        $category = Category::findOrFail($request->id);

        $categoryData = $request->only([
            'nom', 'postNom', 'prenom', 'dateNaissance', 'sexe', 'nationalite', 'adresse', 'codePostal', 'ville', 'telephone'
        ]);

        $categoryData = array_filter($categoryData, function($value) {
            return !is_null($value) && $value !== '';
        });
        
        try {
            $categorys = $category->update([
                'name' => $request->name,
                'slug' => Str::slug($request->name),
                'description' => $request->description,
            ]);
            return redirect()->route('admin.category')->with('success', 'Category edit successfully');
        } catch (\Throwable $th) {
            return redirect()->route('admin.category')->with('error', 'Category edition failed');
        }
        
    }
        /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        try {
            $admin = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'email_verified_at' => now(),
                'password' => bcrypt($request->password),
                'two_factor_secret' => null,
                'two_factor_recovery_codes' => null,
                'remember_token' => Str::random(10),
                'profile_photo_path' => null,
                'current_team_id' => null,
            ]);
            $admin->assignRole('admin');
            $admin->save();
            return redirect()->route('admin.index')->with('success', 'Admin created successfully');
        } catch (\Throwable $th) {
            return redirect()->route('admin.index')->with('error', 'Admin creation failed');
        }
        
    }

    public function destroy(string $id)
    {   try {
        $admin = User::findOrFail($id);
        $admin->delete();
        return redirect()->route('admin.index')->with('success', 'Admin deleted successfully');
    } catch (\Throwable $th) {
        return redirect()->route('admin.index')->with('error', 'Admin deletion failed');
    }
        
    }

}
