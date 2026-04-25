<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ConcernGallery extends Model
{
    protected $fillable = [
        'concern_id',
        'image',
    ];

    public function concern()
    {
        return $this->belongsTo(Concern::class, 'concern_id');
    }
}