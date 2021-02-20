@component('mail::message')



@if($name)

<p>Hello {{  $name  }},</p>

@endif



@if($password)

<p>Your New password is:{{  $password  }}</p>

@endif

@component('mail::button', ['url' => 'http://localhost:8000/'])
Return to Trade Direct
@endcomponent

Thanks,<br>
Trade Direct<br>
<img  class="t" src="{{ URL::asset('trade/images/logo.png')}}" width="150" align="center">
@endcomponent
