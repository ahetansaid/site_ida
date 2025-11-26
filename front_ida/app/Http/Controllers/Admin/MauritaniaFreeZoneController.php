<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\MauritaniaFreeZone;
use Illuminate\Http\Request;

class MauritaniaFreeZoneController extends Controller
{
    public function index()
    {
        $mauritaniaFreeZones = MauritaniaFreeZone::all();
        return view('admin.mauritania_free_zone.index', compact('mauritaniaFreeZones'));
    }

    public function create()
    {
        return view('admin.mauritania_free_zone.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'nullable|string',
            'description' => 'nullable|string',
            'img_url' => 'nullable|image',
        ]);

        if ($request->hasFile('img_url')) {
            $data['img_url'] = $request->file('img_url')->store('mauritania_free_zone', 'public');
        }

        MauritaniaFreeZone::create($data);
        return redirect()->route('admin.mauritania_free_zone.index')->with('success', 'Zone franche Mauritanie ajoutée avec succès.');
    }

    public function edit(MauritaniaFreeZone $mauritaniaFreeZone)
    {
        return view('admin.mauritania_free_zone.edit', compact('mauritaniaFreeZone'));
    }

    public function update(Request $request, MauritaniaFreeZone $mauritaniaFreeZone)
    {
        $data = $request->validate([
            'title' => 'nullable|string',
            'description' => 'nullable|string',
            'img_url' => 'nullable|image',
        ]);

        if ($request->hasFile('img_url')) {
            $data['img_url'] = $request->file('img_url')->store('mauritania_free_zone', 'public');
        }

        $mauritaniaFreeZone->update($data);
        return redirect()->route('admin.mauritania_free_zone.index')->with('success', 'Zone franche Mauritanie modifiée avec succès.');
    }

    public function destroy(MauritaniaFreeZone $mauritaniaFreeZone)
    {
        $mauritaniaFreeZone->delete();
        return redirect()->route('admin.mauritania_free_zone.index')->with('success', 'Zone franche Mauritanie supprimée avec succès.');
    }
} 