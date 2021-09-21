@extends('layouts.app')

@section('title')
<title>About</title>
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
                <h2>Creative Art & Design Club</h2>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--End Breadcrumb Area-->
  <!--Start About-->
  <section class="about-agency pad-tb block-1">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 v-center">
          <div class="about-image">
            <img src="{{ asset('images/cadLogoNoText.png') }}" alt="cadLogo" width="70%" class="img-fluid"/>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="common-heading text-l ">
            <span>About Us</span>
            <h2>About CADUTMKL</h2>
            <p>"Greetings and Welcome to the Creative Art & Design,</p>
            <p>A club created for the purpose of spreading the talents of young artists
              and cultivating the budding talents of students of UTMKL.
            </p>
            <p>For this purpose, our club will host various art challenges and contests.
              as well as workshops of varying fields of art.
            </p>
            <p>As a new club, we will only be able to host the various activities at a small scale. 
              However, as we begin to grow, we will gradually be able to host bigger scale activities!
            </p>
            <p>Therefore, do help us in growing this club even further! "</p>
            <h5 style="margin-top:60px;text-align: justify;text-justify: inter-word;">- Board of Creative Art & Design Club UTMKL</h5>
          </div>
          <div class="row in-stats small about-statistics">
            <div class="col-lg-4 col-sm-4">
              <div class="statistics">
                <div class="statnumb counter-number">
                  <span class="counter">0</span>
                  <p>Completed Programs</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-sm-4">
              <div class="statistics">
                <div class="statnumb">
                  <span class="counter">500</span>
                  <p>Members</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-sm-4">
              <div class="statistics mb0">
                <div class="statnumb counter-number">
                  <span class="counter">1</span>
                  <p>Years</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--End About-->
  <!--Start Mission-->
  <section class="service pad-tb">
    <div class="container">
    <div class="row">
    <div class="col-lg-8 block-1">
    <div class="common-heading text-l pr25">
    <span>Mission</span>
    <h2>Our Mission</h2>
    <ul class="list-ul ul-circle">
      <li>Continuously promote Art category in Universiti Teknologi Malaysia Kuala Lumpur</li>
      <li>To exploit potentialities on students' creativity</li>
      <li>Cultivating the budding talents of UTMKL students</li>
      <li>Creating programs for UTMKL students to take part in and students literally enjoy in our programs</li>
    </ul>
    
    </div>
    </div>
    <div class="col-lg-4">
    <div class="image-block upset bg-shape m-mt30 mb0">
      <img style="width:420px;height:420px;object-fit:cover;"src="images/about/cube-pict.jpg" alt="image" class="img-fluid"/>
    </div>
    </div>
    </div>
    </div>
    </section>
  <!--End Mission-->
  <!--Start Vision-->
  <section class="service pad-tb">
    <div class="container">
    <div class="row">
    <div class="col-lg-4">
    <div class="image-block upset bg-shape">
    <img style="width:420px;height:420px;object-fit:cover;" src="images/about/vision-pict.jpg" alt="image" class="img-fluid"/>
    </div>
    </div>
    <div class="col-lg-8 block-1">
    <div class="common-heading text-l pl25">
    <span>Vision</span>
    <h2>Our Vision</h2>
    <ul class="list-ul ul-circle">
      <li>Making art a routine in UTMKL</li>
      <li>Becoming the most popular Art club in UTMKL</li>
      <li>Exploring talents in UTMKL</li>
      <li>Creating exhilarating programs for students to have different experience</li>
    </ul>
    
    </div>
    </div>
    </div>
    </div>
    </section>
  <!--End Vision-->
@endsection