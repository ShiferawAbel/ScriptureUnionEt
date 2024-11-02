<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ImageController;
use App\Models\Carousel;
use App\Models\Image as ImageModel;
use App\Models\Story;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\File;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\ImageManager;
use Illuminate\Support\Str;

class StoryController extends Controller
{
    public function index()
    {
        $stories = Story::all();
        return view('admin.stories.index', compact('stories'));
    }

    public function create(Request $request)
    {
        return view('admin.stories.create');
    }

    public function store(Request $request)
    {
        // dd($request->input('carousel'));
        $data = $request->validate([
            'title' => ['required'],
            'cover_img' => 'required|image',
            'content' => ['required'],
            'images.*' => 'required|image|mimes:jpg,jpeg,png'
        ]);
        // dd($request);
        $file = $request->file('cover_img');
        $image_manager = new ImageManager(new Driver());
        $img  = $image_manager->read($file);
        $resized = $img->resize(1154, 487);
        $path = 'stories/cover_img' . $file->hashName();
        $resized->save(public_path('storage/' . $path));
        $data['cover_img'] = $path;


        $data['slug'] = Str::slug($request->title);
        $story = Story::create(Arr::except($data, ['images']));
        if ($request->input('carousel')) {
            $carousel = Carousel::create([
                'image' => $path,
                'header' => $request->title,
                'body' => '',
                'story_id' => $story->id
            ]);
        }

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $path = $image->store('stories/images', 'public');
                ImageModel::create([
                    'image' => $path,
                    'story_id' => $story->id,
                ]);
            }
        }

        return redirect(route('admin.stories.show', $story->slug));
    }

    public function show(Request $request, Story $story)
    {
        return view('admin.stories.show', compact('story'));
    }

    public function upload(Request $request)
    {
        $path = $request->file('upload')->store('stories/key_images', 'public');
        $url = asset('storage/' . $path);

        return response()->json(['url' => $url, 'uploaded' => 1]);
    }

    public function edit(Story $story)
    {
        return view('admin.stories.edit', compact('story'));
    }

    public function update(Request $request, Story $story)
    {

        $data = $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);
        if ($request->hasFile('cover_img')) {
            File::delete(public_path('storage/' . $story->cover_img));
            $file_name = $request->file('cover_img')->store('stories/cover_img', 'public');
        } else {
            $file_name = $story->cover_img;
        }

        $story->update($data);
        $story->cover_img = $file_name;

        $story->save();

        return redirect(route('admin.stories.show', $story->slug));
    }

    public function destroy(Story $story)
    {
        File::delete(public_path('storage/' . $story->cover_img));
        $story->delete();
        return redirect(route('admin.carousels.index'));
    }
}
