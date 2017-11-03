<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recruitment extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'id', 'first_name', 'last_name', 'email', 'contact_no', 'year', 'homepage_select_first', 'homepage_select_second', 'day', 'time', 'ip'
    ];
}
