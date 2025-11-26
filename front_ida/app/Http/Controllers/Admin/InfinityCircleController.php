<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\InfinityCircle;
use Illuminate\Http\Request;

class InfinityCircleController extends Controller
{
    public function index()
    {
        $blocs = InfinityCircle::orderBy('ordre')->get();
        return view('admin.infinity_circle.index', compact('blocs'));
    }

    public function create()
    {
        return view('admin.infinity_circle.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'titre' => 'required|string|max:255',
            'sous_titre' => 'nullable|string|max:255',
            'contenu' => 'nullable|string',
            'image' => 'nullable|image',
            'ordre' => 'nullable|integer',
            'type_bloc' => 'nullable|string|max:50',
        ]);

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('infinity_circle', 'public');
        }

        InfinityCircle::create($data);
        return redirect()->route('admin.infinity_circle.index')->with('success', 'Bloc ajouté avec succès.');
    }

    public function edit(InfinityCircle $infinityCircle)
    {
        return view('admin.infinity_circle.edit', compact('infinityCircle'));
    }

    public function update(Request $request, InfinityCircle $infinityCircle)
    {
        $data = $request->validate([
            'titre' => 'required|string|max:255',
            'sous_titre' => 'nullable|string|max:255',
            'contenu' => 'nullable|string',
            'image' => 'nullable|image',
            'ordre' => 'nullable|integer',
            'type_bloc' => 'nullable|string|max:50',
        ]);

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('infinity_circle', 'public');
        }

        $infinityCircle->update($data);
        return redirect()->route('admin.infinity_circle.index')->with('success', 'Bloc modifié avec succès.');
    }

    public function destroy(InfinityCircle $infinityCircle)
    {
        $infinityCircle->delete();
        return redirect()->route('admin.infinity_circle.index')->with('success', 'Bloc supprimé avec succès.');
    }
} 