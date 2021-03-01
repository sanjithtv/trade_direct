<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class td_classified_post_attributes extends Model
{
    public $table = "td_classified_post_attributes";

    protected $fillable = [
        'id','post_id','category_attribute_id','category_attribute_code','attribute_name','attribute_value','status','deleted','created_by'
    ];
}
