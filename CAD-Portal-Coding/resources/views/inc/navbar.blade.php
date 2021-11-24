    <nav class="navbar navbar-expand-lg navbar-light justify-content-right navbar-mobile fixed-top navfix">
      <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}"> <img src="{{ asset('images/cadLogo.png') }}" alt="cadLogo" width="220" />&nbsp;&nbsp;<b></b></a>
        <button class="navbar-toggler mobile-none" type="button" data-toggle="collapse" data-target="#navbar4" aria-controls="navbar4" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse animate slideIn mobile-none" id="navbar4">
        <ul class="mr-auto"></ul>
        <ul class="navbar-nav d-menu">
          <li class="nav-item"> <a class="nav-link" href="{{ route('home') }}">Home </a> </li>
          <li class="nav-item"> <a class="nav-link" href="/about">About </a> </li>
          <li class="nav-item"> <a class="nav-link" href="/programs">Programs </a> </li>
          <li class="nav-item"> <a class="nav-link" href="/organization">Organization </a> </li>
          <li class="nav-item"> <a class="nav-link" href="/contact">Contact </a> </li>
          @guest
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="user" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <img style="vertical-align: middle;width: 35px;height: 35px;border-radius: 50%;" src="{{ asset('images/userLogo.png') }}" alt="userLogo" width="35"/>
            </a>
            <div class="dropdown-menu animate slideIn" aria-labelledby="user">
              
              <a class="dropdown-item" href="{{ route('login') }}">{{ __('Login') }}</a><hr>
              <a class="dropdown-item" href="{{ route('register') }}">{{ __('Register') }}</a>
              @else
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="user" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img style="vertical-align: middle;width: 35px;height: 35px;border-radius: 50%;object-fit:cover;" src="{{ auth()->user()->avatar == "userLogo.png" ? Storage::disk('s3')->url('avatar_images/'.auth()->user()->avatar) : Storage::disk('s3')->url('avatar_images/'.auth()->user()->id.'/'.auth()->user()->avatar)}}" alt="userLogo" width="35"/>
                    {{ Auth::user()->name }}
                </a>
                <div class="dropdown-menu animate slideIn" style="width:100%" aria-labelledby="user">
                  @can('admin-panel')
                  <a class="dropdown-item" href="{{ route('admin.index') }}">{{ __('Admin Dashboard') }}</a>
                  <hr>
                  @endcan
                  <a class="dropdown-item" href="{{ route('profile.edit', auth()->user()->id) }}">{{ __('My Profile') }}</a>
                  <hr>
                  <a class="dropdown-item" href="{{ route('eventHistory', auth()->user()) }}">{{ __('Program History') }}</a>
                  <hr>
                  <a class="dropdown-item" href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">
                  {{ __('Logout') }}</a>
                  
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                  </form>
                </div>
              </li>
              @endguest
            </ul>
          </div>
          
        
      <div class="mobile-menu">
        <ul class="mob-nav">
          <li class="ml8"><a class="toggle mobilemenu" href="#"><span></span></a> </li>
        </ul>
      </div>
    </div>
  </nav>
  <!--Mobile Menu-->
  <!--Mobile Menu-->
<nav id="main-nav">
<ul class="first-nav">
  <li><a href="{{ route('home') }}">Home</a></li>
  <li><a href="./about">About</a></li>
  <li><a href="./programs">Programs</a></li>
  <li><a href="./organization">Organization</a></li>
  <li><a href="./contact">Contact</a> </li>
  @guest
  <li><a href="#"><img style="vertical-align: middle;width: 35px;height: 35px;border-radius: 50%;" src="{{ asset('images/userLogo.png') }}" alt="userLogo" width="35"/></a>
    <ul>
      <li><a href="{{ route('login') }}">Login</a></li>
      <li><a href="{{ route('register') }}">Register</a></li>
    </ul>
  </li>
  @else
  <li>
    <a href="#"><img style="vertical-align: middle;width: 35px;height: 35px;border-radius: 50%;object-fit:cover;" src="{{ auth()->user()->avatar == "userLogo.png" ? Storage::disk('s3')->url('avatar_images/'.auth()->user()->avatar) : Storage::disk('s3')->url('avatar_images/'.auth()->user()->id.'/'.auth()->user()->avatar)}}" alt="userLogo" width="35"/>
    {{ Auth::user()->name }}
    </a>
    <ul>
      @can('admin-panel')
      <li><a href="{{ route('admin.index') }}">Admin Dashboard</a></li>
      @endcan
      <li><a href="{{ route('profile.edit',auth()->user()->id) }}">My Profile</a></li>
      <li><a href="{{ route('eventHistory',auth()->user()) }}">Program History</a></li>
      <li><a href="{{ route('logout') }}"
      onclick="event.preventDefault();
      document.getElementById('logout-form').submit();">{{ __('Logout') }}</a></li>
    </ul>
  </li>
  
  @endguest
</ul>
</nav>