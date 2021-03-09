<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class td_classified_posts extends Model
{
    public $table = "td_classified_posts";

    protected $fillable = [
        'id','post_category','post_title','post_description','post_listedfor','post_listedby','post_price','featured','post_state','post_district','post_city','post_landmark','activate_date','expiry_date','sleep_date','post_status','post_status_date','post_deleted','created_by'
    ];
}
