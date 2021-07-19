<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('src/assets/images/favicon.png') }}">
    <title>Iniciar Sesion</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/monsteradmin/" />
    <link href="{{ asset('dist/css/style.min.css') }}" rel="stylesheet">
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body style="max-height: 100%">
    {{-- <div class="main-wrapper"> --}}
        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        {{-- <div class="preloader">
            <div class="lds-ripple">
                <div class="lds-pos"></div>
                <div class="lds-pos"></div>
            </div>
        </div> --}}
        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        {{-- <div class="auth-wrapper d-flex no-block justify-content-center align-items-center"
            style="background:url({{ asset('src/assets/images/background/space.jpg') }}); background-size: cover; background-position: center center;">
            <div class="auth-box p-4 bg-white rounded">
                @yield('content')
            </div>

        </div> --}}
        {{-- <div class="auth-wrapper d-flex no-block justify-content-center align-items-center" style="background-image: radial-gradient(circle, #1C3044, #142136 black);" >
            <div class="auth-box p-4 bg-white rounded">
                @yield('content')
            </div>

        </div> --}}
        
        
        {{-- <div class="auth-wrapper d-flex no-block justify-content-center align-items-center" style="background-image: radial-gradient(circle, #1C3044 5%, #142136 40%, #040D11 95%);" > --}}
        <div class="auth-wrapper d-flex no-block justify-content-center align-items-center" style="background-image: radial-gradient(circle, #1C3044 5%, #142136 40%, #040D11 95%);" >
            {{-- <div class="auth-box p-4 rounded"> --}}
                {{-- @include('layouts.partials.header') --}}
            {{-- </div> --}}
            

            <div class="auth-box p-4 bg-white rounded">
                

                @yield('content')

                {{-- @include('layouts.partials.footer') --}}
            </div>

        </div>

        {{-- <div class="container">
            <div class="row">
                <div class="col-md-4 col-lg-12"><header>
                    <img src="{{ asset('src/assets/images/escudo_new.png') }}" class="light-logo" alt="homepage" width="250" height="250" />
                </header></div>
                <div class="col-md-4 col-lg-12">@yield('content')</div>
                <div class="col-md-4 col-lg-12">© 2021. Dirección General de Sistemas de GEstión de Información Fiscal. Todos los derechos reservados</div>
            </div>
        </div> --}}

        {{-- <div class="container">

            <header class="row">
                @include('layouts.partials.header')
            </header>
        
            <div id="main" class="row">
        
                    @yield('content')    </div>
        
            <footer class="row">
                @include('layouts.partials.footer')
            </footer>
        
        </div> --}}

    </div>

    
    
    <script src="{{ asset('src/assets/libs/jquery/dist/jquery.min.js') }}"></script>
        <!-- Bootstrap tether Core JavaScript -->
    <script src="{{ asset('src/assets/libs/popper.js/dist/umd/popper.min.js') }}"></script>
    <script src="{{ asset('src/assets/libs/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script>
        $('[data-toggle="tooltip"]').tooltip();
        $(".preloader").fadeOut();
        // ============================================================== 
        // Login and Recover Password 
        // ============================================================== 
        $('#to-recover').on("click", function() {
            $("#loginform").slideUp();
            $("#recoverform").fadeIn();
        });
    </script>
</body>

</html>