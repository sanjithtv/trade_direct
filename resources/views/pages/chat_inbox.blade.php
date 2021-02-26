@extends('layouts.app')

@section('content')



<div class="chat-sect">
    <div class="container-fluid">
      <div class="messaging">
        <div class="inbox_msg">
          <div class="inbox_people">
            <div class="headind_srch">
              <div class="recent_heading">
                <h4>INBOX</h4>
              </div>
              <div class="srch_bar">
                <div class="stylish-input-group">
                  <input type="text" class="search-bar"  placeholder="Search" >
                  <span class="input-group-addon">
                  <button type="button"> <i class="fa fa-search" aria-hidden="true"></i> </button>
                  </span> </div>
              </div>
            </div>
            <div class="inbox_chat">
                @foreach($msg as $data)
              <div class="chat_list active_chat">
                  <a class="chatin"><input type="hidden" value="{{$data->id}}" name="chat_id" class="chat_id">
                <div class="chat_people">
                  <div class="chat_img"> <img src="{{ URL::asset('trade/images/user.jpg')}}" alt="sunil"> </div>
                  <div class="chat_ib">
                  <?php
                  $datetime = TradeHelp::get_last_date($data->id);
                  list($date, $time)=explode(' ', $datetime);
                  list($year, $month, $day)=explode('-', $date); 
                  ?>
                    <h5>{{TradeHelp::get_post($data->post_id)}}<span class="chat_date">{{date("M", mktime(0, 0, 0, $month, 10))}} {{$day}}</span></h5>
                    <p>{{TradeHelp::get_last_msg($data->id)}}
                                        <span class="chat_date">
                      <svg width="18px" height="18px" viewBox="0 0 1024 1024" data-aut-id="icon" class="" fill-rule="evenodd"><path class="rui-77aaa" d="M512 725.333c39.111 0 71.111 32 71.111 71.111s-32 71.111-71.111 71.111c-39.111 0-71.111-32-71.111-71.111s32-71.111 71.111-71.111zM512 440.889c39.111 0 71.111 32 71.111 71.111s-32 71.111-71.111 71.111c-39.111 0-71.111-32-71.111-71.111s32-71.111 71.111-71.111zM512 156.444c39.111 0 71.111 32 71.111 71.111s-32 71.111-71.111 71.111c-39.111 0-71.111-32-71.111-71.111s32-71.111 71.111-71.111z"></path></svg>
                    </span>
                    </p>
                  </div>
                </div></a>
              </div>
              @endforeach
         
            </div>
          </div>
          <div class="mesgs">
            <!--<div class="box-light-chat">
              <div class="box-light-chat-left">
                <div class="chat_img_user">
                  <img src="{{ URL::asset('trade/images/user.jpg')}}" alt="sunil">
                  <span class="online_icon"></span>
                </div>
                </div>
                <div class="chater-name">
                  Sunil Navis
                  <span>1767 Messages</span>
                </div>
              
              <div class="box-light-chat-right">
               
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
              <!--<div class="incoming_msg">
                
                <div class="received_msg">
                  <div class="received_withd_msg">
                    <p>Is it available in your location</p>
                    <span class="time_date"> 11:01 AM    |    June 9</span></div>
                </div>
              </div>
              <div class="outgoing_msg">
                <div class="sent_msg">
                  <p>Yes</p>
                  <span class="time_date"> 11:01 AM    |    June 9</span> </div>
              </div>-
            
            </div>
            <div class="type_msg">
              <div class="input_msg_write">
                <input type="text" class="write_msg" placeholder="Type a message" />
                <button class="msg_send_btn" type="button"><i class="fa fa-paper-plane-o" aria-hidden="true"></i></button>
              </div>
            </div>
          </div>-->
        </div>
        
        
      </div>
    </div>
  </div>
  @endsection

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script type="text/javascript">

$(document).ready(function() {
  


    $('.chatin').on('click', function() {
      
        
        var chat_id=$(this).closest("a").find('.chat_id').val();
        //alert(chat_id);
        var member_id=$('#member_id').val();
       
     var data={
                        "_token":$('input[name=_token]').val(),
                        'chat_id': chat_id
                        
                    };
      $.ajax({
        type: 'post',
        url: 'http://localhost:8000/chatdetails',
        dataType: 'json',
        //cache:false,
        data: data,
        
    
        success: function (data) {
            console.log(data)
            //var data=JSON.parse(data);
            $('.mesgs').empty();
            $.each( data, function( key, value1 ) {
              console.log(value1.post_title);
              
              $('.mesgs').append('<div class="box-light-chat"><div class="box-light-chat-left"><div class="chat_img_user"><img src="http://localhost:8000/trade/images/user.jpg" alt="sunil"><span class="online_icon"></span></div></div><div class="chater-name">'+value1.post_title+'<span>1767 Messages<input type="hidden" id="post_id" value="'+value1.post_id+'"><input type="hidden" id="chat_id" value="'+value1.chat_id+'"></span></div><div class="box-light-chat-right"><a href=""><svg width="18px" height="18px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"viewBox="0 0 512.001 512.001" style="enable-background:new 0 0 512.001 512.001;" xml:space="preserve"><path d="M284.286,256.002L506.143,34.144c7.811-7.811,7.811-20.475,0-28.285c-7.811-7.81-20.475-7.811-28.285,0L256,227.717L34.143,5.859c-7.811-7.811-20.475-7.811-28.285,0c-7.81,7.811-7.811,20.475,0,28.285l221.857,221.857L5.858,477.859c-7.811,7.811-7.811,20.475,0,28.285c3.905,3.905,9.024,5.857,14.143,5.857c5.119,0,10.237-1.952,14.143-5.857L256,284.287l221.857,221.857c3.905,3.905,9.024,5.857,14.143,5.857s10.237-1.952,14.143-5.857c7.811-7.811,7.811-20.475,0-28.285L284.286,256.002z"/></svg></a></span></span></div></div><div class="msg_history"></div><div class="type_msg"><div class="input_msg_write"><input type="text" id="msgs" class="write_msg" placeholder="Type a message" /><button class="msg_send_btn" type="button"  id="msg_send"><i class="fa fa-paper-plane-o" aria-hidden="true"></i></button></div></div></div>');
              return false;
            });
            /*$('.mesgs').append('<div class="box-light-chat"><div class="box-light-chat-left"><div class="chat_img_user"><img src="http://localhost:8000/trade/images/user.jpg" alt="sunil"><span class="online_icon"></span></div></div><div class="chater-name">'+data.post_title+'<span>1767 Messages</span></div><div class="box-light-chat-right"><a href=""><svg width="18px" height="18px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"viewBox="0 0 512.001 512.001" style="enable-background:new 0 0 512.001 512.001;" xml:space="preserve"><path d="M284.286,256.002L506.143,34.144c7.811-7.811,7.811-20.475,0-28.285c-7.811-7.81-20.475-7.811-28.285,0L256,227.717L34.143,5.859c-7.811-7.811-20.475-7.811-28.285,0c-7.81,7.811-7.811,20.475,0,28.285l221.857,221.857L5.858,477.859c-7.811,7.811-7.811,20.475,0,28.285c3.905,3.905,9.024,5.857,14.143,5.857c5.119,0,10.237-1.952,14.143-5.857L256,284.287l221.857,221.857c3.905,3.905,9.024,5.857,14.143,5.857s10.237-1.952,14.143-5.857c7.811-7.811,7.811-20.475,0-28.285L284.286,256.002z"/></svg></a></span></span></div></div><div class="msg_history"></div><div class="type_msg"><div class="input_msg_write"><input type="text" class="write_msg" placeholder="Type a message" /><button class="msg_send_btn" type="button"><i class="fa fa-paper-plane-o" aria-hidden="true"></i></button></div></div></div>');*/
            $.each( data, function( key, value ) {
                var str=value.created_date;
                var words=str.split(' ');
                console.log(words)
                if(member_id==value.sender_id)
                {
                    str='<div class="outgoing_msg"><div class="sent_msg"><p>'+value.msg_content+'</p><span class="time_date"> '+words[1]+' '+words[2]+' '+'</span> </div></div>';
                }
                else
                {
                    str='<div class="incoming_msg"><div class="received_msg"><div class="received_withd_msg"><p>'+value.msg_content+'</p><span class="time_date">'+words[1]+' '+words[2]+' '+'</span></div></div></div>';
                }
           
            
            
            $('.msg_history').append(str);
       
       
        });

           },
        error : function(er){
          console.log(er.data)
        }
        
      });
    
    

    
    
    });

    $("body").delegate("#msg_send", "click", function(){
      var post_id=$('#post_id').val();
      
      var msg=$('#msgs').val();

      var data={
                        "_token":$('input[name=_token]').val(),
                        'post_id': post_id,
                        
                        'msg': msg,
                    };
      $.ajax({
        type: 'post',
        url: 'http://localhost:8000/savemessage',
        dataType: 'json',
        //cache:false,
        data: data,
        
    
        success: function (data) {
            //var data=JSON.parse(data);
            console.log(data);
            var str=data.created_date;
            var words=str.split(' ');
            //var date=words[0];
            //var spilt=date.spilt('-');

            //console.log(split[1]);
                    //console.log(str);
                    document.getElementById('msgs').value = "";
                    $('.msg_history').append( '<div class="outgoing_msg"><div class="sent_msg"><p>'+data.msg_content+'</p><span class="time_date">'+words[1]+' '+words[2]+' '+'</span> </div></div>');
        },
        error : function(er){
          console.log(er.data)
        }
        
      });


      });
    

});


</script>
