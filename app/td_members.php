<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class td_members extends Model
{
    public $table = "td_members";

    protected $fillable = [
        'id','name','email','phone','address','status','deleted','role_id'
    ];
}
