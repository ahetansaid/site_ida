<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Country;

class WelcomeController extends Controller
{
    public function index()
    {
        $countries = Country::all(); // récupère tous les pays
        return view('welcome', compact('countries')); // passe à la vue welcome
    }
}
