<div class="site-section about-section mt-5" id="about">
    <div class="row mb-5 pb-5">
        <div class="col-lg-4 img-years mb-5 mb-lg-0">
            <div class="aboutImageBox">
                @if($about)
                <img src="{{ asset($about->image) }}" alt="about image" />
                @else
                <img src="{{ asset('images/dot-online-1280x720.png') }}" alt="about image" />
                @endif
            </div>
        </div>
        <div class="col-lg-7 text-left">
            <span class="sub-title">About Our Company</span>
            <h3 class="mb-4 title">About Us</h3>
            @if($about)
            <p class="mb-4 description">
                {!! Str::limit($about->description,2000) !!}
            </p>
            @endif
            <p>
                <span class="btn btn-primary btn-lg rounded-0" data-toggle="modal" data-target="#readMoreAboutUs">Read
                        More About Us</span>
            </p>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="readMoreAboutUs" tabindex="-1" role="dialog" aria-labelledby="readMoreAboutUsTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content w-100">
            <div class="swal2-popup swal2-modal swal2-show" tabindex="-1" role="dialog" aria-live="assertive"
                aria-modal="true" style="display: grid;">
                <button type="button" class="swal2-close" aria-label="Close this dialog" style="display: flex;"
                    style="background-color: transparent; cursor: pointer;">
                    ×
                </button>
                @if($about)
                <img class="swal2-image aboutImageSwal" src="{{ asset($about->image) }}" alt="about image"
                    style="width: 400px; height: 200px;" />
                @else
                <img class="swal2-image aboutImageSwal" src="{{ asset('images/dot-online-1280x720.png') }}"
                    alt="about image" style="width: 400px; height: 200px;" />
                @endif
                <h2 class="swal2-title" id="swal2-title" style="display: block;">About Us!</h2>
                <div class="swal2-html-container" id="swal2-html-container" style="display: block;">
                    {!! $about->description !!}
                </div>
            </div>
        </div>
    </div>
</div>