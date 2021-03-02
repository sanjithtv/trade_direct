<?php
namespace App\Http\Controllers\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\td_members;
use App\td_users;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use Mail;
use Illuminate\Support\Facades\Crypt;
use App\Providers\RouteServiceProvider;
class RegisterController extends Controller
{

    protected $redirectTo = RouteServiceProvider::HOME;

    public function __construct()
    {
        $this->middleware('guest');
    }

protected function register(Request $request)
{ 
    //print_r($request);die();
   
   
$request->validate([
            'fname' => 'required',
            'pword' => 'required',
            'email' => 'required',
            'phone' => 'required',
        ]);
/*$member_id = td_members::orderBy('id','DESC')->limit(1)->where('user_type',2)->get();

//print_r($member_id[0]->member_id);die();
if($member_id==''){
   $uid=0; 
}else{
    $uid=$member_id[0]->member_id;
  $uid += $member_id[0]->member_id;
}*/
$name=$request->get('fname').' '.$request->get('lname');
$member = new td_members([
        'name' =>$name, 
        'email'=> $request->get('email'),
        'phone'=> trim(str_replace(" ","",$request->get('phone'))),
        'address'=> $request->get('address'),
        'status'=> 1,
        'plan_id'=>1,
        'deleted'=>0,
        'plan_id'=> 1,
        'created_by'=>0,
        'role_id'=> 2     
      ]);
        $member->save();
        $user_id=$member->id;
        $user = new td_users([
            'name' =>$name,
            'password'=> Hash::make($request->get('pword')),
            'user_type'=> 2,
            'member_id'=> $user_id,
            'email'=> $request->get('email'),
            'phone'=> trim(str_replace(" ","",$request->get('phone'))),
            'status'=> 2,
            'created_by'=>0,
            'deleted'=>0,
                  
          ]);
          //$user->save();
if($user->save()){
$request->session()->put('id', $member->id); 
    $user_email=$request->get('email');
    $user_name=$name;
    $encrypted = Crypt::encrypt($user_id);
    $url=url('activate-account/'.$encrypted);
    $data = array(
        'name'=>$user_name,
        'url'=>$url
        );
       Mail::send('email/registration_temp', $data, function($message) use ($user_name, $user_email) {
         $message->to($user_email, $user_name)->subject
            ('Account activation');
         $message->from('tradedirectcochin@gmail.com','Trade Direct');
      });
        $id=$request->session()->get('user_id');
        return redirect('/');
}

}


}



