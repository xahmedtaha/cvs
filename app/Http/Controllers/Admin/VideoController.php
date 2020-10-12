<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Playlist;
use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function create(Request $request){
        $data = $request->validate([
            'name' => 'string|required',
            'embed' => 'string|required',
            'description' => 'string|required',
            'thumbnail' => 'image|required',
            'playlist_id' => 'required|integer|exists:playlists,id'
        ]);
        $data['thumbnail'] = $data['thumbnail']->store('public/videos/thumbnails');
        $playlist = Video::create($data);
        return back()->with('created', true);
    }

    public function update(Video $video, Request $request){
        $data = $request->validate([
            'name' => 'string|required',
            'embed' => 'string|required',
            'description' => 'string|required',
            'thumbnail' => 'image|sometimes|nullable',
        ]);
        if($request->exists('thumbnail')){
            $data['thumbnail'] = $data['thumbnail']->store('public/videos/thumbnails');
        }else{
            unset($data['thumbnail']);
        }
        $video->update($data);
        return back()->with('updated', true);
    }

    public function delete(Video $video){
        $video->delete();
        return redirect()->route('admin.playlist.show', $video->playlist_id)->with('deleted', true);
    }
}
