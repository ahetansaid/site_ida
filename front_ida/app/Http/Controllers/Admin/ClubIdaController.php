<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ClubIda;
use Illuminate\Http\Request;

class ClubIdaController extends Controller
{
    public function index()
    {
        $clubs = ClubIda::all();
        return view('admin.clubs_ida.index', compact('clubs'));
    }

    public function create()
    {
        return view('admin.clubs_ida.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nom' => 'required|string|max:255',
            'region' => 'required|string|max:255',
            'image' => 'nullable|image',
            'description' => 'nullable|string',
            'coordonateur' => 'nullable|string|max:255',
        ]);

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('clubs_ida', 'public');
        }

        ClubIda::create($data);
        return redirect()->route('admin.clubs_ida.index')->with('success', 'Club ajouté avec succès.');
    }

    public function edit(ClubIda $clubIda)
    {
        return view('admin.clubs_ida.edit', compact('clubIda'));
    }

    public function update(Request $request, ClubIda $clubIda)
    {
        $data = $request->validate([
            'nom' => 'required|string|max:255',
            'region' => 'required|string|max:255',
            'image' => 'nullable|image',
            'description' => 'nullable|string',
            'coordonateur' => 'nullable|string|max:255',
        ]);

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('clubs_ida', 'public');
        }

        $clubIda->update($data);
        return redirect()->route('admin.clubs_ida.index')->with('success', 'Club modifié avec succès.');
    }

    public function destroy(ClubIda $clubIda)
    {
        $clubIda->delete();
        return redirect()->route('admin.clubs_ida.index')->with('success', 'Club supprimé avec succès.');
    }
} 