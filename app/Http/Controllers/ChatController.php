<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\Trade\TradeHelp;
use App\td_classified_post_chats;
use App\td_classified_posts;
use App\td_members;
use App\td_classified_post_chat_messages;

use DB;
class ChatController extends Controller
{
    public function index(Request $request)
    {
      if($request->session()->get('member_id'))
      {
        $post_id=$request->post('post_id');
        $post_title=$request->post('post_title');
        $initiated_by=$request->session()->get('member_id');
        //$member_id=$request->post('member_id');
        $msg=td_classified_post_chats::where([['post_id','=',$post_id],['initiated_by','=',$initiated_by],['deleted','=', '0']])->first();
        //echo $msg->id;
        if($msg)
        {
        $data=td_classified_post_chat_messages::where('chat_id',$msg->id)->get();
       return view('pages.chat',['post_id'=>$post_id,'post_title'=>$post_title,'data'=>$data]);
        }
        else{
          $data='';
       return view('pages.chat',['post_id'=>$post_id,'post_title'=>$post_title,'data'=>$data]);
        }
      }
      
      else{
      
        return redirect()->back()->withSuccess('IT WORKS!');
      }
       
        
    }
    public function saveMessage(Request $request)
    {
       $post_id=$request->post('post_id');
       //$msg_id=$request->post('chat_id');
        $initiated_by=$request->session()->get('member_id');
        date_default_timezone_set('Asia/Kolkata');
        $initiated_date=date("d-m-Y h:i A", time());
         $chat_msg=$request->post('msg');
         $msg=td_classified_post_chats::where([['post_id','=',$post_id],['initiated_by','=',$initiated_by],['deleted','=', '0']])->first();
        // $msg=td_classified_post_chats::where([['id','=',$msg_id],['deleted','=', '0']])->first();
         if($msg)
         {
            $chat_id=$msg->id;
         }
        else{
        $chat = new td_classified_post_chats([
	        'initiated_by' => $initiated_by,
	        'post_id' => $post_id,
          'initiated_date' => $initiated_date,
	        'deleted' => '0',
	        
      	]);
        $chat->save();
        $chat_id=$chat->id;
        }
        $message=new td_classified_post_chat_messages([
	        
	        'post_id' => $post_id,
            'chat_id' => $chat_id,
            'sender_id' => $initiated_by,
            'msg_type'=>'1',
            'msg_content'=>$chat_msg,
            'status'=>'1',
            'created_date'=>$initiated_date,
	        'additional' => '',
	        
      	]);
        $message->save();
        $id=$message->id;
        $data=td_classified_post_chat_messages::where('id',$id)->first();
        //print_r($data);
        return json_encode($data);
    }
    public function chatInbox($id)
    {
      //$id;
      $msg=td_classified_post_chats::where([['initiated_by','=',$id],['deleted','=', '0']])
      ->orderBy('created_at', 'DESC')
      ->get();
      return view('pages.chat_inbox',['msg'=>$msg]);
    }
    public function chatDetails(Request $request)
    {
      $chat_id=$request->post('chat_id');
      //$data=td_classified_post_chat_messages::where('chat_id',$chat_id)->get();
     $data = DB::table('td_classified_post_chat_messages')
                ->join('td_classified_posts','td_classified_post_chat_messages.post_id', '=', 'td_classified_posts.id')
                ->where('td_classified_post_chat_messages.chat_id','=', $chat_id)
                
                ->get();
      return json_encode($data);
    }


    public function viewMessages(Request $request)
    {
      $member_id=$request->session()->get('member_id');
      $posts=DB::table('td_classified_posts')
      ->join('td_classified_post_chats','td_classified_post_chats.post_id', '=', 'td_classified_posts.id')
      ->where('td_classified_posts.post_listedby','=', $member_id)
      ->orderBy('td_classified_post_chats.created_at', 'DESC')
      ->get(); 
     // print_r($posts);
     return view('pages.chat_inbox_receiver',['posts'=>$posts]);
    }




    public function saveUserMessage(Request $request)
    {
       $post_id=$request->post('post_id');
       $chat_id=$request->post('chat_id');
        $initiated_by=$request->session()->get('member_id');
        date_default_timezone_set('Asia/Kolkata');
        $initiated_date=date("d-m-Y h:i A", time());
         $chat_msg=$request->post('msg');
         //$msg=td_classified_post_chats::where([['post_id','=',$post_id],['initiated_by','=',$initiated_by],['deleted','=', '0']])->first();
        
        $message=new td_classified_post_chat_messages([
	        
	        'post_id' => $post_id,
            'chat_id' => $chat_id,
            'sender_id' => $initiated_by,
            'msg_type'=>'1',
            'msg_content'=>$chat_msg,
            'status'=>'1',
            'created_date'=>$initiated_date,
	        'additional' => '',
	        
      	]);
        $message->save();
        $id=$message->id;
        $data=td_classified_post_chat_messages::where('id',$id)->first();
        //print_r($data);
        return json_encode($data);
    }
}
