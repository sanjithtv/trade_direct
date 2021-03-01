<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class td_post_member_wishlist extends Model
{
    public $table = "td_post_member_wishlist";

    protected $fillable = [
        'id','post_id','member_id','deleted',
    ];
}
