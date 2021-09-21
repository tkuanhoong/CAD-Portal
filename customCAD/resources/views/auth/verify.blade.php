@extends('layouts.auth')

@section('content')
<!--Start login Form-->
<section class="login-page pad-tb">
    <div class="v-center m-auto">
      <div class="login-form-div">
        @if (session('resent'))
        <div class="alert alert-success" role="alert">
            {{ __('A fresh verification link has been sent to your email address.') }}
        </div>
        @endif
        <a href="{{ route('home') }}" class="d-block text-center mb30"><img src="{{ asset('images/cadLogoNoText.png') }}" alt="Logo" class="mega-darks-logo" width="80"></a>     
        <h4 class="mb40 text-center">Verify Your Email Address</h4>
        <div class="form-block">
          <form id="contact-form" method="POST" action="{{ route('verification.resend') }}">
            @csrf
            <div class="fieldsets row text-center">
            <p>Before proceeding, please check your email for a verification link.
            If you did not receive the email, click button below to request another</p>
            </div>
            <div class="fieldsets row mt20">
              <div class="col-md-12 form-group v-center">
                <button type="submit" class="lnk btn-main bg-btn">Request Verification Link <span class="circle"></span></button>
              </div>


          </form>
        </div>
      </div>      
      </div>
    </section>      
    <!--End login Form-->
@endsection


