<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Workshop extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'id',
        'name',
        'email',
        'mobile',
        'year',
        'faculty',
        'select_workshop',
        'day',
        'time',
    ];
}
