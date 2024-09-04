<?php

namespace App\Http\Controllers\admin;

use App\Models\Event;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

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
            $file = $request->file('banner_img');
            if (Event::exists()) {
                $file_name = date('YmdHi').(Event::orderBy('created_at', 'desc')->first()->id + 1).'.'.$request->file('banner_img')->extension();
            } else {
                $file_name = date('YmdHi').'1.'.$request->file('banner_img')->extension();
            }
            $file->move(public_path('user_uploads/events/banners'), $file_name);
            $full_path = 'user_uploads/events/banners/'.$file_name;
        }
        $event = Event::create($data);
        $event['banner_img'] = $full_path;
        $event->save();
        return redirect(route('admin.events.show', $event));
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
            File::delete(public_path('user_uploads/events/banners/'.$event->banner_img));
            $file = $request->file('banner_img');
            if (Event::exists()) {
                $file_name = date('YmdHi').(Event::orderBy('created_at', 'desc')->first()->id + 1).'.'.$request->file('banner_img')->extension();
            } else {
                $file_name = date('YmdHi').'1.'.$request->file('banner_img')->extension();
            }
            $file->move(public_path('user_uploads/events/banners'), $file_name);
            $event['banner_img'] = $file_name;
        }
        $event->save();
        return redirect(route('admin.events.show', $event));
    }
    
    public function destroy(Event $event)
    {
        File::delete(public_path('user_uploads/events/banners/'.$event->banner_img));
        $event->delete();
        return redirect(route('admin.events.index'));
    }
}
