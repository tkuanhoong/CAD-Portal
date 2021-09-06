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
                <img src="{{ asset('images/userLogo.png') }}" alt="userLogo" width="35"/>
            </a>
            <div class="dropdown-menu animate slideIn" aria-labelledby="user">
              
              <a class="dropdown-item" href="{{ route('login') }}">{{ __('Login') }}</a><hr>
              <a class="dropdown-item" href="{{ route('register') }}">{{ __('Register') }}</a>
              @else
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="user" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img src="{{ asset('images/userLogo.png') }}" alt="userLogo" width="35"/>
                    {{ Auth::user()->name }}
                </a>
                <div class="dropdown-menu animate slideIn" style="width:100%" aria-labelledby="user">
                  <a class="dropdown-item" href="#">{{ __('Edit Profile') }}</a>
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
  <li><a href="#"><img src="{{ asset('images/userLogo.png') }}" alt="userLogo" width="35"/></a>
    <ul>
      <li><a href="{{ route('login') }}">Login</a></li>
      <li><a href="{{ route('register') }}">Register</a></li>
    </ul>
  </li>
  @else
  <li>
    <a href="#"><img src="{{ asset('images/userLogo.png') }}" alt="userLogo" width="35"/>
    {{ Auth::user()->name }}
    </a>
    <ul>
      <li><a href="#">{{ __('Edit Profile') }}</a></li>
      <li><a href="{{ route('logout') }}"
      onclick="event.preventDefault();
      document.getElementById('logout-form').submit();">{{ __('Logout') }}</a></li>
    </ul>
  </li>
  
  @endguest
</ul>
</nav>