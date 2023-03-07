@extends('layouts.web')


@section('head')
<style>
    /* card atractive desing */
    .card {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        transition: 0.3s;
        width: 100%;
        border-radius: 5px;
    }
    /* title */
    .card .card-title {
        color: #000;
        font-size: 20px;
        font-weight: 600;
        margin-bottom: 10px;
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
        <div class="row" style="margin: 0 10px 10px 10px;">
            @for ($i = 0; $i < 3; $i++)
           <div class="col-md-6 mt-3">
            <div class="card" style="width:100%">
                <img src="https://picsum.photos/500/300" class="card-img-top" alt="...">
                <div class="card-body">
                    <div class="subtitle">
                        <h4>Buy Sell BD</h4>
                        <p class="about_details">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium tempore ipsum explicabo et laudantium officiis, atque nobis ab fuga sapiente voluptatum commodi nostrum repellendus placeat quidem dolore quo deserunt cumque!
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium tempore ipsum explicabo et laudantium officiis,
                            atque nobis ab fuga sapiente voluptatum commodi nostrum repellendus placeat quidem dolore quo deserunt cumque!
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium tempore ipsum explicabo et laudantium officiis,
                            atque nobis ab fuga sapiente voluptatum commodi nostrum repellendus placeat quidem dolore quo deserunt cumque!
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium tempore ipsum explicabo et laudantium officiis,
                            atque nobis ab fuga sapiente voluptatum commodi nostrum repellendus placeat quidem dolore quo deserunt cumque!
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium tempore ipsum explicabo et laudantium officiis,
                            atque nobis ab fuga sapiente voluptatum commodi nostrum repellendus placeat quidem dolore quo deserunt cumque!

                        </p>
                        <p class="copy_details d-none">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium tempore ipsum explicabo et laudantium officiis,
                            atque nobis ab fuga sapiente voluptatum commodi nostrum repellendus placeat quidem dolore quo deserunt cumque!
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium tempore ipsum explicabo et laudantium officiis,
                            atque nobis ab fuga sapiente voluptatum commodi nostrum repellendus placeat quidem dolore quo deserunt cumque!
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium tempore ipsum explicabo et laudantium officiis,
                            atque nobis ab fuga sapiente voluptatum commodi nostrum repellendus placeat quidem dolore quo deserunt cumque!
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium tempore ipsum explicabo et laudantium officiis,
                            atque nobis ab fuga sapiente voluptatum commodi nostrum repellendus placeat quidem dolore quo deserunt cumque!
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium tempore ipsum explicabo et laudantium officiis,
                            atque nobis ab fuga sapiente voluptatum commodi nostrum repellendus placeat quidem dolore quo deserunt cumque!
                        </p>
                        <div class="read_more_about_btn text-left">
                            <span class="btn btn-md btn-buy-sell">Read More</span>
                        </div>
                    </div>
                </div>
            </div>
           </div>
           @endfor
        </div>
    </div>
</section>
@endsection
@push('scripts')
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
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
