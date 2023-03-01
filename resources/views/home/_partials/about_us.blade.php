<span id="about" class="mb-5"></span>
<section id="info" data-sal="slide-up" data-sal-delay="300" data-sal-duration="1000" data-sal-easing="ease"
    class="sal-animate">
    <div class="container">
        <div class="title">
            <h3>About Us</h3>
            <p>B2M Technologies Ltd. Incorporated in Bangladesh is connected to all major cell phone operators, providing value added
            services through mobile phone network.</p>
        </div>
        <div class="row" style="margin: 0 10px;">
            <div class="col-12 milestone_slider_bg">
                <div class="milestone_slider slick-initialized slick-slider">
                    <i class="fa fa-angle-left prevarrow slick-arrow about_slider_arrow" style="display: block;"></i>
                    <div class="owl-carousel owl-theme owl-loaded about_slider">
                        <div class="owl-stage-outer">
                            <div class="owl-stage">
                                <div class="owl-item">
                                    <div class="row g-0 align-items-center">
                                        <div class="col-md-5"><img class="card-img-top img-fluid"
                                                src="{{asset('web/assets/images/about/b2m.png')}}" alt="Company">
                                        </div>
                                        <div class="col-md-7">
                                            <div class="card-body">
                                                <div class="card-title h5">Welcome to B2M</div>
                                                <p class="card-text">
                                                    Established in 2006, B2M Technologies Ltd is one of the leading value-added mobile content services and application
                                                    provider in Bangladesh. Being connected to all Telco’s in the country having subscriber base of 46 million, it is
                                                    dedicated in providing first class entertainment, informative and relevant mobile content to the fastest growing mobile
                                                    market.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <i class="fa fa-angle-right nextarrow slick-arrow about_slider_arrow" style="display: block;"></i>
                </div>
            </div>
        </div>
    </div>
    <span id="whatWeDo" class="mb-5"></span>
</section>

<script>
    $(document).ready(function(){
        $(".about_slider").owlCarousel({
            loop:true,
            margin:10,
            responsiveClass:true,
            responsive:{
            0:{
            items:1,
            nav:false
            },
            600:{
            items:1,
            nav:false
            },
            1000:{
            items:1,
            nav:false,
            loop:true
            }
            }
        });


        $(".owl-nav").addClass("d-none");
        $(".prevarrow").on('click',function(){
            $(".about_slider .owl-prev").click();
        });
        $(".nextarrow").on('click',function(){
            $(".about_slider .owl-next").click();
        });
        let hasDisabled = $(".about_slider .owl-dots").hasClass("disabled");
        hasDisabled? $(".about_slider_arrow").addClass('d-none') : $(".about_slider_arrow").removeClass('d-none');
    });
</script>
