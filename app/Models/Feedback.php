<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

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

    public function record_detail(): HasOne
    {
        return $this->hasOne(RecordDetail::class, 'id', 'record_detail_id');
    }
}
