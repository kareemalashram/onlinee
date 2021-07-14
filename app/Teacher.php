<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Teacher extends Authenticatable
{



    protected $fillable = [

        'name', 'email','phone','job', 'address','auther',
    ];



    function teacherJob()
    {
        return $this->hasOne(Job::class,'id','job');
    }

}
