<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MinistryController extends Controller
{
    public function highschool(Request $request) 
    {
        return view('ministries.highschool');
    }
    
    public function church(Request $request) 
    {
        return view('ministries.church');
    }
}
