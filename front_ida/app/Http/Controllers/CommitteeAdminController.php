<?php

namespace App\Http\Controllers;

use App\Models\Committee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class CommitteeAdminController extends Controller
{
    public function index()
    {
        $committees = Committee::all();
        return view('committees.admin.index', compact('committees'));
    }

    public function create()
    {
        return view('committees.admin.create');
    }

    public function store(Request $request)
    {
        Log::info('Requête reçue dans store committee', $request->all());

        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'objectives' => 'nullable|string',
            'photo' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ], [
            'name.required' => 'Le nom du comité est obligatoire.',
            'name.max' => 'Le nom ne doit pas dépasser 255 caractères.',
            'photo.image' => 'La photo doit être une image (jpg, jpeg, png).',
            'photo.max' => 'La photo ne doit pas dépasser 2MB.',
        ]);

        try {
            $data = $request->only(['name', 'description', 'objectives']);
            
            if ($request->hasFile('photo')) {
                $data['photo_path'] = $request->file('photo')->store('committees', 'public');
            }

            $committee = Committee::create($data);

            Log::info('Comité créé avec succès', ['committee_id' => $committee->id]);

            return redirect()->route('admin.committees.index')->with('success', 'Comité créé avec succès.');
        } catch (\Exception $e) {
            Log::error('Erreur lors de la création du comité : ' . $e->getMessage());
            return back()->with('error', 'Une erreur est survenue lors de la création du comité.')->withInput();
        }
    }

    public function edit(Committee $committee)
    {
        return view('committees.admin.edit', compact('committee'));
    }

    public function update(Request $request, Committee $committee)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'objectives' => 'nullable|string',
            'photo' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        try {
            $data = $request->only(['name', 'description', 'objectives']);
            
            if ($request->hasFile('photo')) {
                if ($committee->photo_path) {
                    Storage::disk('public')->delete($committee->photo_path);
                }
                $data['photo_path'] = $request->file('photo')->store('committees', 'public');
            }

            $committee->update($data);

            return redirect()->route('admin.committees.index')->with('success', 'Comité mis à jour avec succès.');
        } catch (\Exception $e) {
            Log::error('Erreur lors de la mise à jour du comité : ' . $e->getMessage());
            return back()->with('error', 'Une erreur est survenue lors de la mise à jour du comité.')->withInput();
        }
    }

    public function destroy(Committee $committee)
    {
        try {
            if ($committee->photo_path) {
                Storage::disk('public')->delete($committee->photo_path);
            }
            $committee->delete();
            return redirect()->route('admin.committees.index')->with('success', 'Comité supprimé avec succès.');
        } catch (\Exception $e) {
            Log::error('Erreur lors de la suppression du comité : ' . $e->getMessage());
            return back()->with('error', 'Une erreur est survenue lors de la suppression du comité.');
        }
    }
}