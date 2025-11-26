<?php

namespace App\Http\Controllers;

use App\Models\MauritaniaFreeZone;
use Illuminate\Http\Request;

class MauritaniaFreeZoneController extends Controller
{
    public function index()
    {
        $mauritaniaFreeZones = MauritaniaFreeZone::all();
        return view('mauritania_free_zone', compact('mauritaniaFreeZones'));
    }
} 