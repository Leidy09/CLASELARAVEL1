<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    //
    protected $fillable=[
        'stdno',
        'stdfirtsname',
        'stdlastname',
        'stdcity',
        'stdstate',
        'stdzip',
        'stdmajor',
        'stdclass',
        'stdgpa',
    ];
}
