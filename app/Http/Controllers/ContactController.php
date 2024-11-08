<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function create()
    {
        $meta_data = [
            'title' => 'Contact Us - The Scripture Union of Ethiopia (SUE)',
            'description' => 'Get in touch with the Scripture Union of Ethiopia for any inquiries, support, or further information about our ministry.',
            'keywords' => 'Scripture Union, Ethiopia, Contact, Christian Ministry, Youth Ministry, Bible Study, Salvation',
            'author' => 'Scripture Union of Ethiopia (suethiopia)',
            'canonical' => env('APP_URL') . '/contact-us',
            'og_title' => 'Contact Us - The Scripture Union of Ethiopia (SUE)',
            'og_description' => 'Get in touch with the Scripture Union of Ethiopia for any inquiries, support, or further information about our ministry.',
            'og_image' => env('APP_URL') . '/images/logo.png',
            'og_url' => env('APP_URL') . '/contact-us',
            'og_type' => 'website',
            'twitter_card' => 'summary_large_image',
            'twitter_title' => 'Contact Us - The Scripture Union of Ethiopia (SUE)',
            'twitter_description' => 'Get in touch with the Scripture Union of Ethiopia for any inquiries, support, or further information about our ministry.',
            'twitter_image' => env('APP_URL') . '/images/logo.png',
            'twitter_site' => '@SUethiopia',
        ];
        
        return view('contact', compact('meta_data'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
        ]);

        Mail::to('info@suethiopia.org')->send(new ContactMail($data));

        return view('contact');

    }
}
