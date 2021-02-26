<h3>id:{{session()->get('user_id')}}</h3>
<h3>name:{{$member->name}}</h3>
<a href="{{route('logout')}}">Logout</a>
<a href="{{route('viewmessage')}}">Messages</a>