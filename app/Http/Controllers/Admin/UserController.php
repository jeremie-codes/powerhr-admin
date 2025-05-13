<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AccountRating;
use App\Models\User;
use App\Models\Job;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $members = User:: with('personne', 'profile','ratings', 'jobuser')->role(['candidate', 'employee'])->paginate(20);
        // $members = User::with('personne', 'profile','ratings', 'jobuser')->role(['candidate', 'employee'])->get();
        $jobs = Job::where('is_open', true)->get();

        // dd($members);
        
        return view('admin.member.index', [
            'members' => $members,
            'jobs' => $jobs
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function rating(Request $request)
    {
        $user = User::findOrFail($request->user);
        $rating = AccountRating::where('user_id', $user->id)->first();
        if($rating) {
            $rating->update([
                'description' => $request->description,
                'rating' => $request->rating,
            ]);
            return redirect()->route('users.show', $user->id);
        }else{
            $rating = AccountRating::create([
                'user_id' => $user->id,
                'description' => $request->description,
                'rating' => $request->rating,
            ]);
            return redirect()->route('users.show', $user->id);
        }
        return redirect()->route('users.show', $user->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id) //: View
    {
        $user = User::with('personne', 'profile', 'candidate')->findOrFail($id);
        $minutes = 5;
        views($user)->cooldown($minutes)->record();
        $view = views($user)->count();
        return view('admin.member.show', [
            'user' => $user,
            'view' => $view
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
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
