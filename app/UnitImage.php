<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UnitImage extends Model
{
    protected $fillable = [
        'id',
        'unit_id',
        'link',
    ];
}
