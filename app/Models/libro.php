<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class libro extends Model
{
    use HasFactory;

    protected $fillable = [
        'titulo',
        'editorial',
        'isbn',
        'precio'
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];
}
