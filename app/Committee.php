<?php

namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Committee extends Eloquent
{
    protected $fillable = [
        'title', 'imageurl', 'description', 'admin_id'
    ];
}

