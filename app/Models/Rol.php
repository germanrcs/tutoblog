<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    protected $fillable = [
        'name',
        'slug',
    ];
    protected $table = 'roles';
    use HasFactory;
}