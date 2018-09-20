<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class offering extends Model
{
    //
    protected $fillable = [

        'offerno',
        'courseno',
        'offTerm',
        'offyear',
        'offlocation',
        'offtime',
        'facno',
        'offdays',
    ];
}
