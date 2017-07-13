<?php

namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Image extends Eloquent
{
    protected $fillable = [
        'imageurl', 'comm_name'
    ];
}
