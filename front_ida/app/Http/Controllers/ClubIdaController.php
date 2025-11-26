<?php

namespace App\Http\Controllers;

use App\Models\ClubIda;
use Illuminate\Http\Request;

class ClubIdaController extends Controller
{
    public function index()
    {
        $clubs = ClubIda::all();
        return view('clubs_ida', compact('clubs'));
    }
} 