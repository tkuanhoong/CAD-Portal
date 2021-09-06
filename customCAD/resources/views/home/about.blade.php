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
            <p>...<br>...<br>...<br>...<br>...<br>...<br>...</p>
            <p>...<br>...<br>...<br>...<br>...<br>...</p>
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
    <p>...<br>...<br>...<br>...<br>...<br>...<br>...</p>
    
    </div>
    </div>
    <div class="col-lg-4">
    <div class="image-block upset bg-shape m-mt30 mb0">
    <img src="images/about/vision.jpg" alt="image" class="img-fluid"/>
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
    <img src="images/about/mission.jpg" alt="image" class="img-fluid"/>
    </div>
    </div>
    <div class="col-lg-8 block-1">
    <div class="common-heading text-l pl25">
    <span>Vision</span>
    <h2>Our Vision</h2>
    <p>...<br>...<br>...<br>...<br>...<br>...<br>...</p>
    
    </div>
    </div>
    </div>
    </div>
    </section>
  <!--End Vision-->
@endsection