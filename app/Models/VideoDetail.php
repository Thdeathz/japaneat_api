<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VideoDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'video_id',
        'level',
        'teacher_id',
        'category_id',
        'title',
        'description'
    ];

    public function video(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(Videos::class, 'id', 'video_id');
    }

    public function teacher(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(User::class, 'id', 'teacher_id');
    }

    public function category(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(Category::class, 'id', 'category_id');
    }
}
