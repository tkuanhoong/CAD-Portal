@extends('layouts.app')

@section('title')
<title>Programs</title>
@endsection

@section('content')
<!--Breadcrumb Area-->
<section class="breadcrumb-area banner-1" data-background="">
    <div class="text-block">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 v-center">
            <div class="bread-inner">
              <div class="bread-title">
                <h2>{{ $event->title }}</h2>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--End Breadcrumb Area-->


<!--Single Event-->
<section class="shop-products-prvw pt20 pb60">
    <div class="container shop-container">
        @if($errors->any())
            <div class="alert alert-danger">
                There was a problem registering your event. Please fill out the registration form properly.
            </div>
        @endif
        <div class="row">
            
            <div class="col-lg-8">
                <div class="rpb-shop-prevw">
                    <img src="/storage/event_images/{{ $event->banner }}" class="w-100" alt="event-banner">
                </div>

                <div class="rpb-item-info">
                    <div class="tab-17 tabs-layout">
                        <ul class="nav nav-tabs" id="myTab3" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="tab1a" data-toggle="tab" href="#tab1" role="tab" aria-controls="tab1" aria-selected="true">Description</a>
                            </li>                            
                        </ul>
                        <div class="tab-content" id="myTabContent2">
                            <div class="mt20 tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="tab1a">

                                {!! $event->description !!}
                            </div>
                        </div>
                    </div>
                </div>	
            </div>

            <div class="col-lg-4">

                <div class="rpb-item-infodv">
                    <h4 class="mb20">Event Details</h4>
                    <ul>
                        <li class="price">
                            <strong>Event Fee</strong>
                            <div class="nx-rt">										
                                <div class="rpb-itm-pric"> <span class="offer-prz">{{ $event->fee == 0 ? "Free": "RM ".$event->fee}} </span>  </div>
                            </div>
                        </li>
                        <li>
                            <strong>Date</strong>
                            <div class="nx-rt">{{ date('d M Y', strtotime($event->date)) }}</div>
                        </li>
                        <li>
                            <strong>Time</strong>
                            <div class="nx-rt">{{ date('h:i A', strtotime($event->time)) }}</div>
                        </li>
                        <li>
                            <strong>Location</strong>
                            <div class="nx-rt">{{ $event->location }}</div>
                        </li>
                        <li>
                            <strong>Organizer</strong>
                            <div class="nx-rt">{{ $event->organizer }}</div>
                        </li>
                        <li>
                            @if (Auth::check())
                                @if(auth()->user()->events->pluck('id')->contains($event->id))
                                    <button class="btn-main bg-btn2 lnk w-100" disabled>Registered<span class="circle"></span></button>
                                @else
                                <a href="#" class="btn-main bg-btn lnk w-100" data-toggle="modal" data-target="#modalform">Register<i class="fas fa-chevron-right fa-icon"></i><span class="circle"></span></a>
                                @endif
                                <!--start Modal html -->
                                <div class="popup-modals">
                                    <div class="modal" id="modalform">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <div class="common-heading">
                                                        <h4 class="mt0 mb0">Registration Form</h4>
                                                    </div>
                                                    <button type="button" class="closes" data-dismiss="modal">&times;</button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="form-block fdgn2 mt10 mb10">
                                                        <form action="{{route('registerForEvent',$event)}}" method="post" id="register-program-form" name="register-program-form">
                                                            @csrf
                                                            <div class="fieldsets row">
                                                                <div class="col-md-12">
                                                                    <input type="text" class="form-control @error('full_name') is-invalid @enderror" placeholder="Full Name" name="full_name" value="{{ old('full_name') }}">
                                                                        @error('full_name')
                                                                        <span class="invalid-feedback mb-4" role="alert">
                                                                            <strong style="margin-bottom:50px;color: #de4352;font-size: 15px;float: none; width: 100%;">{{ $message }}</strong>
                                                                        </span>
                                                                        @enderror
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <input type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email Address (Certificate will be sent to this email)" name="email" value="{{ old('email') }}">
                                                                    @error('email')
                                                                    <span class="invalid-feedback mb-4" role="alert">
                                                                        <strong style="margin-bottom:50px;color: #de4352;font-size: 15px;float: none; width: 100%;">{{ $message }}</strong>
                                                                    </span>
                                                                    @enderror
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <input type="text" class="form-control @error('phone_number') is-invalid @enderror" placeholder="Contact Number without '-' (eg. 01234567891)" name="phone_number" value="{{ old('phone_number') }}">
                                                                    @error('phone_number')
                                                                    <span class="invalid-feedback mb-4" role="alert">
                                                                        <strong style="margin-bottom:50px;color: #de4352;font-size: 15px;float: none; width: 100%;">{{ $message }}</strong>
                                                                    </span>
                                                                    @enderror
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <input type="text" class="form-control @error('ic_number') is-invalid @enderror" placeholder="IC Number without '-' (eg. 012345678910)" name="ic_number" value="{{ old('ic_number') }}">
                                                                    @error('ic_number')
                                                                    <span class="invalid-feedback mb-4" role="alert">
                                                                        <strong style="margin-bottom:50px;color: #de4352;font-size: 15px;float: none; width: 100%;">{{ $message }}</strong>
                                                                    </span>
                                                                    @enderror
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <input type="text" class="form-control @error('matric_number') is-invalid @enderror" placeholder="Matric Number" name="matric_number" value="{{ old('matric_number') }}">
                                                                    @error('matric_number')
                                                                    <span class="invalid-feedback mb-4" role="alert">
                                                                        <strong style="margin-bottom:50px;color: #de4352;font-size: 15px;float: none; width: 100%;">{{ $message }}</strong>
                                                                    </span>
                                                                    @enderror
                                                                </div>
                                                                
                                                            </div>
                                                            <div class="fieldsets mt20 pb20">
                                                                <button type="submit" form="register-program-form" class="lnk btn-main bg-btn">Submit <i class="fas fa-chevron-right fa-icon"></i><span class="circle"></span></button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end Modal html  --> 
                            @else
                            <!--start Modal button -->
                            <a href="/login" class="btn-main bg-btn lnk w-100">Register<i class="fas fa-chevron-right fa-icon"></i><span class="circle"></span></a>
                            <!--end Modal button -->
                            @endif
                            
                        </li>
                    </ul>
                </div>

                <div class="rpb-item-infodv">
                    <h4 class="mb20">Event Categories</h4>
                    <div class="tabs">
                        {{ ucfirst($event->category) }}
                    </div>
                </div>	

            </div>
        </div>
    </div>
</section>

@endsection