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
        return view('admin.carousels.index', compact('carousels'));
    }
 
    public function create()
    {
        return view('admin.carousels.create');
    }
    
    public function store(Request $request) {
        $data = $request->validate([
            'image' => 'image',
            'header' => 'required|string',
            'body' => 'required|string',
        ]);
        $file_name = date('YmdHi').'.'.$request->file('image')->extension();
        $request->file('image')->move(public_path('user_uploads/carousels/'),  $file_name);
        $full_path = 'user_uploads/carousels/'.$file_name;
        $carousel = Carousel::create([
            'header' => $request->input('header'),
            'body' => $request->input('body'),
            'image' => $full_path,
        ]);

        return redirect(route('admin.index'));
    }
    
    public function edit(Carousel $carousel)
    {
        return view('admin.carousels.edit', compact('carousel'));
    }
    
    public function update(Request $request, Carousel $carousel)
    {
        $data = $request->validate([
            'image' => 'image',
            'header' => 'required|string',
            'body' => 'required|string',
        ]);
        $carousel->update($request->except('image'));
        if ($request->file('image')) {
            File::delete(public_path('user_uploads/carousels/banners/'.$carousel->image));
            $file = $request->file('image');
            if (Carousel::exists()) {
                $file_name = date('YmdHi').(Carousel::orderBy('created_at', 'desc')->first()->id + 1).'.'.$request->file('image')->extension();
            } else {
                $file_name = date('YmdHi').'1.'.$request->file('image')->extension();
            }
            $file->move(public_path('user_uploads/carousels'), $file_name);
            $carousel['image'] = 'user_uploads/carousels/'.$file_name;
        }
        $carousel->save();
        return redirect(route('admin.carousels.index'));
    }
    public function destroy(Carousel $carousel)
    {
        File::delete(public_path($carousel->image));
        $carousel->delete();
        return redirect(route('admin.carousels.index'));
    }
}
