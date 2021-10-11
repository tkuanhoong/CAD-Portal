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
        <div class="row">
            
            <div class="col-lg-8">
                <h4>{{ $event->title }}</h4><br>
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
                            <a href="#" class="btn-main bg-btn lnk w-100">Register <span class="circle"></span> </a>
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