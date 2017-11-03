<?php

namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Event extends Eloquent
{
    public $timestamps = false;
    protected $fillable = [
        'id', 'title', 'imageurl', 'description'
    ];
}
