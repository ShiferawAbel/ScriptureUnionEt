<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
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
}
