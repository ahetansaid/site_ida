<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ActiveVolunteer;
use Illuminate\Http\Request;

class ActiveVolunteerController extends Controller
{
    public function index()
    {
        $volunteers = ActiveVolunteer::all();
        return view('admin.active_volunteers.index', compact('volunteers'));
    }

    public function create()
    {
        return view('admin.active_volunteers.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nom' => 'required|string|max:255',
            'poste' => 'required|string|max:255',
            'image' => 'nullable|image',
            'linkedin' => 'nullable|url',
        ]);

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('volunteers', 'public');
        }

        ActiveVolunteer::create($data);
        return redirect()->route('admin.active_volunteers.index')->with('success', 'Volontaire ajouté avec succès.');
    }

    public function edit(ActiveVolunteer $activeVolunteer)
    {
        return view('admin.active_volunteers.edit', compact('activeVolunteer'));
    }

    public function update(Request $request, ActiveVolunteer $activeVolunteer)
    {
        $data = $request->validate([
            'nom' => 'required|string|max:255',
            'poste' => 'required|string|max:255',
            'image' => 'nullable|image',
            'linkedin' => 'nullable|url',
        ]);

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('volunteers', 'public');
        }

        $activeVolunteer->update($data);
        return redirect()->route('admin.active_volunteers.index')->with('success', 'Volontaire modifié avec succès.');
    }

    public function destroy(ActiveVolunteer $activeVolunteer)
    {
        $activeVolunteer->delete();
        return redirect()->route('admin.active_volunteers.index')->with('success', 'Volontaire supprimé avec succès.');
    }
} 