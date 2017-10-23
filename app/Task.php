<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'name',
        'description',
        'user_id',
        'committee_id',
        'deadline',
    ];

    public function committee()
    {
        return $this->belongsTo(Committee::class, 'committee_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
