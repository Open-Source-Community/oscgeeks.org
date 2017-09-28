<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WorkShop extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'mobile',
        'year',
        'faculty',
        'workshop',
        'day',
        'time',
        'blenderTask',
    ];
}
