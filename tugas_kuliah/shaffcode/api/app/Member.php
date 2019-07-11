<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $fillable = [
        'name',
        'address',
        'birtday',
        'phone',
        'email',
        'about',
        'photo'

    ];
}
