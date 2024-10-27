<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Intervention\Image\Laravel\Facades\Image;
class EventController extends Controller
{
    public function index()
    {
        $events = Event::orderBy('start_date_time', 'asc')->get()->map(function ($event) {
            $event->formatted_start_date = Carbon::parse($event->start_date_time)->format('F j, Y g:i A T');
            $event->formatted_end_date = Carbon::parse($event->end_date_time)->format('F j, Y g:i A T');
            return $event;
        });
    
        $next_event = Event::orderBy('start_date_time', 'asc')->first();
        if ($next_event) {
            $next_event->formatted_start_date = Carbon::parse($next_event->start_date_time)->format('F j, Y g:i A T');
            $next_event->formatted_end_date = Carbon::parse($next_event->end_date_time)->format('F j, Y g:i A T');
        }
    
        $current_date_time = Carbon::now()->format('F j, Y g:i A T');
    
        return view('events.index', compact('events', 'next_event', 'current_date_time'));
    }
    
    public function show(Event $event)
    {
        $event->formatted_start_date = Carbon::parse($event->start_date_time)->format('F j, Y g:i A T');
        $event->formatted_end_date = Carbon::parse($event->end_date_time)->format('F j, Y g:i A T');
    
        return view('events.show', compact('event'));
    }

    
}
