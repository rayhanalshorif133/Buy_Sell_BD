<footer class="site-footer border-top">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 mb-5 mb-lg-0">
                <div class="row mb-5">
                    <div class="col-12">
                        <a href="#about">
                            <h3 class="footer-heading mb-4">About Us</h3>
                            <p>
                                {!! Str::limit($about->description,200) !!}
                                @if(strlen($about->description) > 200)
                                ...
                                @endif
                            </p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="mb-5">
                    <h3 class="footer-heading mb-4">Our Services</h3>
                    <div class="block-25">
                        <ul class="list-unstyled">
                            @if(count($services) == 0)
                            <li class="mb-3">
                                <a href="service" class="d-flex">
                                    <figure class="image mr-4">
                                        <img src="{{ asset('images/no-image.jpg') }}" alt="" class="img-fluid" />
                                    </figure>
                                    <div class="text">
                                        <span class="small text-uppercase date">
                                            No Service.
                                        </span>
                                        <h3 class="heading font-weight-light">
                                            No Service is available.
                                        </h3>
                                    </div>
                                </a>
                            </li>
                            @else
                            @foreach ($services as $key => $service)
                            @if($key < 6) <li class="mb-3">
                                <a href="#service" class="d-flex">
                                    <figure class="image mr-4">
                                        <img src="{{asset($service->image)}}" alt="" class="img-fluid" />
                                    </figure>
                                    <div class="text">
                                        <span class="small text-uppercase date">
                                            {{ $service->created_at->format('M d, Y') }}
                                        </span>
                                        <h3 class="heading font-weight-light">{{$service->title}}</h3>
                                    </div>
                                </a>
                                </li>
                                @endif
                                @endforeach
                                @endif
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-5 mb-lg-0">
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="footer-heading mb-4">Follow Us</h3>
                        <div>
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
                    </div>
                </div>
            </div>
        </div>
        <div class="row pt-5 mt-5 text-center">
            <div class="col-md-12">
                <p>
                    @if($headerAndFooter)
                    <span class="footer-title">{{ $headerAndFooter->footer_title }}</span>
                    @else
                    &copy; 2020 <a href="#">Company Name</a>. All Rights Reserved.
                    @endif
                </p>
            </div>
        </div>
    </div>
</footer>