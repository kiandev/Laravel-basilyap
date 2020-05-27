<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UnitBase extends Model
{
    protected $fillable = [
        'id',
        'unit_id',
        'name',
        'price',
        'image',
        'type',
        'region',
        'project_id',
        'special'
    ];
}
