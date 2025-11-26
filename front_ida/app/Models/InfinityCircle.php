<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InfinityCircle extends Model
{
    use HasFactory;

    protected $table = 'infinity_circles';

    protected $fillable = [
        'titre',
        'sous_titre',
        'contenu',
        'image',
        'ordre',
        'type_bloc',
    ];
} 