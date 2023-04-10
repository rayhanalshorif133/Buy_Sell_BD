@extends('layouts.web')


@section('head')
<link rel="stylesheet" href="{{asset('web/assets/lightbox/dist/css/lightbox.min.css')}}">
<style>
    /* card atractive desing */
    .custom-card {
        position: relative;
        display: flex;
        flex-direction: row;
        min-width: 0;
        word-wrap: break-word;
        background-color: #fff;
        background-clip: border-box;
        border: 1px solid rgba(0,0,0,.125);
        border-radius: 0.25rem;
    }

    /* Add rounded corners to the top left and the top right corner of the image */


</style>
@endsection

@section('content')
<section id="extend_content">
    <div class="container pb-5">
        <div class="title">
            <h3 class="text-capitalize">{{$serviceItemName}}</h3>
        </div>
        <div style="margin: 0 10px 10px 10px;">
            <div class="row g-0 align-items-center">
                @foreach ($serviceDetails as $itemDetails)
                {{-- {{dd($itemDetails)}} --}}
                    <div class="col-md-5">
                        @php
                            $image = $itemDetails->image ? $itemDetails->image : 'https://picsum.photos/500/300';
                        @endphp
                        <a class="example-image-link" href="{{$image}}"
                            data-lightbox="example-set" data-title="Buy Sell BD">
                        <img class="card-img-top img-fluid"
                            src="https://picsum.photos/500/300" alt="Company">
                        </a>
                    </div>
                    <div class="col-md-7">
                        <div class="card-body">
                            <div class="subtitle">
                                <h4>Buy Sell BD</h4>
                                <p class="about_details">
                                    ALPS Concord. Apartment No. 5B more or less 1,500 sft. in covered area and open terrace on the 4th Floor of the ALPS
                                    Concord Condominium of House No. 02, Road No. 19, Sector # 14, P.S. - Uttara, Dhaka - 1230, consisting of 3 (three)
                                    bedrooms, 4 (four) bathrooms, 1 (one) kitchen, 1 (one) living, 1 (one) dining, 2 (two) verandas and one Car-park in
                                    the Ground Floor
                                </p>
                                <p class="copy_details d-none">
                                    ALPS Concord. Apartment No. 5B more or less 1,500 sft. in covered area and open terrace on the 4th Floor of the ALPS Concord Condominium of House No. 02, Road No. 19, Sector # 14, P.S. - Uttara, Dhaka - 1230, consisting of 3 (three) bedrooms, 4 (four) bathrooms, 1 (one) kitchen, 1 (one) living, 1 (one) dining, 2 (two) verandas and one Car-park in the Ground Floor
                                </p>
                                <div class="read_more_about_btn text-left d-none">
                                    <span class="btn btn-md btn-buy-sell">Read More</span>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <hr>
        </div>
    </div>
</section>
@endsection
@push('scripts')
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script src="{{asset('web/assets/lightbox/dist/js/lightbox-plus-jquery.min.js')}}"></script>
<script src="{{ asset('js/home.js') }}"></script>
<script src="{{ asset('js/home_ticket.js') }}"></script>

<script>
    $(function() {
        windowResize();
        $(window).resize(function(){
        windowResize();
        });
    });


    function windowResize(){
    // wondow resize
    let width = $(window).width();
    if(width < 2500)
    { $(".about_details").each(function(){ let text=$(this).text(); if(text.length> 300){
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

@endpush
