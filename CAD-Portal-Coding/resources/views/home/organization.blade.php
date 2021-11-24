@extends('layouts.app')

@section('title')
<title>Organization</title>
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
                <h2>Organization</h2>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--End Breadcrumb Area-->
  <!--Start Team Details-->
  <section class="team pad-tb deep-dark">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-5 col-md-5">
          <div class="image-block upset bg-shape">
            <div class="image-div founder"><img src="{{ Storage::disk('s3')->url('org_images/'.$founder->id.'/'.$founder->image) }}" alt="team" class="img-fluid"/></div>
          </div>
        </div>
        <div class="col-lg-6 col-md-6">
          <div class="full-image-card mt0">
            <div class="info-text-block">
              <h4>{{ $founder->name }}</a></h4>
              <p>{{ $founder->position }}</p>
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--End Team Details-->
  <!--Start Team Leaders-->
  <section class="team bg-gradient99 pad-tb">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="common-heading ptag">
            <!--<span>We Are Awesome</span>-->
            <h2>{{ $Organization->name }} </h2>
            <!--<p class="mb0">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>-->
          </div>
        </div>
      </div>
      <div class="row justify-content-center">
        
        <div class="col-lg-4 col-sm-6">
          <div class="full-image-card hover-scale">
            <div class="image-div president"><img src="{{ Storage::disk('s3')->url('org_images/'.$president->id.'/'.$president->image) }}" alt="team" class="img-fluid"/></div>
            <div class="info-text-block">
              <h4>{{ $president->name }}</h4>
              <p>{{ $president->position }}</p>
            </div>
          </div>
        </div>
        
      </div>
    </div>
  </section>
  <!--End Team Leaders-->
  <!--Start Team Members-->
  <section class="team pad-tb deep-dark">
    <div class="container">
      <div class="row">
        @foreach ($tops as $top)
        <div class="col-lg-3 col-sm-6">
          <div class="full-image-card hover-scale">
            <div class="image-div"><img src="{{ Storage::disk('s3')->url('org_images/'.$top->id.'/'.$top->image) }}" alt="team" class="img-fluid"/></div>
            <div class="info-text-block">
              <h4>{{ $top->name }}</h4>
              <p>{{ $top->position }}</p>
            </div>
          </div>
        </div>
        @endforeach
    </div>
  </section>
  <!--End Team Members-->
@endsection