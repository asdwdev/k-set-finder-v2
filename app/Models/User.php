<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'username',
        'email',
        'password',
        'role',
        'profile_photo_url',
        'bio',
        'is_verified'
    ];

    protected $hidden = ['password'];

    public function dramas()
    {
        return $this->hasMany(Drama::class, 'created_by');
    }

    public function locations()
    {
        return $this->hasMany(Location::class, 'created_by');
    }

    public function contributions()
    {
        return $this->hasMany(Contribution::class);
    }

    public function edits()
    {
        return $this->hasMany(Edit::class, 'edited_by');
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function favorites()
    {
        return $this->belongsToMany(Location::class, 'favorites');
    }
}
