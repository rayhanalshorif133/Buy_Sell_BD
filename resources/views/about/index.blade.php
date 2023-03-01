@extends('layouts.app')

@section('head')
<style>
    .aboutImageBox {
        width: 100%;
        height: 300px;
    }
</style>
@endsection

@section('content')
<div class="container">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header p-2">
                <ul class="nav nav-pills">
                    <li class="nav-item"><a class="nav-link active" href="#about" data-toggle="tab">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Settings</a></li>
                </ul>
            </div>
            <div class="card-body">
                <div class="tab-content">
                    <div class="tab-pane active" id="about">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="aboutImageBox">
                                    <img src="{{ asset($about->image) }}" alt="about image" height="100%"
                                        width="100%" />
                                </div>
                            </div>
                            <div class="col-md-8">
                                <h3 class="mb-4">About Us</h3>
                                <p class="mb-4 text-justify">
                                    <span class="descriptionLess">{!! Str::limit($about->description,300) !!}</span>
                                    <span class="d-none getDescription">{!! $about->description !!}</span>
                                </p>
                            </div>
                        </div>

                    </div>
                    <div class="tab-pane" id="settings">
                        <form action="{{ route('user.about.storeOrUpdate') }}" class="form-horizontal" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row">
                                <label for="image" class="col-sm-2 col-form-label required">Image</label>
                                <div class="col-sm-10">
                                    <input type="file" class="form-control" id="image" placeholder="Image" name="image">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="description" class="col-sm-2 col-form-label required">Description</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" id="description" name="description"
                                        placeholder="Description">{{$about->description}}</textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="offset-sm-2 col-sm-10">
                                    <button type="submit" class="btn btn-danger">Submit</button>
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

@push('js')
@endpush