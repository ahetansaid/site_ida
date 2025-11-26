<?php

namespace App\Http\Controllers;

use App\Models\ProjectOpportunitie;
use Illuminate\Http\Request;

class ProjectOpportunitieController extends Controller
{
    public function index()
    {
        $projectOpportunities = ProjectOpportunitie::all();
        return view('project_opportunitie', compact('projectOpportunities'));
    }
} 