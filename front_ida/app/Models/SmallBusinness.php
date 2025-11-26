<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SmallBusinness extends Model
{
    use HasFactory;

    protected $table = 'small_businnesses';

    protected $fillable = [
        'title',
        'description',
        'img_url',
    ];
} 