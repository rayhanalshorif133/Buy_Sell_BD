@extends('layouts.app')

@section('head')
<style>
    .aboutImageBox {
        width: 100%;
        height: 300px;
    }

    .faviconBox {
        width: 100%;
        height: 100px;
    }

    .siteLogoBox {
        width: 100%;
        height: 50px;
    }
</style>
@endsection

@section('content')
<div class="container">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header p-2">
                <ul class="nav nav-pills">
                    <li class="nav-item"><a class="nav-link active" href="#header-footer" data-toggle="tab">Header And
                            Footer</a></li>
                    <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Settings</a></li>
                </ul>
            </div>
            <div class="card-body">
                <div class="tab-content">
                    <div class="tab-pane active" id="header-footer">
                        <div class="row">
                            <div class="box-profile w-75 m-auto align-content-center">
                                <ul class="list-group mb-3">
                                    <li class="list-group-item">
                                        <b><i class="fas fa-hand"></i> Project Logo</b> <a class="float-right">
                                            @if($headerAndFooter)
                                            <img src="{{ asset($headerAndFooter->site_logo) }}" alt="siteLogo"
                                                class="siteLogoBox">
                                            @else
                                            Not Set
                                            @endif
                                        </a>
                                    </li>
                                    <li class="list-group-item">
                                        <b><i class="fa fa-circle"></i> Favicon</b> <a class="float-right">
                                            @if($headerAndFooter)
                                            <img src="{{ asset($headerAndFooter->favicon) }}" alt="Favicon"
                                                class="faviconBox">
                                            @else
                                            Not Set
                                            @endif
                                        </a>
                                    </li>
                                    <li class="list-group-item">
                                        <b><i class="fas fa-envelope"></i> Email</b> <a class="float-right">
                                            {{ $headerAndFooter ? $headerAndFooter->email : 'Not Set' }}
                                        </a>
                                    </li>
                                    <li class="list-group-item">
                                        <b><i class="fas fa-phone"></i> Phone</b> <a class="float-right">
                                            {{ $headerAndFooter ? $headerAndFooter->phone : 'Not Set' }}
                                        </a>
                                    </li>
                                    <li class="list-group-item">
                                        <b><i class="fab fa-twitter"></i> Twitter</b> <a class="float-right">
                                            {{ $headerAndFooter ? $headerAndFooter->twitter ? $headerAndFooter->twitter
                                            : 'Not Set' : 'Not Set' }}</a>
                                    </li>
                                    <li class="list-group-item">
                                        <b><i class="fab fa-facebook"></i> Facebook</b> <a class="float-right">
                                            {{ $headerAndFooter ? $headerAndFooter->facebook ?
                                            $headerAndFooter->facebook : 'Not Set' : 'Not Set' }}</a>
                                    </li>
                                    <li class="list-group-item">
                                        <b><i class="fab fa-linkedin"></i> Linkedin</b> <a class="float-right">
                                            {{ $headerAndFooter ? $headerAndFooter->linkedin? $headerAndFooter->linkedin
                                            : 'Not Set' : 'Not Set' }}</a>
                                    </li>
                                    <li class="list-group-item">
                                        <b><i class="fab fa-instagram"></i> Instagram</b> <a class="float-right">
                                            {{ $headerAndFooter ? $headerAndFooter->instagram ?
                                            $headerAndFooter->instagram : 'Not Set' : 'Not Set'}}</a>
                                    </li>
                                    <li class="list-group-item">
                                        <b><i class="fa fa-question-circle"></i> Footer Title</b> <a
                                            class="float-right">
                                            {{ $headerAndFooter ? $headerAndFooter->footer_title ?
                                            $headerAndFooter->footer_title : 'Not Set' : 'Not Set' }}</a>
                                    </li>

                                </ul>
                            </div>
                        </div>

                    </div>
                    <div class="tab-pane" id="settings">
                        <form action="{{ route('user.header.storeOrUpdate') }}" class="form-horizontal" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row">
                                <label for="site_logo" class="col-sm-2 col-form-label required">
                                    <i class="fas fa-hand"></i> Project Logo
                                </label>
                                <div class="col-sm-10">
                                    <input type="file" class="form-control" placeholder="Favicon" name="site_logo"
                                        id="site_logo">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="favicon" class="col-sm-2 col-form-label optional">
                                    <i class="fas fa-circle"></i> Favicon
                                </label>
                                <div class="col-sm-10">
                                    <input type="file" class="form-control" placeholder="Favicon" name="favicon">
                                </div>
                            </div>

                            <div class=" form-group row">
                                <label for="email" class="col-sm-2 col-form-label required"><i
                                        class="fas fa-envelope"></i> Email</label>
                                <div class="col-sm-10">
                                    <input type="email" required class="form-control" id="email" placeholder="Email"
                                        name="email" value="{{ $headerAndFooter ? $headerAndFooter->email : '' }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="phone" class="col-sm-2 col-form-label required"><i class="fas fa-phone"></i>
                                    Phone</label>
                                <div class="col-sm-10">
                                    <input type="text" required class="form-control" id="phone" placeholder="Phone"
                                        name="phone" value="{{ $headerAndFooter ? $headerAndFooter->phone : '' }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="twitter" class="col-sm-2 col-form-label optional"><i
                                        class="fab fa-twitter"></i> Twitter</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="twitter" placeholder="Twitter"
                                        name="twitter" value="{{ $headerAndFooter ? $headerAndFooter->twitter : '' }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="facebook" class="col-sm-2 col-form-label optional"><i
                                        class="fab fa-facebook"></i> Facebook</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="facebook" placeholder="Facebook"
                                        name="facebook"
                                        value="{{ $headerAndFooter ? $headerAndFooter->facebook : '' }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="linkedin" class="col-sm-2 col-form-label optional"><i
                                        class="fab fa-linkedin"></i> Linkedin</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="linkedin" placeholder="Linkedin"
                                        name="linkedin"
                                        value="{{ $headerAndFooter ? $headerAndFooter->linkedin : '' }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="instagram" class="col-sm-2 col-form-label optional"><i
                                        class="fab fa-instagram"></i> Instagram</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="instagram" placeholder="Instagram"
                                        name="instagram"
                                        value="{{ $headerAndFooter ? $headerAndFooter->instagram : '' }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="footer_title" class="col-sm-2 col-form-label required"><i
                                        class="fa fa-question-circle"></i> Footer Title</label>
                                <div class="col-sm-10">
                                    <textarea name="footer_title" class="form-control" id="footer_title" cols="3"
                                        required rows="2"
                                        placeholder="Footer title">{{ $headerAndFooter ? $headerAndFooter->footer_title : '' }}</textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="offset-sm-2 col-sm-10">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>

            </div>
        </div>
    </div>
</div>
@endsection
