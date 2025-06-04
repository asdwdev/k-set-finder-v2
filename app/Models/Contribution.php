<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contribution extends Model
{
    protected $fillable = [
        'user_id',
        'type',
        'target_table',
        'target_id',
        'status',
        'moderator_id',
        'timestamp'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function moderator()
    {
        return $this->belongsTo(User::class, 'moderator_id');
    }
}
