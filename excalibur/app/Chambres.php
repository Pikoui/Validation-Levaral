<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chambres extends Model
{
    protected $fillable = [
        'type',
        'number',
        'taken',
        'booking',     
    ];
}
