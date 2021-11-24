@extends('layouts.auth')

@section('content')
<!--Start register Form-->
<section style="height:auto" class="register-page pad-tb">
    <div class="v-center m-auto">
      <div class="register-form-div">
        <a href="{{ route('home') }}" class="d-block text-center mb30"><img src="{{ asset('images/cadLogoNoText.png') }}" alt="Logo" class="mega-darks-logo" width="80"></a>     
        <h4 class="mb40 text-center">Register Account</h4>
        <div class="form-block">
          <form id="contact-form" method="POST" action="{{ route('register') }}">
            @csrf
            <div class="fieldsets row">

              <div class="col-md-6 form-group">
                  <label for="name"><h6>Name (8 - 20 characters)</h6></label>
                    <input id="name" type="text"  placeholder="Enter Name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
              </div>

              <div class="col-md-6 form-group">
                <label for="email"><h6>Email Address</h6></label>
                    <input id="email" type="email"  placeholder="Enter Email Address" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
              </div>

              <div class="col-md-12 form-group mt-4">
                <label for="password"><h6>Password (minimum 8 characters)</h6></label>
                    <input id="password" type="password" placeholder="Enter Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
              </div>

              <div class="col-md-12 form-group mt-4">
                <label for="password-confirm"><h6>Confirm Password</h6></label>
                    <input id="password-confirm" type="password" placeholder="Enter Confirm Password" class="form-control" name="password_confirmation" required autocomplete="new-password">
              </div>

            </div>
            <div class="fieldsets row mt20">
              <div class="col-md-8 form-group v-center  ">
                <button type="submit" class="lnk btn-main bg-btn">Register <span class="circle"></span></button>
              </div>
              <div class="col-md-4 form-group v-center login-text text-center"><a href="{{ route('login') }}" class="login">Already have an account?</a></div>
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
<!--End register Form-->
@endsection

