<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $fillable = [
        'name',
        'type',
        'address',
        'latitude',
        'longitude',
        'description',
        'cover_image_url',
        'created_by',
        'is_verified',
        'is_active'
    ];

    public function creator()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function scenes()
    {
        return $this->hasMany(Scene::class);
    }

    public function photos()
    {
        return $this->hasMany(Photo::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function favoritedBy()
    {
        return $this->belongsToMany(User::class, 'favorites');
    }
}
