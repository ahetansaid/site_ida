<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectOpportunitie extends Model
{
    use HasFactory;

    protected $table = 'project_opportunities';

    protected $fillable = [
        'title',
        'description',
        'img_url',
    ];
} 