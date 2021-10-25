@extends('layouts.app')

@section('title')
<title>Payment History</title>
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
                <h2>Program History</h2>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--End Breadcrumb Area-->
  <section style="height:100% !important;"class="shop-products-bhv pt60 pb60">
    <div class="container shop-container">
        

            <div class="accordion" id="accordionExample">
                @forelse ($events as $event)
                <div class="card">
                    <div class="card-header" id="heading-{{ $event->id }}">
                      <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left card-title mt10 collapsed" type="button" data-toggle="collapse" data-target="#collapse-{{ $event->id }}" aria-expanded="true" aria-controls="collapse-{{ $event->id }}">
                          {{ $event->title }}
                        </button>
                      </h2>
                    </div>
                
                    <div id="collapse-{{ $event->id }}" class="collapse pt30" aria-labelledby="heading-{{ $event->id }}" data-parent="#accordionExample">
                      <div class="card-body">
                       
                                  <table class="table border">
                                      <tbody>
                                          <tr>
                                              <th>Registration ID</th>
                                              <td>{{ $event->pivot->id }}</td>
                                          </tr>
                                          <tr>
                                              <th>Event Title</th>
                                              <td>{{ $event->title }}</td>
                                          </tr>
                                          <tr>
                                              <th>Full Name</th>
                                              <td>{{ $event->pivot->full_name }}</td>
                                          </tr>
                                          <tr>
                                              <th>Participant Mobile</th>
                                              <td>{{ $event->pivot->phone_number }}</td>
                                          </tr>
                                          <tr>
                                              <th>Participant IC Number</th>
                                              <td>{{ $event->pivot->ic_number }}</td>
                                          </tr>
                                          <tr>
                                              <th>Participant Matric Number</th>
                                              <td>{{ $event->pivot->matric_number }}</td>
                                          </tr>
                                          <tr>
                                              <th>Attendance Link</th>
                                              <td><a href="{{ $event->attendance_link }}">{{ $event->attendance_link }}</a></td>
                                          </tr>
                                          <tr>
                                              <th>Whatsapp Group</th>
                                              <td><a href="{{ $event->whatsapp_link }}">{{ $event->whatsapp_link }}</a></td>
                                          </tr>
                                          <tr>
                                              <th>Program Meeting Link</th>
                                              <td><a href="{{ $event->meeting_link }}">{{ $event->meeting_link }}</a></td>
                                          </tr>
                                          @if($event->pivot->payment_amount === null)
                                          <tr>
                                                <th>Payment</th>
                                                <td>Free</td>
                                          </tr>
                                          @else
                                          <tr>
                                            <th>Payment</th>
                                            <td>RM {{ $event->pivot->payment_amount }}</td>
                                          </tr>
                                          @endif
                                      </tbody>
                                  </table>
                      </div>
                    </div>
                  </div>
                @empty
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="common-heading wow fadeInUp" data-wow-delay=".2s">
                            <lottie-player src="https://assets2.lottiefiles.com/private_files/lf30_GjhcdO.json"  background="transparent"  speed="1" style="margin: 0 auto; width: 300px; height: 300px;"  loop  autoplay></lottie-player>
                            <h5 class="mt30">Seems like you haven't registered any program,</h5>
                            <h5 class="mb30">Try registering a program and come back later.</h5>
                        </div>
                    </div>
                  </div>
                @endforelse
                <div class="d-flex justify-content-center mt-4">
                    {{ $events->links() }}
                </div>
    </div>
  </section>

 
@endsection

