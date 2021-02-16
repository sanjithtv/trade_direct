<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class td_users extends Model
{
    public $table = "td_users";

    protected $fillable = [
        'name', 'password','user_type','member_id','email','phone','status','created_by','deleted','plan_id'
    ];
}
