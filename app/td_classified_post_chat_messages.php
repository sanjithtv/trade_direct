<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class td_classified_post_chat_messages extends Model
{
    public $table = "td_classified_post_chat_messages";

    protected $fillable = [
        'id','post_id','chat_id','sender_id','msg_type','msg_content','status','additional','created_date'
    ];
}
