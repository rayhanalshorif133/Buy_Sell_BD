@extends('layouts.app')

@section('content')
<div class="container">

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Create New User</h3>
            {{-- add btn --}}
            <div class="card-tools">
                <a href="{{route('user.index')}}" class="btn btn-danger btn-sm">
                    <i class="fas fa-plus"></i>
                    Back
                </a>
            </div>
        </div>
        <div class="card-body">
            <div class="box">
                <div class="box-body">
                    <form action="{{ route('user.store') }}" class="form-horizontal" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <label for="name" class="col-sm-3 col-form-label required">Name</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="name" placeholder="Enter user name"
                                    name="name">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-sm-3 col-form-label required">Email</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="email" placeholder="Enter user email"
                                    name="email">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="password" class="col-sm-3 col-form-label required">password</label>
                            <div class="col-sm-9">
                                <input type="password" class="form-control" id="password"
                                    placeholder="Enter user password" name="password">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="password_confirmation" class="col-sm-3 col-form-label required">Confirmation
                                Password</label>
                            <div class="col-sm-9">
                                <input type="password" class="form-control" id="password_confirmation"
                                    placeholder="Enter password confirmation" name="password_confirmation">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="float-end">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection

@push('js')
@endpush
