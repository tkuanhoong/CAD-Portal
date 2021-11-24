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
                <h2>Our Programs</h2>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--End Breadcrumb Area-->

<!--Start Programs-->
<!--
<section class="blogs-section pb80 pt80">
    <div class="container-fluid">
    <div class="row justify-content-center">
    <div class="col-lg-8">
    <div class="common-heading-2">
        <span class="text-effect-2">what's going on</span>
        <h2 class="mb30">Latest Stories</h2>
    </div>
    </div>
    </div>
    <div class="post-newsltr owl-carousel mt30">
    <div class="div-blog-">
        <div class="br-blog-post-">
            <div class="single-blog-img-">
                <img src="images/blog/br-blog1.jpg" alt="title" class="img-fluid"/>
            </div>
            <div class="link-blog-post">
                <a href="#">Read More</a>
            </div>
        </div>
        <div class="blog-content-xx mt40">
            <div class="single-blog-info-">
                <h4><a href="#">20 stunning web design ideas that will get everyone clicking ...</a></h4>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
            </div>
        </div>
    </div>
    <div class="div-blog-">
        <div class="br-blog-post-">
            <div class="single-blog-img-">
                <img src="images/blog/br-blog1.jpg" alt="title" class="img-fluid"/>
            </div>
            <div class="link-blog-post">
                <a href="#">Read More</a>
            </div>
        </div>
        <div class="blog-content-xx mt40">
            <div class="single-blog-info-">
                <h4><a href="#">10 stunning web design ideas that will get everyone clicking ...</a></h4>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
            </div>
        </div>
    </div>
    <div class="div-blog-">
    <div class="br-blog-post-">
        <div class="single-blog-img-">
            <img src="images/blog/br-blog2.jpg" alt="title" class="img-fluid"/>
        </div>
        <div class="link-blog-post">
            <a href="#">Read More</a>
        </div>
    </div>
    <div class="blog-content-xx mt40">
        <div class="single-blog-info-">
            <h4><a href="#">Ten ways to develop your website to help your business grow ...</a></h4>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
        </div>
    </div>
    </div>
    </div>
    </div>
    </section>-->

<section class="blog-home pad-tb">
    <div class="container">

        @if(count($events) == 0)
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="common-heading wow fadeInUp" data-wow-delay=".2s">
                        <lottie-player class="mb-4" src="https://assets2.lottiefiles.com/packages/lf20_AQcLsD.json"  background="transparent"  speed="1"  style="margin: 0 auto; width: 200px; height: 200px;"  loop autoplay></lottie-player>
                        <h2 class="mb30">No Program Available</h2>
                    </div>
                </div>
            </div>
        @else
        <div class="row">
            @foreach ($events as $event)
                    <div class="col-lg-4 col-sm-6 single-card-item {{ $event->category }}">
                        <div class="isotope_item hover-scale btshad-b1">
                            <div class="item-image">
                                <a href="{{ route('showSingleProgram',$event) }}"><img src="{{ $event->banner ==  'NoImage.png' ? Storage::disk('s3')->url('event_images/'.$event->banner) : Storage::disk('s3')->url('event_images/'.$event->id.'/'.$event->banner) }}" alt="image" class="img-fluid"/> </a>
                                <span class="category-blog"><a href="{{ route('showSingleProgram',$event) }}">{{ ucfirst($event->category) }}</a>
                            </div>
                            <div class="item-info blog-info">
                                <div class="entry-blog">
                                    <div class="mb-4">
                                        <span class="bypost"><a href="{{ route('showSingleProgram',$event) }}"><i class="fas fa-user"></i> {{ $event->organizer }}</a></span>
                                    </div>
                                    <div>
                                        <span class="posted-on">
                                            <a href="{{ route('showSingleProgram',$event) }}"><i class="fas fa-clock"></i> {{ date('D, d M Y', strtotime($event->date)).", ".date('h:i A', strtotime($event->time)) }}</a>
                                        </span>
                                    </div>
                                </div>
                                <h4 class="clamp-2"><a href="{{ route('showSingleProgram',$event) }}">{{ $event->title }}</a></h4>
                                <p class="clamp-2">{{ $event->short_description }}</p>
                            </div>
                        </div>
                    </div>
            @endforeach
        </div>
        @endif

    </div>

    <div class="d-flex justify-content-center mt-4">
        {{ $events->links() }}
    </div>

</section>

@endsection