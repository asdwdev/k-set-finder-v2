<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Drama extends Model
{
    protected $fillable = [
        'title',
        'original_title',
        'release_year',
        'synopsis',
        'poster_url',
        'network',
        'status',
        'created_by'
    ];

    public function genres()
    {
        return $this->belongsToMany(Genre::class, 'drama_genre');
    }

    public function scenes()
    {
        return $this->hasMany(Scene::class);
    }

    public function creator()
    {
        return $this->belongsTo(User::class, 'created_by');
    }
}
