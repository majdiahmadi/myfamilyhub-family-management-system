<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    // 1. Show Dashboard with Events
    public function dashboard()
    {
        $today = \Carbon\Carbon::today();

        // Automatically separate events based on Date
        $upcomingEvents = Event::where('date', '>=', $today)->orderBy('date', 'asc')->get();
        $pastEvents = Event::where('date', '<', $today)->orderBy('date', 'desc')->get();
        
        return view('dashboard', compact('upcomingEvents', 'pastEvents'));
    }

    // 2. Show the "Event Details" Page (Itinerary)
    public function show($id)
    {
        $event = Event::findOrFail($id);
        return view('events.show', compact('event'));
    }

    // 3. Show "Add Event" Form (Admin only)
    public function create()
    {
        return view('events.create');
    }

    // 4. Save New Event
    public function store(Request $request)
    {
        // Handle Image Upload
        $path = null;
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('events', 'public');
        }

        Event::create([
            'title' => $request->title,
            'description' => $request->description,
            'date' => $request->date,
            'time_range' => $request->time_range,
            'venue' => $request->venue,
            'dress_code' => $request->dress_code,
            'image_path' => $path,
            'is_upcoming' => true
        ]);

        return redirect()->route('dashboard');
    }

    // 5. Show "Edit Event" Form
    public function edit($id)
    {
        $event = Event::findOrFail($id);
        return view('events.edit', compact('event'));
    }

    // 6. Update Event
    public function update(Request $request, $id)
    {
        $event = Event::findOrFail($id);

        // Update basic fields
        $event->title = $request->title;
        $event->description = $request->description;
        $event->date = $request->date;
        $event->time_range = $request->time_range;
        $event->venue = $request->venue;
        $event->dress_code = $request->dress_code;

        // Update Image ONLY if a new one is uploaded
        if ($request->hasFile('image')) {
            $event->image_path = $request->file('image')->store('events', 'public');
        }

        $event->save();

        return redirect()->route('events.show', $event->id);
    }
}