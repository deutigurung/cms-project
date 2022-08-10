<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::all();
        return view('backend.events.index', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.events.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255|unique:events',
            'description' => 'nullable|string',
            'date' => 'required',
            'time' => 'required',
            'organizer' => 'required',
            'organizer_email' => 'required|email',
            'organizer_phone' => 'required',
            'venue_location' => 'required',
            'image' => 'nullable|mimes:jpg,jpeg,png|max:2060',
        ]);
        $event = Event::create([
            'title' => $request->get('title'),
            'slug' => Str::slug($request->get('title')),
            'description' => $request->get('description'),
            'status' => 1,
            'date' => $request->get('date'),
            'time' => $request->get('time'),
            'organizer' => $request->get('organizer'),
            'organizer_email' => $request->get('organizer_email'),
            'organizer_website' => $request->get('organizer_website'),
            'organizer_phone' => $request->get('organizer_phone'),
            'venue_location' => $request->get('venue_location'),
            'venue_phone' => $request->get('venue_phone'),
        ]);
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $destination = 'uploads/events';
            $file_name = 'event-pic-' . $event->id . '.' . $extension;
            $file->move($destination, $file_name);
            Event::where('id', $event->id)->update(['image' => $file_name]);
        }
        return redirect()->route('events.index')->with('success', 'Event Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $event = Event::find($id);
        return view('backend.events.edit', compact('event'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255|unique:events,title,' . $id,
            'description' => 'nullable|string',
            'date' => 'required',
            'time' => 'required',
            'organizer' => 'required',
            'organizer_email' => 'required|email',
            'organizer_phone' => 'required',
            'venue_location' => 'required',
            'image' => 'nullable|mimes:jpg,jpeg,png|max:2060',
        ]);

        $event = Event::find($id);
        $event->update([
            'title' => $request->get('title'),
            'slug' => Str::slug($request->get('title')),
            'description' => $request->get('description'),
            'status' => $request->get('status'),
            'date' => $request->get('date'),
            'time' => $request->get('time'),
            'organizer' => $request->get('organizer'),
            'organizer_email' => $request->get('organizer_email'),
            'organizer_website' => $request->get('organizer_website'),
            'organizer_phone' => $request->get('organizer_phone'),
            'venue_location' => $request->get('venue_location'),
            'venue_phone' => $request->get('venue_phone'),
        ]);
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $destination = 'uploads/events';
            $file_name = 'event-pic-' . $event->id . '.' . $extension;
            $file->move($destination, $file_name);
            Event::where('id', $event->id)->update(['image' => $file_name]);
        }
        return redirect()->route('events.index')->with('success', 'Event Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $event = Event::find($id);
        $event->delete();
        return redirect()->route('events.index')->with('success', 'Event Deleted Successfully');
    }
}
