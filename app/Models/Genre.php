<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    protected $fillable = ['name'];

    public function dramas()
    {
        return $this->belongsToMany(Drama::class, 'drama_genre');
    }
}
