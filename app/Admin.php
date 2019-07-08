<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Lekan;


class Admin extends Lekan
{
    protected $guard = 'admin';
    protected $fillable = [
    	'name','email','password',
    ];

    protected $hidden = ['password'];
}
