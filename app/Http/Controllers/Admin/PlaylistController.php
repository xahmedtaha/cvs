<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Playlist;
use Illuminate\Http\Request;

class PlaylistController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index(){
        if(request()->has('query')){
            $playlists = Playlist::latest()->where('name', 'LIKE', '%'.request()->input('query').'%')->paginate(10);
            request()->flash();
        }else{
            $playlists = Playlist::latest()->paginate(10);
        }
        return view('multiauth::admin.playlists.index')->with('playlists', $playlists);
    }

    public function show(Playlist $playlist){
        return view('multiauth::admin.playlists.show')->with('playlist', $playlist);
    }

    public function create(Request $request){
        $data = $request->validate([
            'name' => 'string|required',
            'description' => 'string|required',
            'thumbnail' => 'image|required'
        ]);
        $data['thumbnail'] = $data['thumbnail']->store('public/playlists/thumbnails');
        $playlist = Playlist::create($data);
        return back()->with('created', true);
    }

    public function update(Playlist $playlist, Request $request){
        $data = $request->validate([
            'name' => 'string|required',
            'description' => 'string|required',
            'thumbnail' => 'image|sometimes|nullable',
        ]);
        if($request->exists('thumbnail')){
            $data['thumbnail'] = $data['thumbnail']->store('public/playlists/thumbnails');
        }else{
            unset($data['thumbnail']);
        }
        $playlist->update($data);
        return back()->with('updated', true);
    }

    public function delete(Playlist $playlist){
        $playlist->delete();
        return redirect()->route('admin.playlist.index')->with('deleted', true);
    }
}
