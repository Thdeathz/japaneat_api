<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Achievement extends Model
{
    use HasFactory;

    protected $fillable = [
        'url',
        'image',
        'name',
        'require_point',
        'type',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];
}
