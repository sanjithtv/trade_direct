<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class td_classified_category_attributes extends Model
{
    public $table = "td_classified_category_attributes";

    protected $fillable = [
        'id','category_id','code','name','type','content','display_order','status','deleted'
    ];
}
