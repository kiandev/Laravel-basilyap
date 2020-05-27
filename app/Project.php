<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'id',
        'measure',
        'unit',
        'floor',
        'born',
        'facility',
        'distance',
        'project_id'
    ];
}
