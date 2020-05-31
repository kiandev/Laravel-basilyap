<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Weblog extends Model
{
    protected $fillable = [
        'id',
        'title',
        'text',
        'date',
        'image'
    ];
}
