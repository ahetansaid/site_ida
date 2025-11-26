<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\OurStory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class OurStoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ourStories = OurStory::orderBy('order')->get();
        return view('admin.our-story.index', compact('ourStories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.our-story.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'description' => 'nullable|string',
            'order' => 'integer|min:0'
        ]);

        $imagePath = $request->file('image')->store('our-stories', 'public');

        OurStory::create([
            'title' => $request->title,
            'image' => $imagePath,
            'description' => $request->description,
            'order' => $request->order ?? 0,
            'is_active' => true
        ]);

        return redirect()->route('admin.our-story.index')->with('success', 'Our Story créée avec succès!');
    }

    /**
     * Display the specified resource.
     */
    public function show(OurStory $ourStory)
    {
        return view('admin.our-story.show', compact('ourStory'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(OurStory $ourStory)
    {
        return view('admin.our-story.edit', compact('ourStory'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, OurStory $ourStory)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'description' => 'nullable|string',
            'order' => 'integer|min:0',
            'is_active' => 'boolean'
        ]);

        $data = [
            'title' => $request->title,
            'description' => $request->description,
            'order' => $request->order ?? 0,
            'is_active' => $request->has('is_active')
        ];

        if ($request->hasFile('image')) {
            // Supprimer l'ancienne image
            Storage::disk('public')->delete($ourStory->image);
            $data['image'] = $request->file('image')->store('our-stories', 'public');
        }

        $ourStory->update($data);

        return redirect()->route('admin.our-story.index')->with('success', 'Our Story mise à jour avec succès!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(OurStory $ourStory)
    {
        // Supprimer l'image
        Storage::disk('public')->delete($ourStory->image);
        
        $ourStory->delete();

        return redirect()->route('admin.our-story.index')->with('success', 'Our Story supprimée avec succès!');
    }
}
