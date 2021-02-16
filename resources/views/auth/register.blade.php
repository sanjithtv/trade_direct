@extends('layouts.login')
@section('content')

    <div class="content content-fixed content-auth">
      <div class="container">
        @if (session('error'))

<div class="alert alert-danger">{{ session('error') }}</div>
@endif
        <div class="media align-items-stretch justify-content-center ht-100p">
          <div class="sign-wrapper mg-lg-r-50 mg-xl-r-60">
            <div class="pd-t-20 wd-100p" style="margin-top: -30px;">
              <h4 class="tx-color-01 mg-b-5">Create New Account</h4>
             
<form method="POST" action="{{ route('register') }}" class="login100-form validate-form" style="margin-top: 0px;">
   @csrf
 <style type="text/css">
  .row{
   max-width:490px !important; 
   width: 490px; 
   margin-left: -30px 
  }
</style>
<div class="form-group validate-input @error('company_name') alert-validate @enderror" data-validate = "@if ($errors->has('company_name')) {{ $errors->first('company_name') }} @else {{ 'Company Name is required' }} @endif">
  <label>Company name</label>
<input class="form-control {{ old('company_name') ? 'has-val' : ''}}" type="text" id="company_name" name="company_name" value="{{ old('company_name') }}" required style="width:430px;">
      
</div>

<div class="col-md-12 row">  
<div class="col-md-6">  
 <div class="form-group validate-input @error('firstname') alert-validate @enderror" data-validate = "@if ($errors->has('firstname')) {{ $errors->first('firstname') }} @else {{ 'First Name is required' }} @endif">
                <label>Firstname</label>
                <input type="text" class="form-control {{ old('company_name') ? 'has-val' : ''}}" id="firstname" name="firstname" value="{{ old('firstname') }}" required>
              </div>
            </div><div class="col-md-6"> 
              <div class="form-group validate-input @error('lastname') alert-validate @enderror" data-validate = "@if ($errors->has('lastname')) {{ $errors->first('lastname') }} @else {{ 'Last Name is required' }} @endif">
                <label>Lastname</label>
                <input class="form-control {{ old('company_name') ? 'has-val' : ''}}" type="text" id="lastname" name="lastname" value="{{ old('lastname') }}" required>
              </div>
</div>
</div>
<div class="col-md-12 row">  
<div class="col-md-6">
           <div class="form-group validate-input @error('email') alert-validate @enderror" data-validate = "@if ($errors->has('email')) {{ $errors->first('email') }} @else {{ 'Email is required' }} @endif">
                <label>Email address</label>
                <input type="email" class="form-control {{ old('company_name') ? 'has-val' : ''}}" type="email" id="email" name="email" value="{{ old('email') }}" required>
              </div>
            </div><div class="col-md-6">
               <div class="form-group validate-input @error('contact_phone') alert-validate @enderror" data-validate = "@if ($errors->has('contact_phone')) {{ $errors->first('contact_phone') }} @else {{ 'Mobile number is required' }} @endif">
                <div class="d-flex justify-content-between mg-b-5">
                  <label class="mg-b-0-f">Phone</label>
                </div>
                <input class="form-control {{ old('contact_phone') ? 'has-val' : ''}}" type="tel" id="contact_phone" name="contact_phone" value="{{ old('contact_phone') }}" required>
              </div>
            </div>
          </div>
              <div class="col-md-12 row">  
<div class="col-md-6">
              <div class="form-group validate-input @error('password') alert-validate @enderror" data-validate = "@if ($errors->has('password')) {{ $errors->first('password') }} @else {{ 'Password is required' }} @endif">
                <div class="d-flex justify-content-between mg-b-5">
                  <label class="mg-b-0-f">Password</label>
                </div>
                <input type="password" class="form-control {{ old('company_name') ? 'has-val' : ''}}"  id="password" name="password" value="{{ old('password') }}" require>
              </div>
            </div><div class="col-md-6">
          <div class="form-group validate-input" data-validate="Password not same">
                <div class="d-flex justify-content-between mg-b-5">
                  <label class="mg-b-0-f">Confirm password</label>
                </div>
                <input type="password" class="form-control"  name="password_confirmation">
              </div>
            </div></div>
             

              <button class="btn btn-brand-02 btn-block" style="width:430px;">Create Account</button>
              <div class="divider-text" style="width:430px;">or</div>
              
              <div class="tx-13 mg-t-20 tx-center" style="margin-top: 20px;">Already have an account? <a href="{{('login')}}">Sign In</a></div>
            </form>
            </div>
          </div><!-- sign-wrapper -->
          <div class="media-body pd-y-30 pd-lg-x-50 pd-xl-x-60 align-items-center d-none d-lg-flex pos-relative">
            <div class="mx-lg-wd-500 mx-xl-wd-550">
             <img src="{{ asset('public/img/image1.jpg') }}" class="img-fluid" alt=""style="margin-top: -30px;">
            </div>
            <div class="pos-absolute b-0 r-0 tx-12">
            
            </div>
          </div><!-- media-body -->
        </div><!-- media -->
      </div><!-- container -->
    </div><!-- content -->

  @endsection
   
