<?php

namespace App\Http\Controllers\Admin;

use Carbon\Carbon;
use App\Models\Slider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class HomeController extends Controller
{
    public function add_slider()
    {
        $all_slider = Slider::all();
        $number = 1;
        return view('pages.home.add_slider', [
            'all_slider' => $all_slider,
            'number' => $number,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store_slider(Request $request)
    {
        $request->validate([
            'description' => 'required',
            'img_url' => 'required|image|mimes:jpeg,png,jpg,gif',
        ]);

        if ($request->hasFile('img_url')) {
            $img_url = "img" . Carbon::now()->format('d-m-Y_H-i-s');
            $extension = $request->file('img_url')->getClientOriginalExtension();
            $fileName = $img_url . "." . $extension;
            $request->file('img_url')->storeAs('slider', $fileName, 'public');
        }

        Slider::create([
            'description' => $request->description,
            'img_url' => 'slider/' . $fileName,
        ]);

        Alert::success('Image bien ajoutée', 'success');
        return redirect()->route('admin.add_slider');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $slider = Slider::findOrFail($id);
        return view('pages.home.show_slider', compact('slider'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $slider = Slider::findOrFail($id);
        return view('pages.home.edit_slider', compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'description' => 'required',
            'img_url' => 'nullable|image|mimes:jpeg,png,jpg,gif',
        ]);

        $slider = Slider::findOrFail($id);

        // Mise à jour de la description
        $slider->description = $request->description;

        // Gestion de l'image si une nouvelle est fournie
        if ($request->hasFile('img_url')) {
            // Supprimer l'ancienne image
            if ($slider->img_url) {
                Storage::disk('public')->delete($slider->img_url);
            }

            // Sauvegarder la nouvelle image
            $img_url = "img" . Carbon::now()->format('d-m-Y_H-i-s');
            $extension = $request->file('img_url')->getClientOriginalExtension();
            $fileName = $img_url . "." . $extension;
            $request->file('img_url')->storeAs('slider', $fileName, 'public');
            
            $slider->img_url = 'slider/' . $fileName;
        }

        $slider->save();

        Alert::success('Slider mis à jour avec succès', 'success');
        return redirect()->route('admin.add_slider');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $slider = Slider::findOrFail($id);

        if ($slider->img_url) {
            Storage::disk('public')->delete($slider->img_url);
        }
        $slider->delete();

        Alert::success('Slider supprimé avec succès', 'success');
        return redirect()->back();
    }
}
