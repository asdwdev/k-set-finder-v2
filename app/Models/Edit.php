<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Edit extends Model
{
    protected $fillable = [
        'edited_by',
        'target_table',
        'target_id',
        'field_changed',
        'old_value',
        'new_value',
        'edited_at',
        'approved_by'
    ];

    public function editor()
    {
        return $this->belongsTo(User::class, 'edited_by');
    }

    public function approver()
    {
        return $this->belongsTo(User::class, 'approved_by');
    }
}
