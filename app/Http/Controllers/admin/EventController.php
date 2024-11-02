<?php

namespace App\Http\Controllers\admin;

use App\Models\Event;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class EventController extends Controller
{
    public function index(Request $request)
    {
        $events = Event::all();
        $next_event = Event::orderBy('start_date_time', 'asc')->first();
        return view('admin.events.index', compact('events', 'next_event'));
    }
    public function create()
    {
        return view('admin.events.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'event_name' => 'required',
            'start_date_time' => 'required',
            'end_date_time' => 'required',
            'description' => 'required',
            'location' => 'required',
            'banner_img' => 'required|image',
        ]);
        // dd($request);
        if ($request->file('banner_img')) {
            $full_path = $request->file('banner_img')->store('events', 'public');
        }
        $data['slug'] = Str::slug($request->event_name);
        $event = Event::create($data);
        $event['banner_img'] = $full_path;
        $event->save();
        return redirect(route('admin.events.show', $event->slug));
    }
    public function show(Event $event)
    {
        return view('admin.events.show', compact('event'));
    }

    public function edit(Event $event)
    {
        return view('admin.events.edit', compact('event'));
    }

    public function update(Request $request, Event $event)
    {
        $data = $request->validate([
            'event_name' => 'required',
            'start_date_time' => 'required',
            'end_date_time' => 'required',
            'description' => 'required',
            'location' => 'required',
            'banner_img' => 'image',
        ]);
        $event->update($request->except('banner_img'));
        if ($request->file('banner_img')) {
            File::delete(public_path('storage/' . $event->banner_img));
            $file_name = $request->file('banner_img')->store('events', 'public');
            $event['banner_img'] = $file_name;
        }
        $event->save();
        return redirect(route('admin.events.show', $event->slug));
    }

    public function destroy(Event $event)
    {
        File::delete(public_path('storage/' . $event->banner_img));
        $event->delete();
        return redirect(route('admin.events.index'));
    }
}
