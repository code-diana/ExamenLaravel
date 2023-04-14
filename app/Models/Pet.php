<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    use HasFactory;
    protected $fillable = [
        'nick',
        'password',
        'name',
        'color',
        'raza',
        'sex',
        'age',
        'owner',
        'telf',
        'image'
    ];
}
