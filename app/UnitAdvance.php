<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UnitAdvance extends Model
{
    protected $fillable = [
        'id',
        'unit_id',
        'measure',
        'room',
        'floor',
        'status'
    ];
}
