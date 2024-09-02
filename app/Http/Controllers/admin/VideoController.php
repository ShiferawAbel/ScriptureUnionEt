<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Video;

class VideoController extends Controller
{
    public function index() 
    {
        $videos = Video::all();
        return view('admin.videos.index', compact('videos'));
    }
    public function create()  {
        return view('admin.videos.create');
    }

    public function store(Request $request) {
        $data = $request->validate([
            'title' => 'required|string',
            'youtube_iframe' => 'required|string',
            'thumbnail' => 'image',
        ]);
        // dd($data);
        $file_name = date('YmdHi').'.'.$request->file('thumbnail')->extension();
        $request->file('thumbnail')->move(public_path('user_uploads/videos/thumbnails'),  $file_name);
        $file_name = 'user_uploads/videos/thumbnails/'.$file_name;
        $video = Video::create([
            'title' => $request->input('title'),
            'youtube_iframe' => $request->input('youtube_iframe'),
            'thumbnail' => $file_name,
        ]);

        return redirect(route('admin.videos.show', $video));
    }

    public function show(Video $video)
    {
        return view('admin.videos.show', compact('video'));
    }
}
