<?php

namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Committee extends Eloquent
{
    public $timestamps = false;
    protected $fillable = [
        'name'
    ];
}
