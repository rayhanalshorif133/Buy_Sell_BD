<div class="site-mobile-menu site-navbar-target">
    <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
        </div>
    </div>
    <div class="site-mobile-menu-body"></div>
</div>
<div class="site-navbar-wrap">
    <div class="site-navbar-top">
        <div class="container py-3">
            <div class="row align-items-center">
                <div class="col-6">
                    @if($headerAndFooter)
                    <a href="{{$headerAndFooter->twitter}}" target="_blank" class="p-2 pl-0"><i
                            class="fa-brands fa-twitter"></i></a>
                    <a href="{{$headerAndFooter->facebook}}" target="_blank" class="p-2 pl-0"><i
                            class="fa-brands fa-facebook-f"></i></a>
                    <a href="{{$headerAndFooter->linkedin}}" target="_blank" class="p-2 pl-0"><i
                            class="fa-brands fa-linkedin-in"></i></a>
                    <a href="{{$headerAndFooter->instagram}}" target="_blank" class="p-2 pl-0"><i
                            class="fa-brands fa-instagram"></i></a>
                    @else
                    <a href="#" class="p-2 pl-0"><i class="fa-brands fa-twitter"></i></a>
                    <a href="#" class="p-2 pl-0"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="p-2 pl-0"><i class="fa-brands fa-linkedin-in"></i></a>
                    <a href="#" class="p-2 pl-0"><i class="fa-brands fa-instagram"></i></a>
                    @endif
                </div>
                <div class="col-6">
                    <div class="d-flex ml-auto">
                        <a href="#" class="d-flex align-items-center ml-auto mr-4">
                            <span class="mr-2"><i class="fa-solid fa-envelope"></i></span>
                            <span class="d-none d-md-inline-block"><span class="__cf_email__">
                                    @if($headerAndFooter)
                                    {{$headerAndFooter->email}}
                                    @else
                                    Not Set
                                    @endif
                                </span>
                        </a>
                        <a href="#" class="d-flex align-items-center">
                            <span class="mr-2">
                                <i class="fa-solid fa-phone"></i>
                            </span>
                            <span class="d-none d-md-inline-block">
                                @if($headerAndFooter)
                                {{$headerAndFooter->phone}}
                                @else
                                Not Set
                                @endif
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="site-navbar site-navbar-target js-sticky-header">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-2">
                    <h1 class="my-0 site-logo">
                        <a href="/">
                            <div class="siteLogoImageBox">
                                @if($headerAndFooter->site_logo)
                                <img src="{{$headerAndFooter->site_logo}}" alt="site logo">
                                @else
                                <img src="{{asset('images/logo.png')}}" alt="site logo">
                                @endif
                            </div>
                        </a>
                    </h1>
                </div>
                <div class="col-10">
                    <nav class="site-navigation text-right" role="navigation">
                        <div class="container">
                            <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3">
                                <a href="#" class="site-menu-toggle js-menu-toggle text-white">
                                    <i class="fa-solid fa-bars"></i>
                                </a>
                            </div>
                            <ul class="site-menu main-menu js-clone-nav d-none d-lg-block">
                                <li>
                                    <a href="www.gmail.com" class="nav-link">
                                        @if($headerAndFooter)
                                        {{$headerAndFooter->email}}
                                        @else
                                        Not Set
                                        @endif
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="nav-link">
                                        @if($headerAndFooter)
                                        {{$headerAndFooter->phone}}
                                        @else
                                        Not Set
                                        @endif
                                    </a>
                                    <hr>
                                </li>
                                <li>
                                    <a href="#home-section" class="nav-link">Home</a>
                                </li>
                                <li>
                                    <a href="#service" class="nav-link">Service</a>
                                </li>
                                <li>
                                    <a href="#about" class="nav-link">About Us</a>
                                </li>
                                <li>
                                    <a href="#contact" class="nav-link">Contact</a>
                                </li>
                                <li>
                                    <i class="nav-link sunAndMoonIcon fa-regular fa-sun"></i>
                                </li>
                                <li>
                                    <i class="nav-link sunAndMoonIcon fa-solid fa-moon"></i>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).on("click",'.site-nav-wrap li a', function () {
        let isOffcanvasMenu = $("body").hasClass("offcanvas-menu");
        if(isOffcanvasMenu){
            $("body").removeClass("offcanvas-menu");
        }
    });
</script>
