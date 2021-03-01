<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Members extends Authenticatable
{
    protected $table = 'td_users';

    protected $fillable = [
        'name', 'password','user_type','member_id','email','phone','status','created_by','deleted','plan_id'
    ];
}