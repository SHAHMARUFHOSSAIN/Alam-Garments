<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MissionPoint extends Model
{
    protected $fillable = [
        'mission_id',
        'title',
        'description',
        'order',
    ];

    public function mission()
    {
        return $this->belongsTo(Mission::class);
    }
}