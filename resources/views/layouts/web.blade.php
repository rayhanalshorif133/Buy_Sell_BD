<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
        href="https://fonts.googleapis.com/css?family=Hind+Siliguri:300,400,500,600,700|Source+Sans+Pro:300,400,500,600,700|Roboto:300,400,500,700,900&amp;display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Noto+Sans+Bengali:wght@100;200;300;400;500;600;700;800;900&family=Noto+Sans:ital,wght@1,600&display=swap"
        rel="stylesheet">
    <title>Buy Sell Bd</title>
    <meta name="title" content="Buy Sell Bd">
    <meta name="description"
        content="Develop your professional skills through CIT We provide Graphic Design, Digital Marketing, Web Design Development, 3d Animation, etc Call 880 1624 666 000">

    <link rel="icon" href="{{asset('web/assets/images/icons/icon.png')}}" type="image/png"
        alt="Creative IT Institute | Favicon">
    <link rel="apple-touch-icon" sizes="48x48" href="{{asset('web/assets/images/icons/icon.png')}}"
        alt="Creative IT Institute | Icon 1">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"/>
    <script src="https://unpkg.com/typewriter-effect@latest/dist/core.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    {{-- Date picker --}}
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />

    <link rel="stylesheet" href="{{asset('web/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('web/assets/css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('web/assets/css/venobox.min.css')}}">
    <link rel="stylesheet" href="{{asset('web/assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('web/assets/css/responsive.css')}}">
    <link rel="stylesheet" href="{{asset('web/assets/css/custom.css')}}">
    <link rel="stylesheet" href="{{asset('web/assets/css/dark-mode.css')}}">

    {{-- owl.carousel --}}
    <link rel="stylesheet" href="{{asset('web/assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('web/assets/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('web/assets/css/import.all.css')}}">

    <link rel="stylesheet" href="{{asset('web/assets/js/custom.js')}}">
    <link rel="stylesheet" href="{{asset('web/assets/js/CookieManager.js')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <!-- Facebook Pixel Code -->

    <noscript>
        <img height="1" width="1" src="https://www.facebook.com/tr?id=1417475092076653&ev=PageView&noscript=1" />
    </noscript>
    <!-- End Facebook Pixel Code -->

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-93245109-2"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>

    @yield('head')
    <script>
        window.dataLayer = window.dataLayer || [];

      function gtag() {
         dataLayer.push(arguments);
      }
      gtag('js', new Date());

      gtag('config', 'UA-93245109-2');
    </script>
    <link rel="stylesheet" href="{{asset('web/assets/css/custom_another.css')}}">
</head>

<body>
    @include('layouts._partials.web.header')
    <main>
        @yield('content')
    </main>
    @include('layouts._partials.web.footer')


    <div class="back_to_top">
        <a href="#"><i class="fa fa-angle-up"></i></a>
    </div>
    <script src="{{asset('web/assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('web/assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('web/assets/js/slick.min.js')}}"></script>
    <script src="{{asset('web/assets/js/waypoints.min.js')}}"></script>
    <script src="{{asset('web/assets/js/venobox.min.js')}}"></script>
    <script src="{{asset('web/assets/js/script.js')}}"></script>

    @stack('scripts')
</body>

</html>
