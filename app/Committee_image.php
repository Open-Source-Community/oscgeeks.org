<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Committee_image extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'id', 'image', 'committee_id'
    ];
}
