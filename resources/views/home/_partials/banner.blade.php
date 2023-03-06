<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"/>
<section id="banner" class="home_banner">
    <div class="container">
        <div class="owl-carousel owl-theme owl-carousel-banner">
            <div class="item">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="banner_text">
                            <h1 class="sal-animate text-capitalize membership_banner_text d-none">
                                Want to join <br> your desire club
                            </h1>
                        </div>
                        <div class="banner_text_btn">
                            <a href="#contact_us" class="btn-buy-sell-banner mt-3">Consult With Us &nbsp;<i class="fa-solid fa-comment"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="banner_img membership_banner_images">
                            <img class="img-fluid homebanner-thumb video_thumb sal-animate" id="bannerImage"
                            src="{{asset('web/assets/images/banner_image/membership/club.png')}}"
                                alt="Home Banner| Icon">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="m-auto text-center banner_image_btn">
                            <a href="#contact_us" class="btn-buy-sell-banner mt-3">Consult With Us &nbsp;<i class="fa-solid fa-comment"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="banner_text">
                            <h1 class="sal-animate text-capitalize">
                                Want to hassle free license service
                                <br />
                            </h1>
                            <p></p>
                            <div class="banner_text_btn">
                                <a href="#contact_us" class="btn-buy-sell-banner mt-3">Consult With Us &nbsp;<i
                                        class="fa-solid fa-comment"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="banner_img">
                            <img class="img-fluid homebanner-thumb video_thumb sal-animate" id="bannerImage"
                                src="{{asset('web/assets/images/banner_image/line_for_license.png')}}" alt="Home Banner| Icon">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="m-auto text-center banner_image_btn">
                            <a href="#contact_us" class="btn-buy-sell-banner mt-3">Consult With Us &nbsp;<i
                                    class="fa-solid fa-comment"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="banner_text">
                            <h1 class="sal-animate text-capitalize">
                                Want to buy, sell and rent land, property, flats
                                <br />
                            </h1>
                            <p></p>
                            <div class="banner_text_btn">
                                <a href="#contact_us" class="btn-buy-sell-banner mt-3">Consult With Us &nbsp;<i
                                        class="fa-solid fa-comment"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="banner_img">
                            <img class="img-fluid homebanner-thumb video_thumb sal-animate" id="bannerImage"
                                src="{{asset('web/assets/images/banner_image/home.png')}}" alt="Home Banner| Icon">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="m-auto text-center banner_image_btn">
                            <a href="#contact_us" class="btn-buy-sell-banner mt-3">Consult With Us &nbsp;<i
                                    class="fa-solid fa-comment"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="banner_text">
                            <h1 class="sal-animate text-capitalize">
                                Want to Booking
                                <br />
                                Air Ticket
                            </h1>
                            <p></p>
                            <div class="banner_text_btn">
                                <a href="#contact_us" class="btn-buy-sell-banner mt-3">Consult With Us &nbsp;<i
                                        class="fa-solid fa-comment"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="banner_img">
                            <img class="img-fluid homebanner-thumb video_thumb sal-animate" id="bannerImage"
                                src="{{asset('web/assets/images/banner_image/ticket.png')}}" alt="Home Banner| Icon">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="m-auto text-center banner_image_btn">
                            <a href="#contact_us" class="btn-buy-sell-banner mt-3">Consult With Us &nbsp;<i
                                    class="fa-solid fa-comment"></i></a>
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
            {
                'title': 'Want to join <br> your desire club!',
                'src': 'web/assets/images/banner_image/membership/club_2.jpg',
            },
            {
                'title': 'Find Your <br> Best Activities',
                'src': 'web/assets/images/banner_image/membership/GOLF_PLAYER.png',
            },
            {
                'title': `You're on <br> right place!`,
                'src': 'web/assets/images/banner_image/membership/wine_glass.png',
            },
            {
                'title': 'Good is not Good <br> When better is <br> Expected!',
                'src': 'web/assets/images/banner_image/membership/golf_table.png',
            },
            {
                'title': 'Find Your <br> Modern club',
                'src': 'web/assets/images/banner_image/membership/GOLF.jpg',
            },
            {
                'title': 'Want to feel <br> in the rhythm!',
                'src': 'web/assets/images/banner_image/membership/club_2.jpg',
            }
        ];
        var bannerImage = $(".membership_banner_images img");
        var bannerTest = $(".membership_banner_text");

        bannerTest.html(images[0].title).fadeIn(1000).removeClass('d-none');

        setInterval(function(){
            is_active = $(".membership_banner_images").closest('.owl-item').hasClass('active');
        }, 500);

        // owl-item

        if(is_active){
            var i = 0;
            setInterval(function(){
                bannerImage.fadeOut(1000, function(){
                    bannerImage.attr('src', images[i].src);
                    bannerImage.fadeIn(1000);
                });

                bannerTest.fadeOut(1000, function(){
                    bannerTest.html(images[i].title).fadeIn(1000);
                });
                i++;
                if(i == images.length){
                    i = 0;
                }
            }, 5000);
        }




    }

</script>
