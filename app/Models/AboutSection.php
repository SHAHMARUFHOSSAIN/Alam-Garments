<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutSection extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'established_year',
        'heading',
        'description',
        'image',
        'bullets',
        'video_link',
    ];

    protected $casts = [
        'bullets' => 'array', // JSON to array automatically
    ];
}