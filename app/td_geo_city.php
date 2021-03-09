<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class td_geo_city extends Model
{
    public $table = "td_geo_city";

    protected $fillable = [
        'id','state_id','district_id','name'
    ];
}
