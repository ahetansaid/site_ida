<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AfwaProject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class AfwaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $afwas = AfwaProject::all();
        return view('admin.afwa.index', compact('afwas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.afwa.create');
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
            $data['image'] = $request->file('image')->store('afwa', 'public');
        }

        // Gestion des images du carrousel
        $carouselPaths = [];
        if ($request->hasFile('carousel')) {
            foreach ($request->file('carousel') as $carouselImage) {
                $carouselPaths[] = $carouselImage->store('afwa_carousel', 'public');
            }
        }
        $data['carousel'] = $carouselPaths;

        AfwaProject::create($data);
        return redirect()->route('admin.afwa.index')->with('success', 'Projet AfWA créé avec succès.');
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
    public function edit(AfwaProject $afwa)
    {
        return view('admin.afwa.edit', compact('afwa'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, AfwaProject $afwa)
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
            $data['image'] = $request->file('image')->store('afwa', 'public');
        }

        $carouselPaths = $afwa->carousel ?? [];
        if ($request->hasFile('carousel')) {
            foreach ($request->file('carousel') as $carouselImage) {
                $carouselPaths[] = $carouselImage->store('afwa_carousel', 'public');
            }
        }
        $data['carousel'] = $carouselPaths;

        $afwa->update($data);
        return redirect()->route('admin.afwa.index')->with('success', 'Projet AfWA mis à jour avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AfwaProject $afwa)
    {
        $afwa->delete();
        return redirect()->route('admin.afwa.index')->with('success', 'Projet AfWA supprimé avec succès.');
    }
}
