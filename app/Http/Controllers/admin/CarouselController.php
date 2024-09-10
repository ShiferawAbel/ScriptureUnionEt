<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Carousel;
use Illuminate\Support\Facades\File;

class CarouselController extends Controller
{
    public function index()
    {
        $carousels = Carousel::all();
        return view('admin.content_management.carousels.index', compact('carousels'));
    }
 
    public function create()
    {
        return view('admin.content_management.carousels.create');
    }
    
    public function store(Request $request) {
        $data = $request->validate([
            'image' => 'image',
            'header' => 'required|string',
            'body' => 'required|string',
        ]);
        // dd($data);
        $file_name = date('YmdHi').'.'.$request->file('image')->extension();
        $request->file('image')->move(public_path('user_uploads/carousel/images'),  $file_name);
        $full_path = 'user_uploads/carousel/images/'.$file_name;
        $video = Carousel::create([
            'header' => $request->input('header'),
            'body' => $request->input('body'),
            'image' => $full_path,
        ]);

        return redirect(route('admin.index'));
    }
    
    public function destroy(Carousel $carousel)
    {
        File::delete(public_path($carousel->image));
        $carousel->delete();
        return redirect(route('admin.carousels.index'));
    }
}
