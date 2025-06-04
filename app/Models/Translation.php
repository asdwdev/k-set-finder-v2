<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Translation extends Model
{
    protected $fillable = [
        'table_name',
        'record_id',
        'language_code',
        'field_name',
        'translated_text'
    ];
}
