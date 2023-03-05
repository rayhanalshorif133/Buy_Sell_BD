<span id="about" class="mb-5"></span>
<section id="info" data-sal="slide-up" data-sal-delay="300" data-sal-duration="1000" data-sal-easing="ease"
    class="sal-animate">
    <div class="container">
        <div class="title">
            <h3>About Us</h3>
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
                                                src="{{asset('web/assets/images/about/buysellbd.png')}}" alt="Company">
                                        </div>
                                        <div class="col-md-7">
                                            <div class="card-body">
                                                <div class="subtitle">
                                                    <h4>Buy Sell BD</h4>
                                                    <p class="about_details">
                                                        Buysellbd is a personalized service for buying and selling Club Membership of Exclusive Clubs. Gaining access to a Club
                                                        like Dhaka Club, Gulshan Club, Banani Club, Uttara Club are very exclusive and time consuming. On the other hand finding
                                                        someone eligible to handover existing membership is sometime very difficult. BuySellBD brings the only exclusive
                                                        platform to make these transactions easier.
                                                    </p>
                                                    <p class="copy_details d-none">
                                                        Buysellbd is a personalized service for buying and selling Club Membership of Exclusive Clubs. Gaining access to a Club
                                                        like Dhaka Club, Gulshan Club, Banani Club, Uttara Club are very exclusive and time consuming. On the other hand finding
                                                        someone eligible to handover existing membership is sometime very difficult. BuySellBD brings the only exclusive
                                                        platform to make these transactions easier.
                                                    </p>
                                                    <div class="read_more_about_btn text-left d-none">
                                                        <span class="btn btn-md btn-buy-sell">Read More</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item">
                                    <div class="row g-0 align-items-center">
                                        <div class="col-md-5"><img class="card-img-top img-fluid"
                                                src="{{asset('web/assets/images/about/b2m.png')}}" alt="Company">
                                        </div>
                                        <div class="col-md-7">
                                            <div class="card-body">
                                                <div class="subtitle">
                                                    <h4>B2M Technologies Limited</h4>
                                                    <p class="about_details">
                                                        B2M Technologies Ltd. Incorporated in Bangladesh is connected to all major cell phone operators, providing value added
                                                        services through mobile phone network. Established in 2006, B2M Technologies Ltd is one of the leading value-added mobile content services and application
                                                        provider in Bangladesh. Being connected to all Telco’s in the country having subscriber base of 46 million, it is
                                                        dedicated in providing first class entertainment, informative and relevant mobile content to the fastest growing mobile
                                                        market.
                                                    </p>
                                                    <p class="copy_details d-none">
                                                        B2M Technologies Ltd. Incorporated in Bangladesh is connected to all major cell phone operators, providing value added
                                                        services through mobile phone network. Established in 2006, B2M Technologies Ltd is one of the leading value-added mobile content services and application
                                                        provider in Bangladesh. Being connected to all Telco’s in the country having subscriber base of 46 million, it is
                                                        dedicated in providing first class entertainment, informative and relevant mobile content to the fastest growing mobile
                                                        market.
                                                    </p>
                                                    <div class="read_more_about_btn text-left d-none">
                                                        <span class="btn btn-md btn-buy-sell">Read More</span>
                                                    </div>
                                                </div>
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


        // btns
        let read_moreBtn = `<div class="read_more_btn text-left">
            <span class="btn btn-md btn-buy-sell">Read More</span>
        </div>`;

        windowResize();
        $(window).resize(function(){
            windowResize();
        });


    });

    function windowResize(){
        // wondow resize
        let width = $(window).width();
        if(width < 768){
           $(".about_details").each(function(){
               let text = $(this).text();
               if(text.length > 300){
                   $(this).text(text.substring(0,300) + " ...");
               }
           });
           $(".read_more_about_btn").removeClass('d-none');
           $(".read_less_about_btn").removeClass('d-none');
        }else{
            $(".about_details").each(function(){
                let copy_details = $(this).parent().find(".copy_details").text();
                $(this).html(copy_details);
            });
            $(".read_more_about_btn").addClass('d-none');
            $(".read_less_about_btn").addClass('d-none');
        }
    }

    $(document).on("click",".read_more_about_btn",function(){
        let text = $(this).parent().find(".copy_details").text();
        $(this).parent().find(".about_details").html(text);
        $(this).find("span").removeClass('btn-buy-sell').addClass('btn-buy-sell-danger').text("Read Less");
        $(this).removeClass('read_more_about_btn').addClass('read_less_about_btn');
    });
    $(document).on("click",".read_less_about_btn",function(){
        let text = $(this).parent().find(".copy_details").text();
        $(this).parent().find(".about_details").text(text.substring(0,300) + " ...");
        $(this).find("span").removeClass('btn-buy-sell-danger').addClass('btn-buy-sell').text("Read More");
        $(this).removeClass('read_less_about_btn').addClass('read_more_about_btn');
    });

</script>
