@extends('layouts.app')

@section('title')
<title>Payment Fail</title>
@endsection

@section('content')
<!--Payment Success-->
<section style="height:auto;!important" class="hero-section hero-bg-bg1 bg-gradient1 pad-tb">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center mt50 mb50">
                <div class="error-block">
                    <h1>Payment Failed!</h1>
                    <div class="d-flex justify-content-center">
                        <lottie-player src="https://assets1.lottiefiles.com/packages/lf20_FQcOBH.json"  background="transparent"  speed="1"  style="width: 300px; height: 300px;" autoplay></lottie-player>
                    </div>
                    <h5>It seems like we've encountered an error when we're processing your payment.</h5>
                    <h5>Please try again later!</h5>
                    <div class="d-flex justify-content-center">
                        <div class="btn-grp mt40 ">
                            <a href="{{ route('home') }}" class="btn-main bg-btn3 lnk">Back to Home Page <i class="fas fa-home"></i> <span class="circle"></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Payment Success-->
@endsection