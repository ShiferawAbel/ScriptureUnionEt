<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Story;

class StoryController extends Controller
{
    public function create(Request $request) 
    {
        return view('admin.stories.create');
    }

    public function store (Request $request)
    {
        $data = $request->validate([
            'title' => ['required'],
            'content' => ['required'],
        ]);

        $data = Story::create($data);

    }

    public function show (Request $request, Story $story)
    {
        return view('admin.stories.show', compact('story'));
    }
    
    public function upload(Request $request)
    {
        $path = $request->file('upload')->store('stories', 'public');
        $url = asset('storage/' . $path);

        return response()->json(['url' => $url, 'uploaded' => 1]);
    }
}