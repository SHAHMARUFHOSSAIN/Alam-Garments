<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
   protected $fillable = [
    'name',
    'designation',
    'x_url',
    'fb_url',
    'in_url',
    'image',
    'status',
];
}
