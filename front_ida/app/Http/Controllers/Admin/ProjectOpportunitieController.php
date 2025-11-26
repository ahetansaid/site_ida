<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ProjectOpportunitie;
use Illuminate\Http\Request;

class ProjectOpportunitieController extends Controller
{
    public function index()
    {
        $projectOpportunities = ProjectOpportunitie::all();
        return view('admin.project_opportunitie.index', compact('projectOpportunities'));
    }

    public function create()
    {
        return view('admin.project_opportunitie.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'nullable|string',
            'description' => 'nullable|string',
            'img_url' => 'nullable|image',
        ]);

        if ($request->hasFile('img_url')) {
            $data['img_url'] = $request->file('img_url')->store('project_opportunitie', 'public');
        }

        ProjectOpportunitie::create($data);
        return redirect()->route('admin.project_opportunitie.index')->with('success', 'Opportunité de projet ajoutée avec succès.');
    }

    public function edit(ProjectOpportunitie $projectOpportunitie)
    {
        return view('admin.project_opportunitie.edit', compact('projectOpportunitie'));
    }

    public function update(Request $request, ProjectOpportunitie $projectOpportunitie)
    {
        $data = $request->validate([
            'title' => 'nullable|string',
            'description' => 'nullable|string',
            'img_url' => 'nullable|image',
        ]);

        if ($request->hasFile('img_url')) {
            $data['img_url'] = $request->file('img_url')->store('project_opportunitie', 'public');
        }

        $projectOpportunitie->update($data);
        return redirect()->route('admin.project_opportunitie.index')->with('success', 'Opportunité de projet modifiée avec succès.');
    }

    public function destroy(ProjectOpportunitie $projectOpportunitie)
    {
        $projectOpportunitie->delete();
        return redirect()->route('admin.project_opportunitie.index')->with('success', 'Opportunité de projet supprimée avec succès.');
    }
} 