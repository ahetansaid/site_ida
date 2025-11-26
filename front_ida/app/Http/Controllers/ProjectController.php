<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
   public function index(Request $request)
    {
        $query = Project::query();

        // Filtrage par année
        if ($request->filled('year')) {
            $query->where('year', $request->year);
        }

        // Filtrage par domaine
        if ($request->filled('domain')) {
            $query->where('domain', $request->domain);
        }

        // Filtrage par pays
        if ($request->filled('country')) {
            $query->where('country', $request->country);
        }

        // Filtrage par statut
        if ($request->filled('status')) {
            $query->where('status', $request->status);
        }

        // Pagination (10 projets par page)
        $projects = $query->paginate(10);

        // Options pour les filtres (ex. : listes déroulantes)
        $years = Project::distinct()->pluck('year')->filter()->sort();
        $domains = Project::distinct()->pluck('domain')->filter()->sort();
        $countries = Project::distinct()->pluck('country')->filter()->sort();
        $statuses = Project::distinct()->pluck('status')->filter()->sort();

        return view('projects.index', compact('projects', 'years', 'domains', 'countries', 'statuses'));
    }

    public function show(Project $project)
    {
        return view('projects.show', compact('project'));
    }
}