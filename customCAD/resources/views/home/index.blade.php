@extends('layouts.app')

@section('title')
<title>CADUTMKL</title>
@endsection

@section('content')
<!--Start Hero-->
<section class="hero-section hero-bg-bg1 bg-gradient1">

    <div class="text-block">
    <div class="container">
    <div class="row">
    <div class="col-lg-6 v-center">
    <div class="header-heading">
    <h1 class="wow fadeInUp" data-wow-delay=".2s"><span class="xhighlight">Welcome To</span> <span class="text-radius text-light text-animation bg-b">Creative Art & Design Club</span></h1>
    <p class="wow fadeInUp" data-wow-delay=".4s">Official Website of Creative Art & Design Club 🎨<br>
        Universiti Teknologi Malaysia Kuala Lumpur 🎓</p>
    <a href="/programs" class="btn-main bg-btn lnk wow fadeInUp" data-wow-delay=".6s">Find Out Our Programs! <i class="fas fa-chevron-right fa-icon"></i><span class="circle"></span></a>
    </div>
    </div>
    <div class="col-lg-6 v-center">
    <div class="single-image wow fadeIn" data-wow-delay=".5s">
    <img src="images/wallpaper1.png" alt="wallpaper1" class="img-fluid"/>
    </div>
    </div>
    </div>
    </div>
    </div>
</section>
    <!--End Hero-->

    <!--Start About-->
<section class="about-freelance pad-tb">
    <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <div class="common-heading text-l">
          <span>Creative Art & Design Club</span>
          <h2 class="mb20">“There is no must in art because art is free.”</h2>
          <p>The object of art is not to reproduce reality, but to create a reality of the same intensity.</p>
          <div class="follow-label mt30"><h6>Follow Us</h6>
            <a href="https://www.facebook.com/cadutmkl186/" target="_blank" class="wow bounceIn" data-wow-delay=".2s"><i class="fab fa-facebook"></i></a>
            <a href="https://www.instagram.com/cad_utmkl/" target="_blank" class="wow bounceIn" data-wow-delay=".4s"><i class="fab fa-instagram"></i></a>
            <a href="https://t.me/cadutmkl" target="_blank" class="wow bounceIn" data-wow-delay=".6s"><i class="fab fa-telegram"></i></a>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="counter-facts">
          <div class="counter-no mb20 wow bounceIn" data-wow-delay=".2s">
            <div class="hexagon hexa1" data-tilt data-tilt-max="20" data-tilt-speed="1000">
              <div class="counter-number">
                <span class="counter">0</span><span></span>
                <p>Upcoming<br>Programs</p>
              </div>
            </div>
          </div>
          <div class="counter-no mb20  wow bounceIn" data-wow-delay=".4s">
            <div class="hexagon hexa2" data-tilt data-tilt-max="20" data-tilt-speed="1000">
              <div class="counter-number">
                <span class="counter">0</span><span></span>
                <p>Programs<br>Completed</p>
              </div>
            </div>
          </div>
          <div class="counter-no mt20  wow bounceIn" data-wow-delay=".6s">
            <div class="hexagon hexa3" data-tilt data-tilt-max="20" data-tilt-speed="1000">
              <div class="counter-number">
                <span class="counter">500</span>
                <p>Members</p>
              </div>
            </div>
          </div>
          <div class="counter-no mt20  wow bounceIn" data-wow-delay=".8s">
            <div class="hexagon hexa4" data-tilt data-tilt-max="20" data-tilt-speed="1000">
              <div class="counter-number">
                <span class="counter">1</span><span></span>
                <p>Year</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
    </section>
    <!--End About-->

    <!--Start blog-->
<section class="blog-home pad-tb">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="common-heading">
            <span>PROGRAMS</span>
            <h2 class="mb4">Our Upcoming Programs</h2>
          </div>
        </div>
      </div>
      @if (count($events) == 0)
        <div class="row justify-content-center">
          <div class="col-lg-6">
              <div class="common-heading">
                  <lottie-player class="mb-4" src="https://assets2.lottiefiles.com/packages/lf20_AQcLsD.json"  background="transparent"  speed="1"  style="margin: 0 auto; width: 200px; height: 200px;"  loop autoplay></lottie-player>
                  <h5 class="mb30">No Program Available</h5>
              </div>
          </div>
        </div>
      @else
        <div class="row mb-4">
          @php
              $count = 2
          @endphp
          @foreach ($events as $event)
            <div class="col-lg-4 col-sm-6 single-card-item wow fadeInUp" data-wow-delay=".{{ $count }}s">
              <div class="isotope_item hover-scale">
                <div class="item-image">
                  <a href="{{ route('showSingleProgram',$event) }}"><img src="/storage/event_images/{{ $event->banner }}" alt="blog" class="img-fluid"/> </a>
                  <span class="category-blog"><a href="{{ route('showSingleProgram',$event) }}">{{ ucfirst($event->category) }}</a></span>
                </div>
                <div class="item-info blog-info">
                  <div class="entry-blog">
                    <div class="mb-4">
                      <span class="bypost"><a href="{{ route('showSingleProgram',$event) }}"><i class="fas fa-user"></i> {{ $event->organizer }}</a></span>
                    </div>
                    <div>
                      <span class="posted-on">
                        <a href="{{ route('showSingleProgram',$event) }}"><i class="fas fa-clock"></i> {{ date('D, d M Y', strtotime($event->date)).", ".date('h:i A', strtotime($event->time)) }} </a>
                      </span>
                    </div>
                  </div>
                  <h4><a href="{{ route('showSingleProgram',$event) }}">{{ $event->title }}</a></h4>
                  <p style="text-align: justify">{{ substr($event->short_description, 0, 35 )."..." }}</p>
                </div>
              </div>
            </div>
            @php
              $count += 2
            @endphp
          @endforeach
        </div>
        <div style="text-align: center">
          <a href="/programs" class="btn-main bg-btn lnk wow fadeInUp mb-auto" data-wow-delay=".6s">Find Out More Programs! <i class="fas fa-chevron-right fa-icon"></i><span class="circle"></span></a>
        </div>
      @endif
      
      
    
    </div>
    </section>
    <!--End blog-->
    @endsection