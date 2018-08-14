<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recruit extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'id',
        'name',
        'email',
        'mobile',
        'year',
        'first_committee',
        'second_committee',
        'day',
        'time',
    ];
}
