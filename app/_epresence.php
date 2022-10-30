<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class _epresence extends Model
{
    protected $fillable = [
        'id_user', 'Type','is_approve','waktu',
    ];
}
