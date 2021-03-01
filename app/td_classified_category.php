<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class td_classified_category extends Model
{
    public $table = "td_classified_category";

    protected $fillable = [
        'id','name','parent','display_order','status','deleted'
    ];

    public function parent()
    {
        return $this->belongsTo('App\td_classified_category', 'parent');
    }
 
    public function children()
    {
        return $this->hasMany('App\td_classified_category', 'parent');
    }
}
