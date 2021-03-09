<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class td_suppliers_category extends Model
{
    public $table = "td_suppliers_category";

    protected $fillable = [
        'id','name','parent','display_order','created_by','status','deleted'
    ];
}
