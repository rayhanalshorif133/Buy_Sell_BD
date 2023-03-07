<style>
    input[type="number"]::-webkit-outer-spin-button,
    input[type="number"]::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }
</style>

<section id="courseslide"></section>
    <div class="container populer_courses">
        <div class="row">
            <div class="col-12">
                <div class="title">
                    <h3>Services</h3>
                </div>
            </div>
            <div class="col-12">
                <ul class="nav nav-tabs serviceTab" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="Membership-tab" data-bs-toggle="tab" data-bs-target="#Membership" type="button"
                            role="tab" aria-controls="Membership" aria-selected="true">Membership</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="License-tab" data-bs-toggle="tab" data-bs-target="#license" type="button"
                            role="tab" aria-controls="License" aria-selected="false">License</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="Property-tab" data-bs-toggle="tab" data-bs-target="#property" type="button"
                            role="tab" aria-controls="Property" aria-selected="false">Property</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="Ticket-tab" data-bs-toggle="tab" data-bs-target="#ticket" type="button"
                            role="tab" aria-controls="Ticket" aria-selected="false">Ticket</button>
                    </li>
                </ul>
                <div class="tab-content mt-2" id="myTabContent">
                    <div class="tab-pane fade" id="Membership" role="tabpanel" aria-labelledby="Membership-tab">
                        <div class="row">
                            <div class="pb-6 row">
                                <div class="col-md-6">
                                    <div class="card_text">
                                        <div class="subtitle text-justify">
                                            <p>
                                                We provide an easy and convenient way to transfer your club membership to a different a new owner. We
                                                ensure secure,
                                                reliable, and fast transfer of membership information, ensuring a smooth transition.
                                                They also provide helpful support to ensure that the process is as hassle-free aspossible.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card_image">
                                        <img class="img-fluid w-100" src="{{asset('web/assets/images/services/membarship.jpg')}}" alt="image"
                                            loading="lazy">
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="license" role="tabpanel" aria-labelledby="License-tab">
                        <div class="row">
                            <div class="col-md-12 py-3 before_text">
                                <div class="subtitle text-justify">
                                    <p>
                                        License and renewal services refer to the process of obtaining or renewing a license, permit, or certification for a specific activity or profession. This may include submitting applications, paying fees, and meeting specific requirements.
                                        These services ensure that individuals and businesses comply with legal and regulatory standards and maintain their
                                        ability to operate within their respective industries.
                                    </p>
                                </div>
                            </div>
                            <div class="owl-carousel owl-theme owl-loaded service_slider_license">
                            <div class="owl-stage-outer">
                                <div class="owl-stage">
                                    <div class="owl-item">
                                        <div class="pb-6 course-padding-area sal-animate" data-sal="slide-right" data-sal-duration="800"
                                            data-sal-easing="ease">
                                            <div class="course_single_item what_we_do">
                                                <div class="card_image"><img class="img-fluid w-100" src="{{asset('web/assets/images/services/license/1.png')}}"
                                                        alt="image" loading="lazy"></div>
                                                <div class="card_text">
                                                    <h3>BRTA License</h3>
                                                    <p>Want to hassle free license service consult with us.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item">
                                        <div class="pb-6 course-padding-area sal-animate" data-sal="slide-right" data-sal-duration="800"
                                            data-sal-easing="ease">
                                            <div class="course_single_item what_we_do">
                                                <div class="card_image"><img class="img-fluid w-100" src="{{asset('web/assets/images/services/license/2.png')}}"
                                                        alt="image" loading="lazy"></div>
                                                <div class="card_text">
                                                    <h3>License</h3>
                                                    <p>Want to hassle free license service consult with us.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item">
                                        <div class="pb-6 course-padding-area sal-animate" data-sal="slide-right" data-sal-duration="800"
                                            data-sal-easing="ease">
                                            <div class="course_single_item what_we_do">
                                                <div class="card_image"><img class="img-fluid w-100" src="{{asset('web/assets/images/services/license/3.png')}}"
                                                        alt="image" loading="lazy"></div>
                                                <div class="card_text">
                                                    <h3>Export & Import License</h3>
                                                    <p>Want to hassle free license service consult with us.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="property" role="tabpanel" aria-labelledby="Property-tab">
                        <div class="row">
                            <div class="col-md-12 py-3 before_text">
                                <div class="subtitle text-justify">
                                    <p>
                                        Property sell or rent services refer to the process of buying, selling, or renting real estate properties such as homes, apartments, and commercial spaces. These services often involve listing properties, conducting property inspections, negotiating prices, and finalizing transactions. They help individuals and businesses find suitable properties that meet their needs and achieve their goals in the real estate market.
                                    </p>
                                </div>
                            </div>
                            <div class="owl-carousel owl-theme owl-loaded service_slider_property">
                                <div class="owl-stage-outer">
                                    <div class="owl-stage">
                                        <div class="owl-item">
                                            <a href="{{route('services.view-details',["property","house"])}}">
                                            <div class="pb-6 course-padding-area sal-animate" data-sal="slide-right" data-sal-duration="800"
                                                data-sal-easing="ease">
                                                <div class="course_single_item what_we_do">
                                                    <div class="card_image"><img class="img-fluid w-100"
                                                            src="{{asset('web/assets/images/services/property/house.jpg')}}" alt="image" loading="lazy"></div>
                                                    <div class="card_text">
                                                        <h3>House</h3>
                                                        <p></p>
                                                    </div>
                                                </div>
                                            </div>
                                            </a>
                                        </div>
                                        <div class="owl-item">
                                            <a href="{{route("services.view-details",["property","flats"])}}">
                                                <div class="pb-6 course-padding-area sal-animate" data-sal="slide-right" data-sal-duration="800"
                                                    data-sal-easing="ease">
                                                    <div class="course_single_item what_we_do">
                                                        <div class="card_image"><img class="img-fluid w-100"
                                                                src="{{asset('web/assets/images/services/property/flat.jpg')}}" alt="image" loading="lazy"></div>
                                                        <div class="card_text">
                                                            <h3>Flats</h3>
                                                            <p></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="owl-item">
                                            <a href="{{route("services.view-details",["property","land"])}}">
                                                <div class="pb-6 course-padding-area sal-animate" data-sal="slide-right" data-sal-duration="800"
                                                    data-sal-easing="ease">
                                                    <div class="course_single_item what_we_do">
                                                        <div class="card_image"><img class="img-fluid w-100"
                                                                src="{{asset('web/assets/images/services/property/land.jpg')}}" alt="image" loading="lazy"></div>
                                                        <div class="card_text">
                                                            <h3>Land</h3>
                                                            <p></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade show active" id="ticket" role="tabpanel" aria-labelledby="Ticket-tab">
                        @include('home._partials._service_ticket')
                    </div>
                </div>
            </div>
        </div>
    </div>
    <span id="contactUs" class="mb-4"></span>
</section>

<style>
    .nav-link>.active {
        border-color: none !important;
    }
</style>

<script>
    $(document).ready(function(){
        $(".service_slider_membership").owlCarousel({
            loop:true,
            margin:10,
            autoplay:true,
            autoplayTimeout:3500,
            autoplayHoverPause:true,
            responsive:{
            0:{
            items:1,
            nav:false
            },
            600:{
            items:2,
            nav:false
            },
            1000:{
            items:3,
            nav:false,
            loop:true
            }
            }
        });
        $(".service_slider_license").owlCarousel({
            loop:true,
            margin:10,
            autoplay:true,
            autoplayTimeout:3500,
            autoplayHoverPause:true,
            responsive:{
            0:{
            items:1,
            nav:false
            },
            600:{
            items:2,
            nav:false
            },
            1000:{
            items:3,
            nav:false,
            loop:true
            }
            }
        });
        $(".service_slider_property").owlCarousel({
            loop:true,
            margin:10,
            autoplay:true,
            autoplayTimeout:3500,
            autoplayHoverPause:true,
            responsive:{
            0:{
            items:1,
            nav:false
            },
            600:{
            items:2,
            nav:false
            },
            1000:{
            items:3,
            nav:false,
            loop:true
            }
            }
        });

    });
</script>
