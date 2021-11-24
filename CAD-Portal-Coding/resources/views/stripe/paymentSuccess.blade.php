@extends('layouts.app')

@section('title')
<title>Payment Success</title>
@endsection

@section('content')
<!--Payment Success-->
<section style="height:auto;!important" class="hero-section hero-bg-bg1 bg-gradient1 payment-success-page">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center mt50 mb50 payment-details">
                <div class="error-block">
                    <h1>Payment Success!</h1>
                    <div class="d-flex justify-content-center">
                        <lottie-player src="https://assets8.lottiefiles.com/packages/lf20_H0E2nQ.json"  background="transparent"  speed="1"  style="width: 300px; height: 300px;" autoplay></lottie-player>
                    </div>

                    <div class="thank-you-text mb-auto">
                        <h5 style="margin-bottom: 15px;">Thank you for registering our event!</h5>
                        <p>An email of the receipt has been sent to <b>{{ auth()->user()->email }}</b>.</p> 
                        <p>If you don't find the receipt in your inbox, kindly check your junk mail.</p>
                    </div>
                    
                    <div class="d-flex justify-content-center buttons">
                        <div class="btn-grp mt40">
                            <a href="{{ route('eventHistory',auth()->user()) }}" class="btn-main bg-btn5 lnk event-history-button">View Event History <i class="fas fa-shopping-cart"></i> <span class="circle"></span></a>
                            <a href="{{ route('home') }}" class="btn-main bg-btn3 lnk home-button">Back to Home Page <i class="fas fa-home"></i> <span class="circle"></span></a>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</section>
<!--Payment Success-->
@endsection