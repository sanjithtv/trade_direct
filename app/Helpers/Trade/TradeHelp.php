<?php
namespace App\Helpers\Trade;


use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\td_members;
use App\Models\td_classified_category;
use App\Models\td_suppliers_category;
use App\Models\td_classified_category_attributes;
use App\Models\td_classified_posts_media;
class TradeHelp {
    public static function get_status($status=""){
		$status_arr = array('1' => "Active", "2" => "In-Active");
        if($status!=""){
            return $status_arr[$status];
        }
        return $status_arr;
    }
    public static function get_attribute_type($status=""){
		$status_arr = array('1' => "Input", "2" => "Select","3"=>"Radio");
        if($status!=""){
            return $status_arr[$status];
        }
        return $status_arr;
    }
    public static function get_member($id=""){
		$data = DB::table('td_members')

        ->where('id',$id)->first('name as member');

       

        return $data->member;
    }
    public static function get_parent($id=""){
		$data = DB::table('td_classified_category')

        ->where('id',$id)->first('name as parent');

       

        return $data->parent;
    }
    public static function get_supplier_category_parent($id=""){
		$data = DB::table('td_suppliers_category')

        ->where('id',$id)->first('name as parent');

       

        return $data->parent;
    }
    public static function get_featured($status=""){
		$status_arr = array('1' => "Yes", "2" => "No");
        if($status!=""){
            return $status_arr[$status];
        }
        return $status_arr;
    }

    public static function get_classified_listedfor($listfor=""){
        $list_arr = array('1' => "Rent", "2" => "Sale","3"=>"Lease");
        if($listfor!=""){
            return $list_arr[$listfor];
        }
        return $list_arr;
    }

    public static function get_classified_listedby($listfor=""){
        $list_arr = array('1' => "Builder", "2" => "Dealer","3"=>"Owner");
        if($listfor!=""){
            return $list_arr[$listfor];
        }
        return $list_arr;
    }
    public static function get_attribute($id=""){
		$data = DB::table('td_classified_category_attributes')

        ->where('id',$id)->first('name as attribute');

       

        return $data->attribute;
    }
    public static function post_category_tree($category){
        if($category){
            foreach ($category as $key => $value) {
                if($value->parent==0){
                    $cat_tree[$value->id][0] = $value->name;
                }
                if($value->parent>0){
                    $cat_tree[$value->parent][$value->id] = $value->name;
                }
            }
        }
        return $cat_tree;
    }

    public static function get_image($id=""){
		$data = DB::table('td_classified_posts_media')

        ->where([['post_id', '=', $id],['deleted', '=', '0']])->first('td_file_name as name');

       

        return $data->name;
    }


}