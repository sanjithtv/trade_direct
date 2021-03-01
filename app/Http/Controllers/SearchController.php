<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\Trade\TradeHelp;
use App\td_classified_category;
use App\td_classified_posts;
use App\td_classified_posts_media;
use App\td_classified_post_attributes;
use App\td_classified_category_attributes;
use App\td_members;
use App\td_geo_states;
use App\td_geo_districts;
use DB;


class SearchController extends Controller
{
    public function getSearchList(Request $request)
    {

    	$id=6;
        $date=date("Y-m-d");
		$filters = array('brands','kmsdriven','year');
        
        $category_posts = td_classified_posts::orderBy('featured', 'DESC')
        ->where([['post_category', '=', $id],['post_deleted', '=', '0'],['expiry_date', '>=', $date]])
        ->get();
        
        $attributes = td_classified_category_attributes::where([['category_id','=',$id],['deleted','=', '0']])->get();
        foreach ($attributes as $key => $value) {
        	$filter = TradeHelp::post_category_filters($value->name);
        	if($filter){
        		$attribute_filters[$filter]['name']=$value->name;
        		$attribute_filters[$filter]['content']=$value->content;
        		$attribute_filters_map[]=$filter;
        	}
        }
       	$location_districts = td_geo_districts::where('state_id','18')->get();
        $category = td_classified_category::where('id',$id)->first();
        $category_temp  = td_classified_category::where('deleted', 0)->get();
        $category_tree = TradeHelp::post_category_tree($category_temp);
        $category_reverse_map = TradeHelp::post_category_reverse_map($category_temp,$category->id);
       // print_r($attribute_filters);
        //return view('pages.categorylist',['category'=>$category,'attribute'=>$attribute]);
        return view('pages.category',['category_posts'=>$category_posts,'category'=>$category,'category_reverse_map'=>$category_reverse_map,'attribute_filters_map'=>$attribute_filters_map,'attribute_filters'=>$attribute_filters,'cat_id'=>$id,'location_districts'=>$location_districts]);
        
    }
}
