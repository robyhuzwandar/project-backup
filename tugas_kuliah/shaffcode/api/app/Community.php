<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Community extends Model
{
    protected $fillable = [
        'id',
        'name',
        'type',
        'deskription',
        'location',
        'logo'
    ];
}
