<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use App\Mail\SendMail;
use App\td_users;

class LoginController extends Controller
{
    public function index(Request $request)
    {
        if($request->session()->get('user_id')!=""){
                
            $member=td_users::where([['id', '=', $request->session()->get('user_id')]])->first();
            return view('pages.profile',compact('member'));
        }
        else{

        $email=$request->post('uname');
        $password=$request->post('pwd');
       
        $user=td_users::where([['email', '=', $email]])->first();
        //echo $user->name;
        if ($user && Hash::check($password, $user->password)) {

            $request->session()->put('user_id',$user->id);
             $request->session()->put('user_name',$user->name);
             $request->session()->put('member_id',$user->member_id);
            // echo  $request->session()->get('user_name');
            if($request->session()->get('user_id')!=""){
                
                $member=td_users::where([['id', '=', $request->session()->get('user_id')]])->first();
                return view('pages.profile',compact('member'));
            }
            
            
          }
        else{
            return redirect()->action('HomeController@index');
        }
    }
    }

    public function Forgotpwd(Request $request)
    {
        $email=$request->post('email');
        $name=$request->post('name');
        //$email='nayana@gmail.com';
       // $name='nayana';
        $user=td_users::where([['name', '=', $name],['email', '=', $email]])->first();
        if($user)
        {
            $sender=$user->email;
            $password=Str::random(8);
            $pwd=Hash::make($password);
        $data = [
            'name' => $user->name,
            'password' => $password
        ];
      $member=td_users::find($user->id);
      $member->password=$pwd;
      $member->update();
      Mail::to($sender)->send(new SendMail($data));
      return redirect()->action('HomeController@index');
    }
    else{

    }
    }

    public function logout(Request $request)
    {
        $request->session()->flush();
        return redirect()->action('HomeController@index');  
    }
   
}
