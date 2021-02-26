<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class td_classified_post_chats extends Model
{
    public $table = "td_classified_post_chats";

    protected $fillable = [
        'id','post_id','initiated_by','initiated_date','deleted'
    ];
}
