<?php

namespace App;


use Illuminate\Foundation\Auth\User as Authenticatable;

class AdminUser extends Authenticatable
{


    protected $hidden =[
        'password'
    ];
}
