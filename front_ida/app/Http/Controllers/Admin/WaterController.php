<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\WaterProject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class WaterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $waters = WaterProject::all();
        return view('admin.water.index', compact('waters'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.water.create');
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
            $data['image'] = $request->file('image')->store('water', 'public');
        }

        // Gestion des images du carrousel
        $carouselPaths = [];
        if ($request->hasFile('carousel')) {
            foreach ($request->file('carousel') as $carouselImage) {
                $carouselPaths[] = $carouselImage->store('water_carousel', 'public');
            }
        }
        $data['carousel'] = $carouselPaths;

        WaterProject::create($data);
        return redirect()->route('admin.water.index')->with('success', 'Projet Water créé avec succès.');
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
    public function edit(WaterProject $water)
    {
        return view('admin.water.edit', compact('water'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, WaterProject $water)
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
            $data['image'] = $request->file('image')->store('water', 'public');
        }

        $carouselPaths = $water->carousel ?? [];
        if ($request->hasFile('carousel')) {
            foreach ($request->file('carousel') as $carouselImage) {
                $carouselPaths[] = $carouselImage->store('water_carousel', 'public');
            }
        }
        $data['carousel'] = $carouselPaths;

        $water->update($data);
        return redirect()->route('admin.water.index')->with('success', 'Projet Water mis à jour avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(WaterProject $water)
    {
        $water->delete();
        return redirect()->route('admin.water.index')->with('success', 'Projet Water supprimé avec succès.');
    }
}
