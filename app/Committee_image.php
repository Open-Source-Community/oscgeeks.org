<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Committee_image extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'image', 'committee_id'
    ];
}
