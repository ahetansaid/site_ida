<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\MemberBenefit;
use Illuminate\Http\Request;

class MemberBenefitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $benefits = MemberBenefit::orderBy('order')->get();
        return view('admin.member_benefit.index', compact('benefits'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.member_benefit.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            'order' => 'nullable|integer',
        ]);
        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('member_benefits', 'public');
        }
        MemberBenefit::create($data);
        return redirect()->route('admin.member_benefit.index')->with('success', 'Avantage ajouté avec succès.');
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
    public function edit($id)
    {
        $benefit = MemberBenefit::findOrFail($id);
        return view('admin.member_benefit.edit', compact('benefit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $benefit = MemberBenefit::findOrFail($id);
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            'order' => 'nullable|integer',
        ]);
        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('member_benefits', 'public');
        }
        $benefit->update($data);
        return redirect()->route('admin.member_benefit.index')->with('success', 'Avantage modifié avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $benefit = MemberBenefit::findOrFail($id);
        $benefit->delete();
        return redirect()->route('admin.member_benefit.index')->with('success', 'Avantage supprimé avec succès.');
    }
}
