<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class td_members extends Model
{
    public $table = "td_members";

    protected $fillable = [
        'id','name','email','phone','address','plan_id','created_by','status','deleted','role_id'
    ];
}
