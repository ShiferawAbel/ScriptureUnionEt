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

        $meta_data = [
            'title' => $story->title . ': The Scripture Union of Ethiopia (SUE)',
            'description' => 'a blog about ' . $story->title,
            'keywords' => 'Scripture Union, Ethiopia, Christian Ministry, Youth Ministry, Bible Study, Salvation, ' . $story->title . ', ' . str_replace(' ', ', ', $story->title),
            'author' => 'Scripture Union of Ethiopia (suethiopia)',
            'canonical' => env('APP_URL'),
            'og_title' => 'The Scripture Union of Ethiopia (SUE)',
            'og_description' => 'A community of believers dedicated to living and serving by reading and obeying the word of God.',
            'og_image' => env('APP_URL') . '/img/Asset 3',
            'og_url' => env('APP_URL'),
            'og_type' => 'website',
            'twitter_card' => 'summary_large_image',
            'twitter_title' => 'The Scripture Union of Ethiopia (SUE)',
            'twitter_description' => 'A community of believers dedicated to living and serving by reading and obeying the word of God.',
            'twitter_image' => 'https://www.suethiopia.org/images/logo.png',
            'twitter_site' => '@SUethiopia',
        ];
        
        // dd($story->images);
        return view('stories.show', compact('story', 'meta_data'));
    }
}
