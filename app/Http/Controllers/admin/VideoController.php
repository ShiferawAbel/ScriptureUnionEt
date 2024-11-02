<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Video;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class VideoController extends Controller
{
    public function index()
    {
        $videos = Video::all();
        return view('admin.videos.index', compact('videos'));
    }
    public function create()
    {
        return view('admin.videos.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string',
            'youtube_iframe' => 'required|string',
            'thumbnail' => 'image',
        ]);

        $full_path = $request->file('thumbnail')->store('video_thumbnails', 'public');
        $video = Video::create([
            'slug' => Str::slug($request->title),
            'title' => $request->input('title'),
            'youtube_iframe' => $request->input('youtube_iframe'),
            'thumbnail' => $full_path,
        ]);

        return redirect(route('admin.videos.show', $video->slug));
    }

    public function show(Video $video)
    {
        $videos = Video::all();
        return view('admin.videos.show', compact('video', 'videos'));
    }

    public function edit(Video $video)
    {
        return view('admin.videos.edit', compact('video'));
    }

    public function update(Video $video, Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string',
            'youtube_iframe' => 'required|string',
            'thumbnail' => 'image',
        ]);
        $video->update($request->except('thumbnail'));
        if ($request->file('thumbnail')) {
            File::delete(public_path($video->thumbnail));
            $file = $request->file('thumbnail');
            $full_path = $file->store('video_thumbnails', 'public');
            $video['thumbnail'] = $full_path;
        }
        $video->save();
        return redirect(route('admin.videos.show', $video->slug));
    }

    public function destroy(Video $video)
    {
        File::delete(public_path('storage/' . $video->thumbnail));
        $video->delete();
        return redirect(route('admin.videos.index'));
    }
}
