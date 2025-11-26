<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fipa extends Model
{
    use HasFactory;

    protected $table = 'fipas';

    protected $fillable = ['titre', 'image', 'description'];

    public function getImageUrlAttribute()
    {
        return $this->image ? Storage::disk('public')->url($this->image) : asset('assets/images/default.jpg');
    }
}