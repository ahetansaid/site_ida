<?php

namespace App\Http\Controllers;

use App\Models\SmallBusinness;
use Illuminate\Http\Request;

class SmallBusinnessController extends Controller
{
    public function index()
    {
        $smallBusinesses = SmallBusinness::all();
        return view('small_businness', compact('smallBusinesses'));
    }
} 