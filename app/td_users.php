<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class td_users extends Model
{
    public $table = "td_users";

<<<<<<< HEAD
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'password', 'user_type','member_id','email','phone', 'status','deleted'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password'
=======
    protected $fillable = [
        'name', 'password','user_type','member_id','email','phone','status','created_by','deleted','plan_id'
>>>>>>> register
    ];
}
