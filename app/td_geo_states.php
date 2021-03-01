<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class td_geo_states extends Model
{
    public $table = "td_geo_states";

    protected $fillable = [
        'id','name','status'
    ];
}
