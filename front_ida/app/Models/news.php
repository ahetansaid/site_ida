<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use function Laravel\Prompts\table;

class news extends Model
{
    use HasFactory;

    
    protected $table = "news";
    protected $guarded = [];
}
