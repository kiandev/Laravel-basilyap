<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comunication extends Model
{
    protected $fillable = [
        'id',
        'text',
        'call',
        'instagram',
        'telegram',
        'facebook',
        'gmail',
        'linkedin',
        'youtube'
    ];
}
