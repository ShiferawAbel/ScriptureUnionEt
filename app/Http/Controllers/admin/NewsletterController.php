<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use App\Models\Newsletter;
use App\Mail\NewsletterPosted;
use App\Models\Subscription;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class NewsletterController extends Controller
{
    public function index()
    {
        $newsletters = Newsletter::all();
        return view('admin.newsletters.index', compact('newsletters'));
    }

    public function create()
    {
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

        $data['slug'] = Str::slug($request->title);
        $newsletter = Newsletter::create($data);

        $subscribers = Subscription::all();
        foreach ($subscribers as $subscriber) {
            Mail::to($subscriber->email)->send(new NewsletterPosted($newsletter));
        }
        return redirect(route('admin.newsletters.show', $newsletter));
    }

    public function show(Newsletter $newsletter)
    {
        return view('admin.newsletters.show', compact('newsletter'));
    }

    public function edit(Newsletter $newsletter)
    {
        return view('admin.newsletters.edit', compact('newsletter'));
    }

    public function update(Request $request, Newsletter $newsletter)
    {

        $data = $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);
        if ($request->hasFile('cover_img')) {
            File::delete(public_path('storage/' . $newsletter->cover_img));
            $file_name = $request->file('cover_img')->store('newsletter/cover_img', 'public');
        } else {
            $file_name = $newsletter->cover_img;
        }

        $newsletter->update($data);
        $newsletter->cover_img = $file_name;

        $newsletter->save();

        return redirect(route('admin.newsletters.show', $newsletter));
    }

    public function destroy(Newsletter $newsletter)
    {
        File::delete(public_path('storage/' . $newsletter->cover_img));
        $newsletter->delete();
        return redirect(route('admin.newsletters.index'));
    }
}
