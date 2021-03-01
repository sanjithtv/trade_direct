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


class CategoryController extends Controller
{
    //

    public function getCategorylist(Request $request,$str)
    {

        $id=substr($str, strrpos($str, '-') + 1);
        $date=date("Y-m-d");

       if ($request->ajax() && isset($request->brand)) {
            $brand = $request->brand;
            //$location = $request->location;
           
            $category = DB::table('td_classified_posts')
                ->join('td_classified_post_attributes','td_classified_posts.id', '=', 'td_classified_post_attributes.post_id')
               ->join('td_classified_posts_media','td_classified_posts.id', '=', 'td_classified_posts_media.post_id')
                ->orderBy('featured', 'DESC') 
                ->whereIN('attribute_value', explode( ',', $brand ))
                ->where('td_classified_posts.expiry_date','>=', $date)
                ->select( 'td_classified_posts.*',
                DB::raw('(select td_file_name from td_classified_posts_media where post_id  =   td_classified_posts.id  and deleted = 0 order by post_id asc limit 1) as photo')  )
                ->distinct()
                ->get();
            return json_encode($category);
            
        }
        else{
        	$filters = array('brands','kmsdriven','year');
        if($request){
        	$cat_filter = $request->get('brands');
        	if($cat_filter){
        		
        				$category_posts_brands = DB::table('td_classified_posts')
                ->join('td_classified_post_attributes','td_classified_posts.id', '=', 'td_classified_post_attributes.post_id')
                ->where('attribute_name','=', 'Brands')
                ->whereIN('attribute_value', explode( ',', $cat_filter ))
                ->where('td_classified_posts.expiry_date','>=', $date)
                ->select( 'td_classified_posts.id')
                ->distinct()
                ->get();
        			if($category_posts_brands){
        				foreach ($category_posts_brands as $key => $value) {
        					$category_bands_arr[] = $value->id;
        				}
        			}

        	}
        	$cat_filter = $request->get('year');
        	if($cat_filter){
        		if($cat_filter)
        				$category_posts_years = DB::table('td_classified_posts')
                ->join('td_classified_post_attributes','td_classified_posts.id', '=', 'td_classified_post_attributes.post_id')
                ->where('attribute_name','=', 'Year')
                ->where('attribute_value', '>=','2019')
                ->where('td_classified_posts.expiry_date','>=', $date)
                ->select( 'td_classified_posts.id')
                ->distinct()
                ->get();
                if($category_posts_years){
        				foreach ($category_posts_years as $key => $value) {
        					$category_years_arr[] = $value->id;
        				}
        			}
        	}
        	


        if($cat_filter){
        	$category_filter_arr = array_intersect($category_bands_arr, $category_years_arr);
        	$category_filter_str = implode(',', $category_filter_arr);
			$category_posts = td_classified_posts::orderBy('featured', 'DESC')
	    ->where([['post_category', '=', $id],['post_deleted', '=', '0'],['expiry_date', '>=', $date]])
        ->whereIN('id',explode(',',$category_filter_str))
        ->get();        	
        }else{
        	$category_posts = td_classified_posts::orderBy('featured', 'DESC')
        ->where([['post_category', '=', $id],['post_deleted', '=', '0'],['expiry_date', '>=', $date]])
        ->get();	
        }
        }
       
        


        
        	
            
       	
        
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
}
