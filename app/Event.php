<?php

namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Event extends Eloquent
{
    protected $fillable = [
        'title', 'imageurl', 'description'
    ];
}
