<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\EventRegistration;
use Illuminate\Http\Request;

class EventController extends Controller
{
  

    public function index()
    {
        $events = Event::orderBy('start_date')->get(); // Tous les événements pour l'instant
        return view('admin.events.index', compact('events'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'start_date' => 'required|date',
            'end_date' => 'nullable|date|after:start_date',
            'location' => 'required|string|max:255',
            'image' => 'nullable|image|max:2048',
        ]);

        $path = $request->hasFile('image') ? $request->file('image')->store('events', 'public') : null;

        Event::create([
            'title' => $validated['title'],
            'description' => $validated['description'],
            'start_date' => $validated['start_date'],
            'end_date' => $validated['end_date'],
            'location' => $validated['location'],
            'image' => $path,
        ]);

        return redirect()->route('admin.events.index')->with('success', 'Événement créé avec succès.');
    }

    public function create()
    {
        return view('admin.events.create');
    }

    public function show($eventId)
    {
        $event = Event::findOrFail($eventId);
        return view('events.detail_event', compact('event'));
    }

    public function edit(Event $event)
    {
        return view('admin.events.edit', compact('event'));
    }

    public function update(Request $request, Event $event)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'start_date' => 'required|date',
            'end_date' => 'nullable|date|after:start_date',
            'location' => 'required|string|max:255',
            'image' => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('events', 'public');
            $event->image = $path;
        }

        $event->update($validated);

        return redirect()->route('admin.events.index')->with('success', 'Événement mis à jour avec succès.');
    }

    public function destroy(Event $event)
    {
        $event->delete();
        return redirect()->route('admin.events.index')->with('success', 'Événement supprimé avec succès.');
    }
   
    public function register($eventId)
    {
        $event = Event::findOrFail($eventId);
        return view('events.register', compact('event'));
    }

   public function submitRegistration(Request $request, $eventId)
    {
        //dd('Request data:', $request->all(), 'Event ID:', $eventId); // Ajoute ceci pour voir les données envoyées

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
        ]);

        EventRegistration::create([
            'event_id' => $eventId,
            'name' => $validated['name'],
            'email' => $validated['email'],
            'phone' => $validated['phone'],
        ]);

        return redirect()->back()->with('success', 'Inscription soumise avec succès !');
    }
}