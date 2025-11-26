<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AfwaProject;

class AfwaController extends Controller
{
    public function index()
    {
        $afwas = AfwaProject::all();
        return view('afwa', compact('afwas'));
    }
}
