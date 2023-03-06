<header id="header">
    <section id="topbar">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="topbar_text">
                        <a data-sal="slide-left" data-sal-delay="200" data-sal-duration="800" data-sal-easing="ease"
                            href="tel:01923988380">
                            <span><img src="{{asset('web/assets/images/call.png')}}" alt="icon" /></span>
                            01923988380</a>
                        <a data-sal="slide-left" data-sal-delay="300" data-sal-duration="800" data-sal-easing="ease"
                            href="mailto:admin@gmail.com" class="sal-animate"><span>
                                <img src="{{asset('web/assets/images/top-mail.png')}}" alt="icon"></span>
                            admin@gmail.com</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <nav id="navbar" class="d-none d-lg-block  navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a href="/" data-sal="zoom-in" data-sal-delay="300" data-sal-duration="800" data-sal-easing="ease"
                class="navbar-brand sal-animate" style="margin: 0 -12px;">
                <img src="{{asset('web/assets/images/logo/light-mode.png')}}" class="light-mode-logo" style="max-height: 60px" alt="Logo">
                <img src="{{asset('web/assets/images/logo/dark-mode.png')}}" class="dark-mode-logo d-none" style="max-height: 60px" alt="Logo">
            </a>
            <div class="navbar-collapse collapse">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 main_menu navbar-nav">
                    <li class="nav-item sal-animate" data-sal="slide-right" data-sal-delay="300" data-sal-duration="800"
                        data-sal-easing="ease">
                        <a href="/" data-rr-ui-event-key="/" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item sal-animate" data-sal="slide-right" data-sal-delay="300" data-sal-duration="800"
                        data-sal-easing="ease">
                        <a href="#about" class="nav-link">About Us</a>
                    </li>
                    <li class="nav-item sal-animate" data-sal="slide-right" data-sal-delay="300" data-sal-duration="800"
                        data-sal-easing="ease">
                        <a href="#whatWeDo" class="nav-link">What We Do?</a>
                    </li>
                    <li class="nav-item sal-animate" data-sal="slide-right" data-sal-delay="300" data-sal-duration="800"
                        data-sal-easing="ease">
                        <a href="#riz_event" class="nav-link">RIZ Event</a>
                    </li>
                    <li class="nav-item sal-animate" data-sal="slide-right" data-sal-delay="300" data-sal-duration="800"
                        data-sal-easing="ease">
                        <a href="#service" data-rr-ui-event-key="service" class="nav-link">Service</a>
                    </li>
                    <li class="nav-item sal-animate" data-sal="slide-right" data-sal-delay="300" data-sal-duration="800"
                        data-sal-easing="ease">
                        <a href="#contactUs" data-rr-ui-event-key="contactUs" class="nav-link">Contact Us</a>
                    </li>
                    <div class="navbar_btn nav-item">
                        <span class="sal-animate dark-mode btn btn-sm btn-buy-sell">
                            <i class="fa-solid fa-moon"></i>
                            <i class="fa-solid fa-sun d-none"></i>
                        </span>
                    </div>
                </ul>
            </div>
        </div>
    </nav>

    <!-- OffCanvas Menu Start-->
    <div class="sm_menu d-lg-none">
        <div class="offcanvas_menu">
            <div class="bars">
                <a class="btn" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button"
                    aria-controls="offcanvasExample">
                    <i class="fa-solid fa-bars sideBarIcon"></i>
                </a>
            </div>
            <div class="logo">
                <a href="/">
                    <img src="{{asset('web/assets/images/logo/light-mode.png')}}" class="light-mode-logo" style="max-height: 60px"
                        alt="Logo">
                    <img src="{{asset('web/assets/images/logo/dark-mode.png')}}" class="dark-mode-logo d-none" style="max-height: 60px"
                        alt="Logo">
                </a>
            </div>
        </div>

        <div class="offcanvas offcanvas-start offcanvas-sideBar" tabindex="-1" id="offcanvasExample"
            aria-labelledby="offcanvasExampleLabel">
            <div class="offcanvas-body">
                <div class="offcanvas-header justify-content-end">

                    <span class="btn btn-sm text-reset" data-bs-dismiss="offcanvas"
                        aria-label="Close">
                        <i class="fa-solid fa-xmark"></i>
                    </span>
                </div>
                <ul class="justify-content-left flex-column text-left mb-2 mb-lg-0 main_menu_phone navbar-nav">
                    <li class="nav-item">
                        <a href="/" data-rr-ui-event-key="home" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="#about" data-rr-ui-event-key="#" class="nav-link">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a href="#whatWeDo" data-rr-ui-event-key="#" class="nav-link">What we do?</a>
                    </li>
                    <li class="nav-item">
                        <a href="#riz_event" data-rr-ui-event-key="#" class="nav-link">Riz Event</a>
                    </li>
                    <li class="nav-item">
                        <a href="#service" data-rr-ui-event-key="#" class="nav-link">Service</a>
                    </li>
                    <li class="nav-item">
                        <a href="#contactUs" data-rr-ui-event-key="#" class="nav-link">Contact</a>
                    </li>
                    <div class="navbar_btn nav-item">
                        <span class="sal-animate dark-mode btn btn-sm btn-buy-sell">
                            <i class="fa-solid fa-moon"></i>
                            <i class="fa-solid fa-sun d-none"></i>
                        </span>
                    </div>
                </ul>
            </div>
        </div>
    </div>
    <!-- OffCanvas Menu End-->
</header>
