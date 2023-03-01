<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @php
    $headerAndFooter = App\Models\HeaderAndFooter::first();
    $headerFavicon = $headerAndFooter ? $headerAndFooter->favicon : asset('dist/images/favicon.png');
    $headerTitle = $headerAndFooter ? $headerAndFooter->project_title : env('APP_NAME');
    @endphp
    <title>Buy Sell BD</title>
    <link rel="icon" href="{{$headerFavicon}}" type="image/*">

    <!-- Scripts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900" />
    <link rel="stylesheet" href="{{ asset('dist/fonts/icomoon/style.css')}}" />
    <link rel="stylesheet" href="{{ asset('dist/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('dist/css/owl.carousel.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('dist/css/owl.theme.default.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('dist/css/jquery-ui.css')}}" />
    <link rel="stylesheet" href="{{ asset('dist/css/aos.css')}}" />
    <link rel="stylesheet" href="{{ asset('dist/css/jquery.fancybox.min.css')}}" />
    <link rel="stylesheet"
        href="https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/icomoon@1.0.0/style.min.css" rel="stylesheet" />
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <link rel="stylesheet" href="{{ asset('dist/css/style.css')}}" />
    <script src="{{ asset('dist/js/script.js')}}"></script>
    <script src="{{ asset('dist/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{ asset('dist/js/jquery-ui.js')}}"></script>
    <link rel="stylesheet" href="{{ asset('css/web/home.css')}}" />
    @yield('head')
</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
    <div id="overlayer"></div>
    <div class="loader">
        <div class="spinner-border text-primary" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <div class="container" style="overflow-x: hidden;">
        @yield('content')
    </div>

    @stack('scripts')
    <script src="{{ asset('dist/js/popper.min.js')}}"></script>
    <script src="{{ asset('dist/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('dist/js/owl.carousel.min.js')}}"></script>
    <script src="{{ asset('dist/js/jquery.countdown.min.js')}}"></script>
    <script src="{{ asset('dist/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{ asset('dist/js/bootstrap-datepicker.min.js')}}"></script>
    <script src="{{ asset('dist/js/aos.js')}}"></script>
    <script src="{{ asset('dist/js/jquery.sticky.js')}}"></script>
    <script src="{{ asset('dist/js/jquery.easing.1.3.js')}}"></script>
    <script src="{{ asset('dist/js/jquery.fancybox.min.js')}}"></script>
    <script src="{{ asset('dist/js/main.js')}}"></script>

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
      function gtag() {
        dataLayer.push(arguments);
      }
      gtag("js", new Date());

      gtag("config", "UA-23581568-13");
    //   console.clear();
    </script>

</body>

</html>
