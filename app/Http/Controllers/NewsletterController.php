<?php

namespace App\Http\Controllers;

use App\Models\Newsletter;
use Illuminate\Http\Request;

class NewsletterController extends Controller
{
    public function index()
    {
        $newsletters = Newsletter::all();
        return view('newsletters.index', compact('newsletters'));
    }

    public function show(Newsletter $newsletter)
    {
        return view('newsletters.show', compact('newsletter'));
    }
}
