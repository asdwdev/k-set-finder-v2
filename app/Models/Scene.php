<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Scene extends Model
{
    protected $fillable = [
        'drama_id',
        'location_id',
        'episode_number',
        'scene_description',
        'screenshot_url',
        'contributor_id',
        'timestamp',
        'is_approved'
    ];

    public function drama()
    {
        return $this->belongsTo(Drama::class);
    }

    public function location()
    {
        return $this->belongsTo(Location::class);
    }

    public function contributor()
    {
        return $this->belongsTo(User::class, 'contributor_id');
    }
}
