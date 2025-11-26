<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActiveVolunteer extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'poste',
        'image',
        'linkedin',
    ];
} 