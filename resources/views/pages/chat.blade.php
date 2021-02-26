@extends('layouts.app')

@section('content')


<div class="chat-sect">
    <div class="container-fluid">
    <div class="row">
  
    <div class="col-sm-4">
   
    </div>
    <div class="col-sm-8">
      <div class="messaging" >
       
          
          <div class="mesgs">
          <div class="card" style="width: 30rem;">
          <div class="card-body">
            <div class="box-light-chat">
              <div class="box-light-chat-left">
                <div class="chat_img_user">
                  <img src="{{ URL::asset('trade/images/user.jpg')}}" alt="sunil">
                  <span class="online_icon"></span>
                </div>
                </div>
                <div class="chater-name">
                 {{$post_title}}
                  <span>1767 Messages</span>
                </div>
              
              <div class="box-light-chat-right">
                <span>
                  <a href="">
                  <svg width="24px" height="24px" viewBox="0 0 1024 1024" data-aut-id="icon" class="" fill-rule="evenodd"><path class="rui-77aaa" d="M128 106.667l-42.667 42.667v725.333l42.667 42.667 42.667-42.667v-256h409.003l42.667 42.667h273.109l43.221-42.667v-428.459l-43.221-40.875h-323.115l-42.667-42.667h-401.664zM170.667 192h323.669l42.667 42.667h316.331v341.333h-195.669l-42.667-42.667h-444.331v-341.333z"></path></svg>
                </a>
                </span>
                <span>
                  <a href="">
                  <svg width="24px" height="24px" viewBox="0 0 1024 1024" data-aut-id="icon" class="" fill-rule="evenodd"><path class="rui-77aaa" d="M746.086 916.070c-67.994 0-258.253-16.589-427.213-185.549-205.619-205.414-185.344-442.573-184.32-452.608l1.229-12.083 100.352-125.747h178.176l103.629 103.629v170.803l-74.547 74.752c11.878 18.432 29.901 43.622 51.814 65.536 22.118 22.118 47.514 40.346 65.946 52.019l74.547-72.090 192.512 0.205 79.872 101.99v178.586l-124.314 98.714-12.083 1.229c-1.638-0.205-10.65 0.614-25.6 0.614zM215.45 296.96c-1.229 45.875 5.734 219.955 161.382 375.603 155.443 155.443 329.318 162.611 375.808 161.382l73.523-58.368v-110.797l-37.888-48.538h-119.603l-94.618 91.341-26.214-13.722c-2.458-1.229-62.054-32.973-110.797-81.715s-80.282-108.339-81.715-110.797l-14.131-26.624 94.413-94.618v-103.014l-55.706-55.706h-104.858l-59.597 75.571zM776.602 333.619l72.704-72.704v-106.291l-56.934-56.934h-116.531l-55.501 55.501v90.726h81.92v-56.73l7.578-7.578h48.742l9.011 9.011v38.502l-72.704 72.704v80.691h81.92v-46.899zM776.602 421.683h-81.92v73.318h81.92v-73.318z"></path></svg>
                </a>
                  <span>
                    <a href="">
                    <svg width="24px" height="24px" viewBox="0 0 1024 1024" data-aut-id="icon" class="" fill-rule="evenodd"><path class="rui-77aaa" d="M512 725.333c39.111 0 71.111 32 71.111 71.111s-32 71.111-71.111 71.111c-39.111 0-71.111-32-71.111-71.111s32-71.111 71.111-71.111zM512 440.889c39.111 0 71.111 32 71.111 71.111s-32 71.111-71.111 71.111c-39.111 0-71.111-32-71.111-71.111s32-71.111 71.111-71.111zM512 156.444c39.111 0 71.111 32 71.111 71.111s-32 71.111-71.111 71.111c-39.111 0-71.111-32-71.111-71.111s32-71.111 71.111-71.111z"></path></svg>
                  </a>
                  </span>
                  <span>
                    <a href="">
                    <svg width="18px" height="18px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
     viewBox="0 0 512.001 512.001" style="enable-background:new 0 0 512.001 512.001;" xml:space="preserve">
      <path d="M284.286,256.002L506.143,34.144c7.811-7.811,7.811-20.475,0-28.285c-7.811-7.81-20.475-7.811-28.285,0L256,227.717
        L34.143,5.859c-7.811-7.811-20.475-7.811-28.285,0c-7.81,7.811-7.811,20.475,0,28.285l221.857,221.857L5.858,477.859
        c-7.811,7.811-7.811,20.475,0,28.285c3.905,3.905,9.024,5.857,14.143,5.857c5.119,0,10.237-1.952,14.143-5.857L256,284.287
        l221.857,221.857c3.905,3.905,9.024,5.857,14.143,5.857s10.237-1.952,14.143-5.857c7.811-7.811,7.811-20.475,0-28.285
        L284.286,256.002z"/>
          </svg>
        </a>
                  </span>
                </span>
              </div>
            </div>
            <div class="msg_history">
             <!-- <div class="incoming_msg">
                <div class="incoming_msg_img"> <img src="{{ URL::asset('trade/images/user.jpg')}}" alt="sunil"> </div>
                <div class="received_msg">
                  <div class="received_withd_msg">
                    <p>Is it available in your location</p>
                    <span class="time_date"> 11:01 AM    |    June 9</span></div>
                </div>
              </div>-->
              
              <?php 
              if($data)
              {
                foreach($data as $msg)
                {
                  $datetime = $msg->created_date;
                  list($date, $time, $a)=explode(' ', $datetime);
                  list($day, $month, $year)=explode('-', $date); 
                  //$m=date('M',$month);

                  ?>
                @if(session()->get('member_id')==$msg->sender_id)
              <div class="outgoing_msg">
                  <div class="sent_msg"><p>{{$msg->msg_content}}</p>
                  <span class="time_date"> {{$time}} {{$a}}   |    {{date("M", mktime(0, 0, 0, $month, 10))}} {{$day}}</span> 
                </div>
              </div>
                  @else
              <div class="incoming_msg">
                <!--<div class="incoming_msg_img"> <img src="{{ URL::asset('trade/images/user.jpg')}}" alt="sunil"> </div>-->
                <div class="received_msg">
                  <div class="received_withd_msg">
                    <p>{{$msg->msg_content}}</p>
                    <span class="time_date"> {{$time}} {{$a}}   |    {{date("M", mktime(0, 0, 0, $month, 10))}} {{$day}}</span></div>
                </div>
              </div>
            @endif
              <?php
                }
              }
                ?>
              </div>
            <div class="type_msg">
              <div class="input_msg_write">
              <form action="{{route('savemessage')}}" method="post">
      {{csrf_field()}}
                @method('POST')
        <input type="hidden" value="{{$post_id}}" name="post_id" id="post_id">
       
                <input type="text" class="write_msg" placeholder="Type a message" name="message" id="msg" />
                <button class="msg_send_btn" type="button" id="send_msg"><i class="fa fa-paper-plane-o" aria-hidden="true"></i></button>
        </form>
              </div>
            </div>
          </div>
          </div></div>
        
        </div></div>
      </div>
    </div>
  </div>
  @endsection
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script type="text/javascript">

$(document).ready(function() {
  


    $('#send_msg').on('click', function() {
   
        
     var post_id=$('#post_id').val();
     var msg=$('#msg').val();
    // alert(msg);
     //var member_id=$('#member_id').val();
     var data={
                        "_token":$('input[name=_token]').val(),
                        'post_id': post_id,
                        'msg': msg,
                    };
      $.ajax({
        type: 'post',
        url: 'savemessage',
        dataType: 'json',
        //cache:false,
        data: data,
        
    
        success: function (data) {
            //var data=JSON.parse(data);
            var str=data.created_date;
            var words=str.split(' ');
            //var date=words[0];
            //var spilt=date.spilt('-');

            //console.log(split[1]);
                    //console.log(str);
                    document.getElementById('msg').value = "";
                    $('.msg_history').append( '<div class="outgoing_msg"><div class="sent_msg"><p>'+data.msg_content+'</p><span class="time_date">'+words[1]+' '+words[2]+' '+'</span> </div></div>');
        },
        error : function(er){
          console.log(er.data)
        }
        
      });
    
    

    
    
    });

});
</script>