<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MauritaniaFreeZone extends Model
{
    use HasFactory;

    protected $table = 'mauritania_free_zones';

    protected $fillable = [
        'title',
        'description',
        'img_url',
    ];
} 