<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClubIda extends Model
{
    use HasFactory;

    protected $table = 'clubs_ida';

    protected $fillable = [
        'nom',
        'region',
        'image',
        'description',
        'coordonateur',
    ];
} 