<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SmallBusinness;
use Illuminate\Http\Request;

class SmallBusinnessController extends Controller
{
    public function index()
    {
        $smallBusinesses = SmallBusinness::all();
        return view('admin.small_businness.index', compact('smallBusinesses'));
    }

    public function create()
    {
        return view('admin.small_businness.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'nullable|string',
            'description' => 'nullable|string',
            'img_url' => 'nullable|image',
        ]);

        if ($request->hasFile('img_url')) {
            $data['img_url'] = $request->file('img_url')->store('small_businness', 'public');
        }

        SmallBusinness::create($data);
        return redirect()->route('admin.small_businness.index')->with('success', 'Petite entreprise ajoutée avec succès.');
    }

    public function edit(SmallBusinness $smallBusinness)
    {
        return view('admin.small_businness.edit', compact('smallBusinness'));
    }

    public function update(Request $request, SmallBusinness $smallBusinness)
    {
        $data = $request->validate([
            'title' => 'nullable|string',
            'description' => 'nullable|string',
            'img_url' => 'nullable|image',
        ]);

        if ($request->hasFile('img_url')) {
            $data['img_url'] = $request->file('img_url')->store('small_businness', 'public');
        }

        $smallBusinness->update($data);
        return redirect()->route('admin.small_businness.index')->with('success', 'Petite entreprise modifiée avec succès.');
    }

    public function destroy(SmallBusinness $smallBusinness)
    {
        $smallBusinness->delete();
        return redirect()->route('admin.small_businness.index')->with('success', 'Petite entreprise supprimée avec succès.');
    }
} 