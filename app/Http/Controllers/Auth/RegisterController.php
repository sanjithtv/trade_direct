<?php
namespace App\Http\Controllers\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\Members;
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
            'password' => 'required',
            'email_id' => 'required',
            'phone' => 'required',
        ]);
$member_id = Members::orderBy('id','DESC')->limit(1)->where('user_type',2)->get();
//print_r($member_id[0]->member_id);die();
if($member_id==''){
   $uid=0; 
}else{
    $uid=$member_id[0]->member_id;
  $uid += $member_id[0]->member_id;
}
$member = new Members([
        'name' =>$request->get('fname'),
        'password'=> Hash::make($request->get('password')),
        'user_type'=> 2,
        'member_id'=> $uid,
        'email'=> $request->get('email_id'),
        'phone'=> trim(str_replace(" ","",$request->get('phone'))),
        'status'=> 2,
        'deleted'=>0,
        'plan_id'=> 1      
      ]);
        $member->save();
        $user_id=$member->id;
if($member->save()){
$request->session()->put('id', $member->id); 
    $user_email=$request->get('email_id');
    $user_name=$request->get('fname');
    $encrypted = Crypt::encrypt($user_id);
    $url=url('activate-account/'.$encrypted);
    $data = array(
        'name'=>$user_name,
        'url'=>$url
        );
       Mail::send('mail/registration_temp', $data, function($message) use ($user_name, $user_email) {
         $message->to($user_email, $user_name)->subject
            ('Account activation');
         $message->from('tradedirectcochin@gmail.com','Trade Direct');
      });
        $id=$request->session()->get('user_id');
        return redirect('/home');
}

}






}


