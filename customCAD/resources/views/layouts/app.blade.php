<!DOCTYPE html>
<html lang="en" class="no-js">
    <head>
        <meta charset="utf-8"/>
        <meta name="description" content="Creative Art & Design Club UTMKL is a club in UTMKL that promotes the art skills of UTMKL Students.">
        <meta name="keywords" content="Creative Art & Design Club, CADUTMKL">
        <meta name="author" content="Tan Kuan Hoong">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="theme-color" content="#ffd6d6">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- App Name -->
        <title>{{ config('app.name', 'Laravel') }}</title>
        <!--website-favicon-->
        <link href="{{ asset('images/cadLogoNoText.png') }}" rel="icon">
        <!--plugin-css-->
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/plugin.min.css') }}" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
        <!-- template-style-->
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        <link href="{{ asset('css/responsive.css') }}" rel="stylesheet">
        <link href="{{ asset('css/profile-form.css') }}" rel="stylesheet">

    </head>
    
    <body>
    
        <!--Start Preloader -->
        <div class="onloadpage" id="page_loader">
            <div class="pre-content">
                <div class="logo-pre"><img src="{{ asset('images/cadLogoNoText.png') }}" alt="cadLogo" class="img-fluid" /></div>
                <div class="pre-text-"><span>CADUTMKL is loading...</span>Have Patience</div>
            </div>
        </div>
        <!--End Preloader -->

            <!--Start Header -->
            <header class="top-header">
                @include('inc.navbar')
            </header>
            <!--End Header -->
            
            @yield('content')

            <footer>
                @include('inc.footer')
            </footer>




    <!-- js placed at the end of the document so the pages load faster -->
    <script src="{{ asset('js/vendor/modernizr-3.5.0.min.js') }}"></script> 
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script> 
    <script src="{{ asset('js/plugin.min.js') }}"></script>
    <script src="{{ asset('js/preloader.js') }}"></script>
    <!--common script file-->
    <script src="{{ asset('js/main.js') }}"></script>
    <!-- Scripts -->
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
</body>
    
    
</html>
