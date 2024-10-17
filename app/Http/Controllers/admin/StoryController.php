<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Carousel;
use App\Models\Story;
use Illuminate\Support\Facades\File;

class StoryController extends Controller
{
    public function index()
    {
        $stories = Story::all();
        return view('admin.stories.index', compact('stories'));
    }

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

        
        $story = Story::create($data);
        if ($request->input('carousel')) {
            $carousel = Carousel::create([
                'image' => $path,
                'header' => $request->title,
                'body' => '',
                'story_id' => $story->id
            ]);
        }

        return redirect(route('admin.stories.show', $story));
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

    public function edit(Story $story)
    {
        return view('admin.stories.edit', compact('story'));
    }

    public function update(Request $request, Story $story)
    {

        $data = $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);
        if ($request->hasFile('cover_img')) {
            File::delete(public_path('storage/'.$story->cover_img));
            $file_name = $request->file('cover_img')->store('stories/cover_img', 'public');
        } else {
            $file_name = $story->cover_img;
        }

        $story->update($data);
        $story->cover_img = $file_name;
        
        $story->save();
        
        return redirect(route('admin.stories.show', $story));
    }
    
    public function destroy(Story $story)
    {
        File::delete(public_path('storage/'.$story->cover_img));
        $story->delete();
        return redirect(route('admin.carousels.index'));
    }
}