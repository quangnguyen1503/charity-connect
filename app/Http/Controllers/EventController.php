<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::orderBy('start_date', 'desc')->get(); // hoặc ::all()
        return view('event.index', compact('events'));
    }

    public function show($id)
    {
        $event = \App\Models\Event::findOrFail($id);
        return view('event.show', compact('event'));
    }
}
