<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Video;
use Illuminate\Support\Facades\File;

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
        $full_path = 'user_uploads/videos/thumbnails/'.$file_name;
        $video = Video::create([
            'title' => $request->input('title'),
            'youtube_iframe' => $request->input('youtube_iframe'),
            'thumbnail' => $full_path,
        ]);

        return redirect(route('admin.videos.show', $video));
    }
    
    public function show(Video $video)
    {
        return view('admin.videos.show', compact('video'));
    }
    
    public function edit(Video $video)
    {
        return view('admin.videos.edit', compact('video'));
    }

    public function update(Video $video, Request $request) {
        $data = $request->validate([
            'title' => 'required|string',
            'youtube_iframe' => 'required|string',
            'thumbnail' => 'image',
        ]);
        $video->update($request->except('thumbnail'));
        if ($request->file('thumbnail')) {
            File::delete(public_path($video->thumbnail));
            $file = $request->file('thumbnail');
            if (Video::exists()) {
                $file_name = date('YmdHi').(Video::orderBy('created_at', 'desc')->first()->id + 1).'.'.$request->file('thumbnail')->extension();
            } else {
                $file_name = date('YmdHi').'1.'.$request->file('thumbnail')->extension();
            }
            $file->move(public_path('user_uploads/videos/thumbnails'), $file_name);
            $full_path = 'user_uploads/videos/thumbnails/'.$file_name;
            $video['thumbnail'] = $full_path;
        }
        $video->save();
        return redirect(route('admin.videos.show', $video));
    }

    public function destroy(Video $video)
    {
        File::delete(public_path($video->thumbnail));
        $video->delete();
        return redirect(route('admin.videos.index'));
    }
}
