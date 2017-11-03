<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class WorkShop extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'id',
        'first_name',
        'last_name',
        'email',
        'contact_no',
        'faculty',
        'year',
        'homepage_select_workshop',
        'day',
        'time',
        'blenderTask',
    ];
}