<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mission extends Model
{
    protected $fillable = [
        'title',
        'description',
        'image',
        'is_active',
    ];

    // 🔗 Relation
    public function points()
    {
        return $this->hasMany(MissionPoint::class)->orderBy('order');
    }
}