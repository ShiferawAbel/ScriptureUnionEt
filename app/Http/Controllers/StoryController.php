<?php

namespace App\Http\Controllers;

use App\Models\Story;
use Illuminate\Http\Request;

class StoryController extends Controller
{
    public function index()
    {
        $stories = Story::all();
        return view('stories.index', compact('stories'));
    }

    public function show(Story $story)
    {
        $story = Story::with(['images' => function ($query) {
            $query->orderBy('created_at', 'desc'); // Sort by created_at in ascending order
        }])->find($story->id);
        // dd($story->images);
        return view('stories.show', compact('story'));
    } 
}
