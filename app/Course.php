<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Course extends Authenticatable
{
    use Notifiable;

    protected $fillable = [

        'name', 'description', 'price', 'teacher', 'auther', 'image', 'status',
    ];

    function teacher()
    {
        return $this->belongsTo(Teacher::class);
    }
}
