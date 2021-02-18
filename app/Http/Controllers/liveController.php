<?php

namespace App\Http\Controllers;

use App\Models\live;
use Illuminate\Http\Request;

class liveController extends Controller
{
    public function index(Request $request){
        if($request->has('query')){
            $live = live::latest()->where('name', 'LIKE', "%{$request->input('query')}%")->paginate(10);
            $request->flash();
        }else{
            $live = live::latest()->paginate(10);
        }
        return view('livesandsessions.index')->with('livesandsessions', $live);
    }

    public function show(live $live){
        return view('livesandsessions.show')->with('livesandsessions', $live);
    }
}
