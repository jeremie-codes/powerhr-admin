<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Prospect;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProspetController extends Controller
{
    public function index(){
        $prospects = Prospect::with('user')-> latest()->get();
        return view('prospect.index',[
            'prospects' => $prospects
        ]);
    }

    public function show(string $id){
        try {
            $prospect = Prospect::with('user')-> findOrfail($id);
            if(!$prospect->readen){
                $prospect->update([
                    'readen' => true,
                    'user_id' => Auth::user()->id
                ]);
            }
            return view('prospect.show',[
                'prospect' => $prospect
            ]);
        } catch (\Throwable $th) {
            return redirect()->back()->with('error');
        }
    }
}
