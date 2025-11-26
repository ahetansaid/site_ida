<?php

namespace App\Http\Controllers;

use App\Models\SectionObama;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SectionObamaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sections = SectionObama::ordered()->get();
        return view('admin.section-obama.index', compact('sections'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.section-obama.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'order' => 'nullable|integer|min:0',
            'is_active' => 'boolean'
        ]);

        $data = $request->all();
        
        if ($request->hasFile('image')) {
            $data['img_url'] = $request->file('image')->store('section-obama', 'public');
        }

        $data['is_active'] = $request->has('is_active');

        SectionObama::create($data);

        return redirect()->route('section-obama.index')->with('success', 'Section Obama créée avec succès.');
    }

    /**
     * Display the specified resource.
     */
    public function show(SectionObama $sectionObama)
    {
        return view('admin.section-obama.show', compact('sectionObama'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SectionObama $sectionObama)
    {
        return view('admin.section-obama.edit', compact('sectionObama'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SectionObama $sectionObama)
    {
        $request->validate([
            'title' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'order' => 'nullable|integer|min:0',
            'is_active' => 'boolean'
        ]);

        $data = $request->all();
        
        if ($request->hasFile('image')) {
            // Supprimer l'ancienne image
            if ($sectionObama->img_url) {
                Storage::disk('public')->delete($sectionObama->img_url);
            }
            $data['img_url'] = $request->file('image')->store('section-obama', 'public');
        }

        $data['is_active'] = $request->has('is_active');

        $sectionObama->update($data);

        return redirect()->route('section-obama.index')->with('success', 'Section Obama mise à jour avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SectionObama $sectionObama)
    {
        if ($sectionObama->img_url) {
            Storage::disk('public')->delete($sectionObama->img_url);
        }
        
        $sectionObama->delete();

        return redirect()->route('section-obama.index')->with('success', 'Section Obama supprimée avec succès.');
    }
}
