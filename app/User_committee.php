<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User_committee extends Model
{
    public $timestamps = false;

    public function committee()
    {
        return $this->belongsTo(Committee::class, 'committee_id');
    }
}
