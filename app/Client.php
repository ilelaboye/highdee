<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Client extends Authenticatable
{
    protected $flllable= ['name', 'email','password', 'age','status','description'];
    protected $hidden = ['password']; 
}
