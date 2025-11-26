<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $abouts = About::all();
        return view('admin.about.index', compact('abouts'));
    }

    public function create()
    {
        return view('admin.about.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'nullable|string',
            'description' => 'nullable|string',
            'img_url' => 'nullable|image',
        ]);

        if ($request->hasFile('img_url')) {
            $data['img_url'] = $request->file('img_url')->store('about', 'public');
        }

        About::create($data);
        return redirect()->route('admin.about.index')->with('success', 'Information générale ajoutée avec succès.');
    }

    public function edit(About $about)
    {
        return view('admin.about.edit', compact('about'));
    }

    public function update(Request $request, About $about)
    {
        $data = $request->validate([
            'title' => 'nullable|string',
            'description' => 'nullable|string',
            'img_url' => 'nullable|image',
        ]);

        if ($request->hasFile('img_url')) {
            $data['img_url'] = $request->file('img_url')->store('about', 'public');
        }

        $about->update($data);
        return redirect()->route('admin.about.index')->with('success', 'Information générale modifiée avec succès.');
    }

    public function destroy(About $about)
    {
        $about->delete();
        return redirect()->route('admin.about.index')->with('success', 'Information générale supprimée avec succès.');
    }
} 