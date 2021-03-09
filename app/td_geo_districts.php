<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class td_geo_districts extends Model
{
    public $table = "td_geo_districts";

    protected $fillable = [
        'id','state_id','name'
    ];
}
