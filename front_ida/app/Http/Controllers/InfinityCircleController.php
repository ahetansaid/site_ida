<?php

namespace App\Http\Controllers;

use App\Models\InfinityCircle;
use Illuminate\Http\Request;

class InfinityCircleController extends Controller
{
    public function index()
    {
        $blocs = InfinityCircle::orderBy('ordre')->get();
        return view('ida_infinity_africa_circle', compact('blocs'));
    }
} 