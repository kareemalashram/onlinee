<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Students extends Authenticatable
{



    protected $fillable = [

        'name', 'email','phone','address','birthday','course_id',

    ];



//    function teacherJob()
//    {
//        return $this->hasOne(Job::class,'id','job');
//    }

}
