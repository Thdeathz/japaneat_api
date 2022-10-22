<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class RecordDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'record_id',
        'video_detail_id',
        'offer_id',
        'answer_id',
    ];

    public function record(): HasOne
    {
        return $this->hasOne(Videos::class, 'id', 'record_id');
    }

    public function video_detail(): HasOne
    {
        return $this->hasOne(VideoDetail::class, 'id', 'video_detail_id');
    }

    public function offer(): HasOne
    {
        return $this->hasOne(User::class, 'id', 'offer_id');
    }

    public function answer(): HasOne
    {
        return $this->hasOne(User::class, 'id', 'answer_id');
    }

    public function feedback(): BelongsTo
    {
        return $this->belongsTo(Feedback::class, 'id', 'record_detail_id');
    }
}
