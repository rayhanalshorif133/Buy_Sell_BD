@extends('layouts.app')

@section('head')
<style>

</style>
@endsection

@section('content')
<div class="col-md-12">
    <div class="card">
            <div class="card-header p-2">
                <h3 class="card-title text-bold">
                    Service Details
                </h3>
                <div class="card-tools mr-3">
                    <span class="btn btn-sm btn-outline-info" data-toggle="modal" data-target="#addNewItem">
                        <i class="fas fa-plus"></i> Add New
                    </span>
                    <a href="{{ route('user.service.index') }}" class="btn btn-outline-danger btn-sm">
                        <i class="fas fa-arrow-left"></i> Back
                    </a>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-striped projects">
                    <thead>
                        <tr>
                            <th style="width: 5%">
                                #
                            </th>
                            <th style="width: 10%">
                                Image
                            </th>
                            <th style="width: 10%">
                                Title
                            </th>
                            <th style="width: 45%">
                                Description
                            </th>
                            <th style="width: 10%" class="text-center">
                                Actions
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (count($serviceDetails) == 0)
                        <tr>
                            <td colspan="5" class="text-center">No data found</td>
                        </tr>
                        @endif
                        @foreach ($serviceDetails as $service)
                        <tr id="{{$service->id}}">
                            <td>{{$loop->index+1}}</td>
                            <td class="image">
                                <img src="{{asset($service->image)}}" alt="" width="100px">
                            </td>
                            <td class="title">
                                {{$service->title}}
                            </td>
                            <td>
                                {{-- show 150 word --}}
                                <span class="descriptionLess">{!! Str::limit($service->info,150) !!}</span>
                                {{-- <span class="d-none getDescription">{!! $service->info !!}</span> --}}
                                @if (strlen($service->description) > 150)
                                <span style="color: blue" class="readMore btn">Read More</span>
                                <span style="color: red" class="readLess btn d-none">Read Less</span>
                                @endif
                            </td>
                            <td class="w-20">
                                <span class="btn btn-success btn-sm showInDetails" title="View"data-toggle="modal"
                                    data-target="#showInDetails">
                                    <i class="fas fa-eye"></i>
                                </span>
                                <span class="btn btn-info btn-sm editBtn" data-toggle="modal"
                                    data-target="#modal-add-and-update-service">
                                    <i class="fas fa-pencil-alt"></i>
                                </span>
                                <span class="btn btn-danger btn-sm deleteBtn">
                                    <i class="fas fa-trash"></i>
                                </span>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
    </div>
</div>
@include('service._partials.showItemInDetails')
@include('service._partials.addedNewItemInDetails')
@include('service._partials.updateItemInDetails')
@endsection

@push('js')
<script>
    $(function() {
        handleShowBtn();
        handleDeleteBtn();
    });

    
    handleShowBtn = () => {
        $('.showInDetails').on('click', function() {
            let id = $(this).closest('tr').attr('id');
            let title = $(this).closest('tr').find('.title').text();
            let image = $(this).closest('tr').find('.image img').attr('src');
            title = title.trim();
            $(".details_title").text(title);
            $(".details_image").find('img').attr('src', image);
        });
    };

    handleDeleteBtn = () => {
        $(".deleteBtn").click(function () {
            let id = $(this).closest('tr').attr('id');
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
            if (result.isConfirmed) {

                axios.delete("/user/service/details/"+id + "/delete")
                    .then(function (response) {
                        if (response.status == 200) {
                            if (response.data.status == true) {
                                $("#"+id).remove();
                                Swal.fire(
                                    'Deleted!',
                                    'Your file has been deleted.',
                                    'success'
                                )
                            } else {
                                Swal.fire(
                                    'Failed!',
                                    'Your file has not been deleted.',
                                    'error'
                                )
                            }
                        } else {
                            Swal.fire(
                                'Failed!',
                                'Your file has not been deleted.',
                                'error'
                            )
                        }
                    })
            }
            })
        });
    };
</script>
@endpush