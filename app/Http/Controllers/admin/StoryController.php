<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Carousel;
use App\Models\Story;

class StoryController extends Controller
{
    public function create(Request $request) 
    {
        return view('admin.stories.create');
    }

    public function store (Request $request)
    {
        // dd($request->input('carousel'));
        $data = $request->validate([
            'title' => ['required'],
            'cover_img' => 'required|image',
            'content' => ['required'],
        ]);

        $path = $request->file('cover_img')->store('stories/cover_img', 'public');
        $data['cover_img'] = $path;

        if ($request->input('carousel')) {
            $carousel = Carousel::create([
                'image' => $path,
                'header' => 'A New Story',
                'body' => $request->title

            ]);
        }

        $story = Story::create($data);

        return redirect(route('stories.show', $story));
    }

    public function show (Request $request, Story $story)
    {
        return view('admin.stories.show', compact('story'));
    }
    
    public function upload(Request $request)
    {
        $path = $request->file('upload')->store('stories/key_images', 'public');
        $url = asset('storage/' . $path);

        return response()->json(['url' => $url, 'uploaded' => 1]);
    }
}