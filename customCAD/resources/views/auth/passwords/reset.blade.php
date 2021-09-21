@extends('layouts.auth')

@section('content')
<!--Start RESET password Form-->
<section class="login-page pad-tb">
    <div class="v-center m-auto">
      <div class="login-form-div">
        @if (session('status'))
        <div style="line-height:1.5" class="alert alert-success text-center" role="alert">
            {{ session('status') }}
        </div>
        @endif
        <a href="{{ route('home') }}" class="d-block text-center mb30"><img src="{{ asset('images/cadLogoNoText.png') }}" alt="Logo" class="mega-darks-logo" width="80"></a>     
        <h4 class="mb40 text-center">Reset Password</h4>
        <div class="form-block">
          <form id="contact-form" method="POST" action="{{ route('password.update') }}">
            @csrf
            <input type="hidden" name="token" value="{{ $token }}">
            <div class="fieldsets row">
              <div class="col-md-12 form-group">
                    <input id="email" type="email"  placeholder="Email Address" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" hidden>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
              </div>
              <div class="col-md-12 form-group">
                    <input id="password" type="password"  placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autofocus autocomplete="new-password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
              </div>
              <div class="col-md-12 form-group">
                    <input id="password-confirm" type="password"  placeholder="Confirm Password" class="form-control" name="password_confirmation" required autocomplete="new-password">
              </div>
            </div>
            <div class="fieldsets row mt20">
              <div class="col-md-12 form-group v-center">
                <button type="submit" class="lnk btn-main bg-btn">Reset Password <span class="circle"></span></button>
              </div>
            </div>
            <hr class="mt30 mb30">
            <div class="text-center">
              <a class= "mb20" href="{{ route('home') }}">Back to Home Page</a>
            </div>
          </form>
        </div>
      </div>      
      </div>
    </section>      
<!--End RESET password Form-->
@endsection








