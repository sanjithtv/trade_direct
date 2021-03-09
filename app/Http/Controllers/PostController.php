<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\Trade\TradeHelp;
use App\td_classified_posts;
use App\td_classified_category;
use App\td_classified_category_attributes;
use App\td_classified_post_attributes;
use App\td_geo_states;
use App\td_geo_districts;
use App\td_geo_city;
use App\td_classified_posts_media;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\URL;
use Image;

class PostController extends Controller
{
    public function addPosts(Request $request)
    {
       // $category_temp  = td_classified_category::where('deleted', 0)->get();
        //$category = TradeHelp::post_category_tree($category_temp);
       
        $post=td_classified_posts::where('featured','1')->get();
        $category=td_classified_category::where('parent','0')->get();
        return view('pages.posts',['category'=>$category,'post'=>$post]);
      
      
        
    }
    public function getsubcategory($id)
    {
        $category=td_classified_category::where('parent',$id)->get();
        
        return json_encode($category);
    }
    public function addPost($id)
    {
            //echo $id;
            $post_category = $id;
            $category = td_classified_category::where('deleted', 0)->get();
            $category_attributes= td_classified_category_attributes::where([['category_id', '=', $id],['deleted', '=', '0']])->get();
            $state=td_geo_states::where('status', 1)->get();
            return view('pages.addpost',['category'=>$category,'category_attributes'=>$category_attributes,'post_category'=>$post_category,'state'=>$state]);
    }



    public function store(Request $request)
    {
       
        $request->validate([
            'post_title' => 'required',
            'post_description' => 'required',
            'post_category' => 'required'
            
        ]);
  
         $state=$request->get('post_state');
         $district=$request->get('post_district');
         $city=$request->get('post_city');
         $landmark=$request->get('landmark');
         $activate_date= date("Y-m-d");
         $expiry_date = date('Y-m-d', strtotime($activate_date. ' +30 days'));
       

  		$user=$request->session()->get('member_id');

        $posts = new td_classified_posts([
            'post_title' => $request->get('post_title'),
            'post_description'=> $request->get('post_description'),
            'post_category'=> $request->get('post_category'),
            'post_price'=> $request->get('price'),
            'post_status'=> '1',
            'post_state'=> $state,
            'post_district'=> $district,
            'post_city'=> $city,
            'post_landmark'=> $landmark,
            'activate_date'=>$activate_date,
            'expiry_date'=>$expiry_date,
            'post_listedby'=>$user,
	        'created_by'=>$user,
            'featured' => '0',
	        'post_deleted' => '0',
	        
      	]);
          $posts->save();
           
          $id=$posts->id;
          
          $title=strtolower($request->get('post_title'));
          $post_title=preg_replace('/[[:space:]]+/', '-', $title);
          $slug_name=$post_title.'-pid-'.$id;
          $slug=td_classified_posts::find($id);
            $slug->slug=$slug_name;
            $slug->update();

            foreach($request->file('file') as $image)
            {
                //$destination=public_path().'/images/';
                $destination ='C:/xampp/htdocs/tradedirect/public/images'; 
                $imageName=$image->getClientOriginalName();
                //$new_path=public_path().'/thumbnail/';
                $new_path= 'C:/xampp/htdocs/tradedirect/public/thumbnail';
                $filename = 'td_'.$id.'_'. time().'_'.Str::random(4) . '.' . $image->getClientOriginalExtension();
                $imageUrl = $destination.$filename;
                $newimageUrl=$new_path.$filename;
                Image::make($image)->resize(480, 320)->save($imageUrl);
                //$post_id=$request->get('postid');
                $post=td_classified_posts_media::where([['post_id', '=', $id],['deleted', '=', '0']])->get();
                $postCount = $post->count();
                if($postCount==0)
                {
                //copy($imageUrl, $newimageUrl);
                    Image::make($image)->resize(480, 320)->save($newimageUrl);
                }
                $media=new td_classified_posts_media([
                    'post_id'=>$id,
                    'org_file_name'=>$imageName,
                    'td_file_name' => $filename,
                    'file_type' => $image->getClientOriginalExtension(),
                    'status'=> '1',
                    'deleted' => '0',
                    'created_by'=>$user,
                    ]);
                    $media->save();
                
                
            }
    
         

          $post_category = $request->post('post_category');
          $category_attributes =  td_classified_category_attributes::where([['category_id', '=', $post_category],['deleted', '=', '0'],['status', '=', '1']])->get();
          if($category_attributes){
            foreach ($category_attributes as $key => $attribute) {
                $post_cat_attributes = td_classified_post_attributes::where([['category_attribute_id', '=', $attribute->id],['post_id','=',$posts->id]])->first();

                if($post_cat_attributes){
                    $post_attribute = td_classified_post_attributes::find($post_cat_attributes->id);
                    $attribute_code = $attribute->code."-".$attribute->id;
                    $post_attribute_value = $request->post($attribute_code);
                    if($post_attribute_value){
                        $post_attribute->attribute_value = $post_attribute_value;
                        $post_attribute->update();
                    }    
                }else{
                    $user=$request->session()->get('member_id');
                    $attribute_code = $attribute->code."-".$attribute->id;
                    $post_attribute = new td_classified_post_attributes([
                        'post_id' => $id,
                        'category_attribute_id'=> $attribute->id,
                        'category_attribute_code'=> $attribute->code,
                        'attribute_name'=> $attribute->name,
                        'attribute_value'=> $request->post($attribute_code),
                        'created_by'=>$user,
                        'deleted' => '0'
                    ]);
                    $post_attribute->save();
                }
                
            }
        }

        return redirect()->route('addpost',$post_category)
                        ->with('success','Post  created successfully.');
    }


    public function getDistrict($id) {
        $districts = td_geo_districts::where('state_id',$id)->pluck('name','id');

        return json_encode($districts);

    }
    public function getCity($id) {
        $city = td_geo_city::where('district_id',$id)->pluck('name','id');

        return json_encode($city);

    }
}
