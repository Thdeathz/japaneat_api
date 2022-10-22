<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'record_detail_id',
        'comment',
        'bonus_point',
    ];

    protected $hidden = [
        'id',
        'record_detail_id',
        'created_at',
        'updated_at'
    ];
}
