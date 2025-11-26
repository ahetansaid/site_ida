<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class AfwaProject extends Model
{
    use HasFactory;

    protected $fillable = [
        'titre',
        'description',
        'image',
        'domaines',
        'carousel',
    ];

    protected $casts = [
        'domaines' => 'array',
        'carousel' => 'array',
    ];
}
