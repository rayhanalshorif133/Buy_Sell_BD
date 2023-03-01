<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"/>
<section id="banner" class="home_banner">
    <div class="container">
        <div class="owl-carousel owl-theme owl-carousel-banner">
            <div class="item">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="banner_text">
                            <h1 class="sal-animate text-capitalize" style="font-size:3.5rem;line-height: 4.4rem ">
                                Want to
                                <br />
                                Join club
                            </h1>
                            <a href="#contact_us" class="btn btn-md btn-buy-sell mt-3">Consult With Us &nbsp;<i class="fa-solid fa-comment"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="banner_img membership_banner_images">
                            <img class="img-fluid homebanner-thumb video_thumb sal-animate" id="bannerImage"
                            src="{{asset('web/assets/images/banner image/membership/CLUB.png')}}"
                                alt="Home Banner| Icon">
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="banner_text">
                            <h1 class="sal-animate text-capitalize" style="font-size:3.5rem;line-height: 4.4rem ">
                                Want to hassle free license service
                            <br />
                            </h1>
                            <p></p>
                            <a href="#contact_us" class="btn-buy-sell mt-3">Consult With Us &nbsp;<i class="fa-solid fa-comment"></i></a>
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
                            <h1 class="sal-animate text-capitalize" style="font-size:3.5rem;line-height: 4.4rem ">
                               Want to buy, sell and rent land, property, flats
                                <br />
                            </h1>
                            <p></p>
                            <a href="#contact_us" class="btn-buy-sell mt-3">Consult With Us &nbsp;<i class="fa-solid fa-comment"></i></a>
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
                            <h1 class="sal-animate text-capitalize" style="font-size:3.5rem;line-height: 4.4rem ">
                                Want to Booking
                                <br />
                                Air Ticket
                            </h1>
                            <p></p>
                           <a href="#contact_us" class="btn-buy-sell mt-3">Consult With Us &nbsp;<i class="fa-solid fa-comment"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="banner_img">
                            <img class="img-fluid homebanner-thumb video_thumb sal-animate" id="bannerImage"
                            src="{{asset('web/assets/images/banner image/travel/ticket.jpg')}}"
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
            autoplayTimeout:4500,
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
        bannerImageFadeInFadeOutHandler();
    });

    function bannerImageFadeInFadeOutHandler(){
        // banner_img
        var is_active = $(".membership_banner_images").closest('.owl-item').hasClass('active');
        var images = [
            'web/assets/images/banner image/membership/GOLF PLAYER.png',
            'web/assets/images/banner image/membership/wine_glass.png',
            'web/assets/images/banner image/membership/GOLF PLAYER.png',
            'web/assets/images/banner image/membership/GOLF TABLE.png',
            'web/assets/images/banner image/membership/CLUB.png',
        ]
        var bannerImage = $(".membership_banner_images img");

        setInterval(function(){
            is_active = $(".membership_banner_images").closest('.owl-item').hasClass('active');
        }, 500);

        // owl-item

        if(is_active){
            var i = 0;
            setInterval(function(){
                bannerImage.fadeOut(1000, function(){
                    bannerImage.attr('src', images[i]);
                    bannerImage.fadeIn(1000);
                });
                i++;
                if(i == images.length){
                    i = 0;
                }
            }, 5000);
        }




    }

</script>
