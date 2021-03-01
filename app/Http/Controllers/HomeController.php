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
use App\td_post_member_wishlist;

use DB;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category=td_classified_category::where('parent','0')->get();
        $post=td_classified_posts::where('featured','1')->get();
        return view('pages.home',['category'=>$category,'post'=>$post]);
    }

    public function addWholesalers()
    {
        return view('pages.wholesalers');
    }
    public function addPosts()
    {
        $category_temp  = td_classified_category::where('deleted', 0)->get();
        $category = TradeHelp::post_category_tree($category_temp);
        return view('pages.posts',['category'=>$category]);
        
    }

    public function getProductDetails($id1)
    {
        $str=$id1;
        $id=substr($str, strrpos($str, '-') + 1);
        $media=td_classified_posts_media::where([['post_id', '=', $id],['deleted', '=', '0']])->get();
        $post=td_classified_posts::where('id',$id)->first();
        $category=td_classified_category::where('id', $post->post_category)->first();
        $seller=td_members::where('id', $post->post_listedby)->get();
        $parent=$category->parent;
        $featured=td_classified_posts::where([['featured', '=', '1'],['post_category', '=', $post->post_category],['id', '!=', $id]])->get();
        $attribute =DB::table('td_classified_category_attributes')
            ->join('td_classified_post_attributes','td_classified_category_attributes.id', '=', 'td_classified_post_attributes.category_attribute_id')
            ->where([['category_id', '=', $post->post_category],['td_classified_category_attributes.deleted', '=', '0'],['status', '=', '1']])
             ->where('td_classified_post_attributes.post_id','=', $id)
            ->get();
        return view('pages.product_details',['media'=>$media,'post'=>$post,'parent'=>$parent,'attribute'=>$attribute,'featured'=>$featured,'seller'=>$seller]);
    }


    



    public function wishlist(Request $request)
    {
       $member_id=$request->post('member_id');
        $post_id=$request->post('post_id');
        
        $wishlist = new td_post_member_wishlist([
	        'member_id' => $member_id,
	        'post_id' => $post_id,
	        'deleted' => '0',
	        
      	]);
        $wishlist->save();
        $data=$wishlist->id();
        echo $data;
       // return json_encode($data);

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     * 
     */

    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
