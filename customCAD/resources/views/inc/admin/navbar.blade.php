<header id="page-topbar">
    <div class="navbar-header">
        <div class="d-flex">
            <!-- LOGO -->
            <div class="navbar-brand-box" style="background-color: whitesmoke;">

                <a href="{{ route('admin.index') }}" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="{{asset('images/cadLogoNoText.png')}}" alt="" height="40">
                    </span>
                    <span class="logo-lg">
                        <img src="{{asset('images/cadLogo.png')}}" alt="" height="25">
                    </span>
                </a>
            </div>

            <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect" id="vertical-menu-btn">
                <i class="mdi mdi-menu"></i>
            </button>
        </div>

        <div class="d-flex">

            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="rounded-circle header-profile-user" src="{{ auth()->user()->avatar == "userLogo.png" ? Storage::disk('s3')->url('avatar_images/'.auth()->user()->avatar) : Storage::disk('s3')->url('avatar_images/'.auth()->user()->id.'/'.auth()->user()->avatar)}}"
                        alt="Header Avatar">
                        {{ auth()->user()->name }}
                    
                </button>
                <div class="dropdown-menu dropdown-menu-end">
                    <!-- item-->
                    <a class="dropdown-item d-flex align-items-center" href="{{ route('admin.profile') }}"><i class="mdi mdi-account-circle font-size-17 align-middle me-1"></i> My Profile</a>
                    <a class="dropdown-item d-flex align-items-center" href="{{ route('admin.change-password') }}"><i class="mdi mdi-lock font-size-17 align-middle me-1"></i> Change Password</a>
                    <a class="dropdown-item d-flex align-items-center" href="{{ route('home') }}"><i class="mdi mdi-exit-run font-size-17 align-middle me-1"></i> Go to Main Page</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item text-danger" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();"><i class="bx bx-power-off font-size-17 align-middle me-1 text-danger"></i> Logout</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </div>


        </div>
    </div>
</header>

<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu" class="mm-active">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Main</li>

                <li>
                    <a href="{{ route('admin.index') }}" class="waves-effect">
                        <i class="ti-home"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('admin.events.index') }}" class=" waves-effect">
                        <i class="ti-calendar"></i>
                        <span>Events</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('admin.users.index') }}" class="waves-effect">
                        <i class="ti-user"></i>
                        <span>Members</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('admin.contacts.index') }}" class="waves-effect">
                        <i class="ti-bell"></i>
                        <span>Contacts</span>
                    </a>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect" aria-expanded="false">
                        <i class="ti-pencil-alt"></i>
                        <span>Edit Pages</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true" style="height: 0px;">
                        <li><a href="{{ route('admin.home.edit',App\Home::first()) }}" >Home Page</a></li>
                        <li><a href="{{ route('admin.AboutPage.edit',App\AboutPage::first()) }}" >About Page</a></li>
                        <li><a href="javascript: void(0);" class="has-arrow">Organization Page</a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li><a href="{{ route('admin.Organization.edit',App\Organization::first()) }}">Edit Organization Name</a></li>
                                <li><a href="{{ route('admin.Tops.index') }}">Edit Top Members</a></li>
                            </ul>
                        </li>
                        <li><a href="{{ route('admin.ContactPage.edit',App\ContactPage::first()) }}" >Contact Page</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->