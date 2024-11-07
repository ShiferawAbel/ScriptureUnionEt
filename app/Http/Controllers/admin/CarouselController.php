<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Carousel;
use Illuminate\Support\Facades\File;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\ImageManager;

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
        // $full_path = $request->file('image')->store('public', 'carousels');
        $file = $request->file('image');
        $image_manager = new ImageManager(new Driver());
        $img  = $image_manager->read($file);
        $resized = $img->cover(1154, 487, 'center');
        $path = 'carousels/' . $file->hashName();
        $resized->save(public_path('storage/' . $path));
        $carousel = Carousel::create([
            'header' => $request->input('header'),
            'body' => $request->input('body'),
            'image' => $path,
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
            'body' => 'string',
        ]);

        $carousel->update($request->except('image'));

        if ($request->file('image')) {
            if (File::exists(public_path('storage/'.$carousel->image))) {
                File::delete(public_path('storage/'.$carousel->image));
            }

            $file = $request->file('image');

            $image_manager = new ImageManager(new Driver());

            $img  = $image_manager->read($file);

            $resized = $img->cover(1154, 487, 'center');

            $path = 'carousels' . $file->hashName();

            $resized->save(public_path('storage/' . $path));            
            
            $carousel['image'] = $path;
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
