<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\td_suppliers_category;
use App\td_suppliers;

class WholesalersController extends Controller
{
    public function addWholesalers()
    {
        $category=td_suppliers_category::where('parent','0')->get();
        $suppliers=td_suppliers::where('deleted','0')->get();
        return view('pages.wholesalers',['category'=>$category,'suppliers'=>$suppliers]);
    }
    public function getSuppliers($id)
    {
        if($id==0)
        {
            $category=td_suppliers::where('deleted','0')->get();
        
            return json_encode($category);
        }
        else{
        $category=td_suppliers::where('category_id',$id)->get();
        
        return json_encode($category);
        }
    }
}
