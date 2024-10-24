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
        $events = Event::orderBy('start_date_time', 'asc')->get();
        $next_event = Event::orderBy('start_date_time', 'asc')->first();
        $current_date_time = Carbon::now();
        return view('events.index', compact('events', 'next_event', 'current_date_time'));
    }

    
}
