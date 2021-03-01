<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class td_classified_posts_media extends Model
{
    public $table = "td_classified_posts_media";

    protected $fillable = [
        'id','post_id','org_file_name','td_file_name','file_type','path','status','deleted','created_by'
    ];
}
