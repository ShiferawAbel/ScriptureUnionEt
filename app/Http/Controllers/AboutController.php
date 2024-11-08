<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $meta_data = [
            'title' => 'About Us - The Scripture Union of Ethiopia (SUE)',
            'description' => 'Learn more about the Scripture Union of Ethiopia (SUE), a community of believers dedicated to living and serving by reading and obeying the word of God.',
            'keywords' => 'Scripture Union, Ethiopia, Christian Ministry, Youth Ministry, Bible Study, Salvation, About Us',
            'author' => 'Scripture Union of Ethiopia (suethiopia)',
            'canonical' => env('APP_URL') . '/about',
            'og_title' => 'About Us - The Scripture Union of Ethiopia (SUE)',
            'og_description' => 'Learn more about the Scripture Union of Ethiopia (SUE), a community of believers dedicated to living and serving by reading and obeying the word of God.',
            'og_image' => env('APP_URL') . '/images/logo.png',
            'og_url' => env('APP_URL') . '/about',
            'og_type' => 'website',
            'twitter_card' => 'summary_large_image',
            'twitter_title' => 'About Us - The Scripture Union of Ethiopia (SUE)',
            'twitter_description' => 'Learn more about the Scripture Union of Ethiopia (SUE), a community of believers dedicated to living and serving by reading and obeying the word of God.',
            'twitter_image' => env('APP_URL') . '/images/logo.png',
            'twitter_site' => '@SUethiopia',
        ];
        
        return view('abouts.index', compact('meta_data'));
    }

    public function vision_mission_values()
    {
        return view('abouts.vision-mission-values');
    }

    public function history()
    {
        return view('abouts.history');
    }

    public function what_we_believe()
    {
        return view('abouts.what-we-believe');
    }

    public function who_we_are()
    {
        return view('abouts.who-we-are');
    }

    public function leadership()
    {
        return view('abouts.leadership');
    }
}
