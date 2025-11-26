<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'year',
        'domain',
        'country',
        'status',
        'objectives',
        'results',
        'budget',
        'funding',
        'partners',
    ];

    public function media()
    {
        return $this->hasMany(ProjectMedia::class);
    }

    public function documents()
    {
        return $this->hasMany(ProjectDocument::class);
    }
}