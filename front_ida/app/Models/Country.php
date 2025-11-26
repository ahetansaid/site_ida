<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;
    public function index()
    {
        $countries = Country::all(); // récupère tous les pays depuis la base

        // autres données éventuellement
        return view('welcome', compact('countries'));
    }
}
