<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"/>
<section id="banner" class="home_banner">
    <div class="container">
        <div class="owl-carousel owl-theme owl-carousel-banner">
            <div class="item">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="banner_text">
                            <h1 class="sal-animate">
                                Unlock Exclusive Perks: <br />
                                Join Our Membership Program Today!
                            </h1>
                            <a href="#contact_us" class="btn btn-md btn-buy-sell mt-3">Contact Us &nbsp;<i class="fa-solid fa-comment"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="banner_img">
                            <img class="img-fluid homebanner-thumb video_thumb sal-animate" id="bannerImage"
                            src="{{asset('web/assets/images/banner image/membership/4503599660842134_d191.jpg')}}"
                                alt="Home Banner| Icon">
                            {{-- <img class="img-fluid homebanner-thumb video_thumb sal-animate" id="bannerImage"
                            src="{{asset('web/assets/images/banner image/membership/golf club wine table.png')}}"
                                alt="Home Banner| Icon"> --}}
                            {{-- <img class="img-fluid homebanner-thumb video_thumb sal-animate" id="bannerImage"
                            src="{{asset('web/assets/images/banner image/membership/incredible-wine-barrel-table-bobreuterstl_714373.jpg')}}"
                                alt="Home Banner| Icon"> --}}
                            {{-- <img class="img-fluid homebanner-thumb video_thumb sal-animate" id="bannerImage"
                            src="{{asset('web/assets/images/banner image/membership/wine glass-02.png')}}"
                                alt="Home Banner| Icon"> --}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="banner_text">
                            <h1 class="sal-animate">
                                License: <br />
                                Streamline Your Licensing Process: Sell and Renew Licenses with Ease
                            </h1>
                            <p></p>
                            <a href="#contact_us" class="btn-buy-sell mt-3">Contact Us &nbsp;<i class="fa-solid fa-comment"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="banner_img">
                            <img class="img-fluid homebanner-thumb video_thumb sal-animate" id="bannerImage"
                            src="{{asset('web/assets/images/banner image/license/getty_159626665_970552970450064_70176.jpg')}}"
                                alt="Home Banner| Icon">
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="banner_text">
                            <h1 class="sal-animate">
                                Property: <br />
                                Stunning Property for Sale: Your Dream Home Awaits!
                            </h1>
                            <p></p>
                            <a href="#contact_us" class="btn-buy-sell mt-3">Contact Us &nbsp;<i class="fa-solid fa-comment"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="banner_img">
                            <img class="img-fluid homebanner-thumb video_thumb sal-animate" id="bannerImage"
                            src="{{asset('web/assets/images/banner image/property/AdobeStock_256528624.jpg')}}"
                                alt="Home Banner| Icon">
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="banner_text">
                            <h1 class="sal-animate">
                                Ticket: <br />
                                Get Your Ticket to the Ultimate Experience...!!!
                            </h1>
                            <p></p>
                           <a href="#contact_us" class="btn-buy-sell mt-3">Contact Us &nbsp;<i class="fa-solid fa-comment"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="banner_img">
                            <img class="img-fluid homebanner-thumb video_thumb sal-animate" id="bannerImage"
                            src="{{asset('web/assets/images/banner image/property/AdobeStock_256528624.jpg')}}"
                                alt="Home Banner| Icon">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script>

    $(document).ready(function(){
        $('.owl-carousel-banner').owlCarousel({
            loop:true,
            margin:10,
            autoplay:false,
            autoplayTimeout:5000,
            autoplayHoverPause:true,
            dots: true,
            responsive:{
                0:{
                items:1
                },
                600:{
                items:1
                },
                1000:{
                items:1
                }
            }
        });
    });

</script>
