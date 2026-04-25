<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    // ✅ Fillable fields
    protected $fillable = [
        'name',
        'email',
        'subject',
        'message',
        'file', // যদি file upload add করো
    ];
}