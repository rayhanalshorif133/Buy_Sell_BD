@extends('layouts.web')


@section('head')
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>



@endsection

@section('content')
@include('home._partials.banner')
{{-- @include('home._partials.bannerWithServices') --}}
@include('home._partials.about_us')
@include('home._partials.what-we-do')
@include('home._partials.riz_event')
@include('home._partials.service')
@include('home._partials.contact')
@endsection
@push('scripts')
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<script src="{{ asset('js/home.js') }}"></script>
{{-- date range picker --}}
@endpush
