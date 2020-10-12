<?php

namespace App\Http\Controllers;

use App\Models\Playlist;
use Illuminate\Http\Request;

class PlaylistController extends Controller
{
    public function index(Request $request){
        if($request->has('query')){
            $playlists = Playlist::latest()->where('name', 'LIKE', "%{$request->input('query')}%")->paginate(10);
            $request->flash();
        }else{
            $playlists = Playlist::latest()->paginate(10);
        }
        return view('playlists.index')->with('playlists', $playlists);
    }

    public function show(Playlist $playlist){
        return view('playlists.show')->with('playlist', $playlist);
    }
}
