<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function index() 
    {
        $videos = Video::all();
        return view('videos.index', compact('videos'));
    }

    public function show(Video $video)
    {
        return view('videos.show', compact('video'));
    }
}
