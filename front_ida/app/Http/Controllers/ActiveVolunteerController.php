<?php

namespace App\Http\Controllers;

use App\Models\ActiveVolunteer;
use Illuminate\Http\Request;

class ActiveVolunteerController extends Controller
{
    public function index()
    {
        $volunteers = ActiveVolunteer::all();
        return view('active_volunteers', compact('volunteers'));
    }
} 