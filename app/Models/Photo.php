<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $fillable = ['location_id', 'uploaded_by', 'photo_url', 'caption', 'is_approved'];

    public function location()
    {
        return $this->belongsTo(Location::class);
    }

    public function uploader()
    {
        return $this->belongsTo(User::class, 'uploaded_by');
    }
}
