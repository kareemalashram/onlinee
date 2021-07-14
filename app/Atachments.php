<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Atachments extends Authenticatable
{
    use Notifiable;


    protected $fillable = [

        'old_name', 'new_name','path','type','size','user_id',
    ];


}
