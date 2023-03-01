@extends('layouts.web')


@section('head')
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
@endsection

@section('content')
{{-- @include('home._partials.navbar') --}}
{{-- @include('home._partials.slider') --}}
@include('home._partials.about')
@include('home._partials.what-we-do')
@include('home._partials.service')
@include('home._partials.about_sir')
@include('home._partials.contact')
@include('home._partials.footer')
{{-- @include('home._partials.settings') --}}
@include('home._partials.social')
@endsection
@push('scripts')
<script src="{{ asset('js/home.js') }}"></script>
@endpush
