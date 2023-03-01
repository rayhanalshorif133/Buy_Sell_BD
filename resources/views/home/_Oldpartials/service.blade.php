<div class="site-section" id="service">
    <div class="serviceContainer">
        <div class="row justify-content-center">
            <div class="col-md-7 text-center">
                <span class="sub-title">Services</span>
                <h2 class="font-weight-bold text-black mb-5 title">Our Services</h2>
                <p class="mb-5 d-none">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Eligendi, explicabo, quasi. Magni deserunt sunt labore.
                </p>
                @if(count($services) == 0)
                <h5 class="mb-5 noServiceAvailable">
                    No Service is available.
                </h5>
                @endif
            </div>
        </div>
        <div class="row">
            <div class="owl-carousel service-slider owl-carousel-border">
                @foreach ($services as $key => $service)
                <div class="service" id="nav-{{$service->id}}" style="width: 100%" tabindex="-1" role="option"
                    aria-describedby="slick-slide00" data-slick-index="4" aria-hidden="true">
                    <div class="apbc-img-wrapper serviceImageBox">
                        <img decoding="async" src="{{$service->image}}" alt="Business Expert">
                    </div>
                    <div class="service-icon-wrapper">
                        <i class="fa-solid fa-screwdriver-wrench"></i>
                    </div>
                    <div class="body">
                        <div class="headline">
                            <a href="#" target="_blank" rel="nofollow" tabindex="-1">
                                <h5 class="mt-0 title serviceTitle">{{$service->title}}</h5>
                            </a>
                        </div>
                        <div class="apbc-pera-txt">
                            <p>
                                {{ substr($service->description, 0, 200) }}
                                @if(strlen($service->description) > 200)
                                ...
                                @endif
                                <span class="getDescription d-none">{!! $service->description !!}</span>
                            </p>
                        </div>
                        <div class="apbc-readmore-btn">
                            <a href="#" target="_blank" rel="nofollow" tabindex="-1">Read More <i
                                    class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        {{-- <div class="slider-dots justify-content-center d-flex mt-5 d-none">
            @foreach ($services as $key => $service)
            <span class="nav-{{$service->id}}"></span>
            @endforeach
        </div> --}}
    </div>
</div>
