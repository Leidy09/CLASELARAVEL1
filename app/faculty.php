<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class faculty extends Model
{
    //
        protected $fillable =[
            'Facno',
            'facfirstname',
            'faclastname',
            'faccity',
            'facstate',
            'faczipcode',
            'facrank',
            'fachiredate',
            'facsalary',
            'facsupervisor',
            'facdept',
        ];
    

}
