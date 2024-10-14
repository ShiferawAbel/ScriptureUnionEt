<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Newsletter;

class NewsletterController extends Controller
{
    public function index () {
        $newsletters = Newsletter::all();
        return view('admin.newsletters.index', compact('newsletters'));
    }

    public function create() {
        return view('admin.newsletters.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => ['required'],
            'description' => ['required'],
            'cover_img' => ['required'],
            'pdf_file' => ['required'],
        ]);
        $cover_path = $request->file('cover_img')->store('newsletter/cover_img', 'public');
        $pdf_path = $request->file('pdf_file')->store('newsletter/pdf_file', 'public');
        
        $data['cover_img'] = $cover_path;
        $data['pdf_file'] = $pdf_path;
        $newsletter = Newsletter::create($data);
        return redirect(route('admin.newsletters.show', $newsletter));
    }

    public function show(Newsletter $newsletter)
    {
        return view('admin.newsletters.show');
    }
}
