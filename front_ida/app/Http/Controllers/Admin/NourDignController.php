<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\NourDignProject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class NourDignController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $nourDigns = NourDignProject::all();
        return view('admin.nourdign.index', compact('nourDigns'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.nourdign.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'titre' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'domaines' => 'nullable|array',
            'domaines.*' => 'string',
            'carousel' => 'nullable|array',
            'carousel.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Gestion de l'image principale
        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('nourdign', 'public');
        }

        // Gestion des images du carrousel
        $carouselPaths = [];
        if ($request->hasFile('carousel')) {
            foreach ($request->file('carousel') as $carouselImage) {
                $carouselPaths[] = $carouselImage->store('nourdign_carousel', 'public');
            }
        }
        $data['carousel'] = $carouselPaths;

        NourDignProject::create($data);
        return redirect()->route('admin.nourdign.index')->with('success', 'Projet NourDign créé avec succès.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(NourDignProject $nourDign)
    {
        return view('admin.nourdign.edit', compact('nourDign'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, NourDignProject $nourDign)
    {
        $data = $request->validate([
            'titre' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'domaines' => 'nullable|array',
            'domaines.*' => 'string',
            'carousel' => 'nullable|array',
            'carousel.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('nourdign', 'public');
        }

        $carouselPaths = $nourDign->carousel ?? [];
        if ($request->hasFile('carousel')) {
            foreach ($request->file('carousel') as $carouselImage) {
                $carouselPaths[] = $carouselImage->store('nourdign_carousel', 'public');
            }
        }
        $data['carousel'] = $carouselPaths;

        $nourDign->update($data);
        return redirect()->route('admin.nourdign.index')->with('success', 'Projet NourDign mis à jour avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(NourDignProject $nourDign)
    {
        $nourDign->delete();
        return redirect()->route('admin.nourdign.index')->with('success', 'Projet NourDign supprimé avec succès.');
    }
}
