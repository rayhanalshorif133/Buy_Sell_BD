<div class="site-blocks-cover" id="home-section">
    <div class="owl-carousel home-slider">
        @if(count($sliders) == 0)
        <div class="slide-image-box shadow-sm p-3 mb-5 bg-white rounded">
            <img src="{{ asset('images/no-image.jpg') }}" class="d-block w-100" alt="">
        </div>
        @endif
        @foreach($sliders as $slider)
        <div class="slide-image-box">
            <img src="{{ asset($slider->image) }}" class="d-block w-100" alt="">
        </div>
        @endforeach
    </div>
</div>