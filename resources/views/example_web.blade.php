@extends('layouts.web')


@section('head')
@endsection

@section('content')
<section id="extend_content" data-sal="slide-up" data-sal-delay="300" data-sal-duration="1000" data-sal-easing="ease"
    class="sal-animate">
    <div class="container">
        <div class="title">
            <h3 class="text-capitalize">Title</h3>
        </div>
        <div class="row" style="margin: 0 10px;">
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Temporibus error magnam ipsum fugiat labore, nihil
            veritatis. Atque fugit voluptatibus magnam labore! Laboriosam exercitationem totam corporis odit sunt
            consequuntur dolorem consectetur.
        </div>
    </div>
    <span id="whatWeDo" class="mb-5"></span>
</section>
@endsection
@push('scripts')
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script src="{{ asset('js/home.js') }}"></script>
<script src="{{ asset('js/home_ticket.js') }}"></script>
@endpush
