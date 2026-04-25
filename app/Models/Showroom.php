<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Showroom extends Model
{
    protected $fillable = [
        'name',
        'title',
        'description',
        'location',
        'contact',
        'video_url',
        'images',
    ];

    protected $casts = [
        'images' => 'array',
    ];
}