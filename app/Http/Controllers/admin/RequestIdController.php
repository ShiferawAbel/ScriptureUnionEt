<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\ImageManager;

class RequestIdController extends Controller
{
    public function create()
    {
        return view('admin.request_ids.create');
    }

    public function store(Request $request)
    {
        // dd($request);
        $manager = new ImageManager(new Driver());
        $sample = $manager->read(public_path('img/id_sample.png'));
        $sample->text($request->full_name, 420, 180, function($font) {
            $font->file(public_path('\admin-resources\font\Nunito-Regular.ttf'));
            $font->size(40);
            $font->color('#2e97c4');
            $font->align('start');
            $font->valign('top');
        });

        $sample->text($request->phone, 420, 270, function($font) {
            $font->file(public_path('\admin-resources\font\Nunito-Regular.ttf'));
            $font->size(40);
            $font->color('#2e97c4');
            $font->align('start');
            $font->valign('top');
        });

        $sample->text($request->role, 420, 360, function($font) {
            $font->file(public_path('\admin-resources\font\Nunito-Regular.ttf'));
            $font->size(40);
            $font->color('#2e97c4');
            $font->align('start');
            $font->valign('top');
        });

        $sample->text($request->address, 420, 450, function($font) {
            $font->file(public_path('\admin-resources\font\Nunito-Regular.ttf'));
            $font->size(40);
            $font->color('#2e97c4');
            $font->align('start');
            $font->valign('top');
        });

        function generateRandomId($prefix = 'SUE', $length = 4) { 
            $randomNumber = str_pad(mt_rand(1, 9999), $length, '0', STR_PAD_LEFT); 
            return $prefix . '/' . $randomNumber;
        }
        
        $sample->text(generateRandomId(), 170, 570, function($font) {
            $font->file(public_path('\admin-resources\font\Nunito-Regular.ttf'));
            $font->size(30);
            $font->color('#2e97c4');
            $font->align('start');
            $font->valign('top');
        });
        $path = $request->file('profile')->store('id_profiles', 'public');
        $profile = $manager->read('storage/'.$path)->resize(300, 400);
        $sample->place($profile, 'top-left', 30, 150);

        $sample->save(public_path('id_cards/' . $request->phone . '.png'));
        dd($sample);
    }

}
