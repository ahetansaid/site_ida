<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\StrategicApproach;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class StrategicApproachController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $strategicApproaches = StrategicApproach::all();
        return view('admin.strategic-approach.index', compact('strategicApproaches'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.strategic-approach.create');
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
            $data['image'] = $request->file('image')->store('strategic-approach', 'public');
        }

        // Gestion des images du carrousel
        $carouselPaths = [];
        if ($request->hasFile('carousel')) {
            foreach ($request->file('carousel') as $carouselImage) {
                $carouselPaths[] = $carouselImage->store('strategic-approach_carousel', 'public');
            }
        }
        $data['carousel'] = $carouselPaths;

        StrategicApproach::create($data);
        return redirect()->route('admin.strategic-approach.index')->with('success', 'Approche stratégique créée avec succès.');
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
    public function edit(StrategicApproach $strategicApproach)
    {
        return view('admin.strategic-approach.edit', compact('strategicApproach'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, StrategicApproach $strategicApproach)
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
            $data['image'] = $request->file('image')->store('strategic-approach', 'public');
        }

        $carouselPaths = $strategicApproach->carousel ?? [];
        if ($request->hasFile('carousel')) {
            foreach ($request->file('carousel') as $carouselImage) {
                $carouselPaths[] = $carouselImage->store('strategic-approach_carousel', 'public');
            }
        }
        $data['carousel'] = $carouselPaths;

        $strategicApproach->update($data);
        return redirect()->route('admin.strategic-approach.index')->with('success', 'Approche stratégique mise à jour avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(StrategicApproach $strategicApproach)
    {
        $strategicApproach->delete();
        return redirect()->route('admin.strategic-approach.index')->with('success', 'Approche stratégique supprimée avec succès.');
    }
}
