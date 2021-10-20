<!doctype html>
<html lang="en">

    <head>
    
        <meta charset="utf-8">
        @yield('title')
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description">
        <meta content="Themesbrand" name="author">
        <!--website-favicon-->
        <link href="{{ asset('images/cadLogoNoText.png') }}" rel="icon">
    
        <link href="{{asset('admin/libs/chartist/chartist.min.css')}}" rel="stylesheet">
    
        <!-- Bootstrap Css -->
        <link href="{{asset('admin/css/bootstrap.min.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css">
        <!-- Icons Css -->
        <link href="{{asset('admin/css/icons.min.css')}}" rel="stylesheet" type="text/css">
        <!-- App Css-->
        <link href="{{asset('admin/css/app.min.css')}}" id="app-style" rel="stylesheet" type="text/css">
    
    </head>

    <body data-sidebar="dark">

        

        <!-- Begin page -->
        <div id="layout-wrapper">

            
            @include('inc.admin.navbar')

            

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        @yield('content')

                        
                        

                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->


                
                @include('inc.admin.footer')

            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

                <!-- JAVASCRIPT -->
                <script src="{{asset('admin/libs/jquery/jquery.min.js')}}"></script>
                <script src="{{asset('admin/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
                <script src="{{asset('admin/libs/metismenu/metisMenu.min.js')}}"></script>
                <script src="{{asset('admin/libs/simplebar/simplebar.min.js')}}"></script>
                <script src="{{asset('admin/libs/node-waves/waves.min.js')}}"></script>


        <!-- Peity chart-->
        <script src="{{asset('admin/libs/peity/jquery.peity.min.js')}}"></script>

        <!-- Plugin Js-->
        <script src="{{asset('admin/libs/chartist/chartist.min.js')}}"></script>
        <script src="{{asset('admin/libs/chartist-plugin-tooltips/chartist-plugin-tooltip.min.js')}}"></script>

        <script src="{{asset('admin/js/pages/dashboard.init.js')}}"></script>

        <script src="{{asset('admin/js/app.js')}}"></script>
        <script type="text/javascript">
                document.getElementById('selectAll').onclick = function() {
                var checkboxes = document.getElementsByClassName('checkboxes');
                for (var checkbox of checkboxes) {
                    checkbox.checked = this.checked;
                }
                }
            
                function submitVerifyAllForm(){
                    event.preventDefault();
                    var result = confirm('Are you sure to verify the selected user?');
                    if(result){
                        document.getElementById('verifyAllForm').submit();
            
                    }
                }
        </script>

    </body>

</html>