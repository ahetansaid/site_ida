<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Fipa;
use Illuminate\Support\Facades\Storage;

class FipaController extends Controller
{
    public function index()
    {
        $projets = Fipa::all();
        return view('admin.fipa.index', compact('projets'));
    }

    public function create()
    {
        return view('admin.fipa.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'titre' => 'required|string|max:255|unique:fipas,titre',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'description' => 'nullable|string',
        ]);

        $projetData = $request->only(['titre', 'description']);
        if ($request->hasFile('image')) {
            $projetData['image'] = $request->file('image')->store('fipa', 'public');
        }

        Fipa::create($projetData);
         return redirect()->route('admin.fipa.index')->with('success', 'Projet créé avec succès.');
    }

    public function show(Fipa $projet)
    {
        return view('admin.fipa.show', compact('projet'));
    }

    public function edit(Fipa $projet)
    {
        return view('admin.fipa.edit', compact('projet'));
    }

    public function update(Request $request, Fipa $projet)
    {
        $request->validate([
            'titre' => 'required|string|max:255|unique:fipas,titre,' . $projet->id,
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'description' => 'nullable|string',
        ]);

        $projetData = $request->only(['titre', 'description']);
        if ($request->hasFile('image')) {
            if ($projet->image) {
                Storage::disk('public')->delete($projet->image);
            }
            $projetData['image'] = $request->file('image')->store('fipa', 'public');
        }

        $projet->update($projetData);
        return redirect()->route('admin.fipa.index')->with('success', 'Projet mis à jour avec succès.');
    }

    public function destroy(Fipa $projet)
    {
        try {
            if ($projet->image) {
                Storage::disk('public')->delete($projet->image);
            }
            $projet->delete();
            return redirect()->route('admin.fipa.index')->with('success', 'Projet supprimé avec succès.');
        } catch (\Exception $e) {
            return redirect()->route('admin.fipa.index')->with('error', 'Erreur lors de la suppression : ' . $e->getMessage());
        }
    }
}
