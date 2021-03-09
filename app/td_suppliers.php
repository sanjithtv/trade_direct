<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class td_suppliers extends Model
{
    public $table = "td_suppliers";

    protected $fillable = [
        'id','name','email','category_id','sub_category_id','phone','address','featured','geo_location','created_by','status','deleted'
    ];
}
