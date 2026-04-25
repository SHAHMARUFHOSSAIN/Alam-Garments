<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Concern extends Model
{
    protected $fillable = [
        'name','slug','logo','short_description','about',
        'pdf','phone','email','address','location','links'
    ];

    protected $casts = [
        'links' => 'array',
    ];

    public function galleries()
{
    return $this->hasMany(\App\Models\ConcernGallery::class, 'concern_id');
}
}