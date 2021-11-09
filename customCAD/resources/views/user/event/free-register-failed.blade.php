@extends('layouts.app')

@section('title')
<title>Payment Success</title>
@endsection

@section('content')
<!--START Free Registration Success-->
<section style="height:auto !important;"class="hero-section hero-bg-bg1 bg-gradient1 pad-tb">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center mt50 mb50">
                <div class="error-block">
                    <h1>Registration Failed!</h1>
                    <div class="d-flex justify-content-center">
                        <lottie-player src="https://assets8.lottiefiles.com/private_files/lf30_7a52nvr3.json"  background="transparent"  speed="1"  style="width: 300px; height: 300px;" autoplay></lottie-player>
                    </div>
                    <h5>Seems like the registration was failed, try again later.</h5>
                    <div class="d-flex justify-content-center buttons">
                        <div class="btn-grp mt40">
                            <a href="{{ route('home') }}" class="btn-main bg-btn3 lnk home-button">Back to Home Page <i class="fas fa-home"></i> <span class="circle"></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--END Free Registration Success-->
@endsection