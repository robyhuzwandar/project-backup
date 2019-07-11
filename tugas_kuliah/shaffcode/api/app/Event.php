<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = [
        'title',
        'sub_title',
        'event_type',
        'date',
        'time',
        'address',
        'location',
        'organizer',
        'poster',
        'body'
    ];
}
