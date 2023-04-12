@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Service</h3>
            <a href="#" class="btn btn-sm btn-outline-info float-right addBtn" data-toggle="modal"
                data-target="#modal-add-and-update-service">+ Add</a>
        </div>
        <div class="card-body">
            <table class="table table-striped projects">
                <thead>
                    <tr>
                        <th style="width: 1%">
                            #
                        </th>
                        <th style="width: 20%">
                            Image
                        </th>
                        <th style="width: 30%">
                            Title
                        </th>
                        <th>
                            Description
                        </th>
                        <th style="width: 20%" class="text-center">
                            Actions
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @if (count($services) == 0)
                    <tr>
                        <td colspan="5" class="text-center">No data found</td>
                    </tr>
                    @endif
                    @foreach ($services as $service)
                    <tr id="{{$service->id}}">
                        <td>{{$loop->index+1}}</td>
                        <td>
                            <img src="{{asset($service->image)}}" alt="" width="100px">
                        </td>
                        <td>
                            {{$service->title}}
                        </td>
                        <td>
                            {{-- show 150 word --}}
                            <span class="descriptionLess">{!! Str::limit($service->description,150) !!}</span>
                            <span class="d-none getDescription">{!! $service->description !!}</span>
                            @if (strlen($service->description) > 150)
                            <span style="color: blue" class="readMore btn">Read More</span>
                            <span style="color: red" class="readLess btn d-none">Read Less</span>
                            @endif
                        </td>
                        <td class="w-20">
                            <a href="{{route('user.service.detailsView',$service->id)}}">
                                <span class="btn btn-success btn-sm" title="View">
                                    <i class="fas fa-eye"></i>
                                </span>
                            </a>                            
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
@include('service.create_and_update_modal')
@endsection

@push('js')
<script>
    $(document).ready(function () {
        handleReadMore();
        handleAddBtnClick();
        handleEditBtnClick();
        handleDeleteBtnClick();
    });


    function handleReadMore() {
        $('.readMore').on('click', function () {
            var description = $(this).closest('td').find('.getDescription').text();
            $(this).closest('td').find('.descriptionLess').html(description);
            $(this).closest('td').find('.readMore').addClass('d-none');
            $(this).closest('td').find('.readLess').removeClass('d-none');

        });
        $('.readLess').on('click', function () {
            var description = $(this).closest('td').find('.getDescription').text();
            $(this).closest('td').find('.descriptionLess').html(description.substr(0, 150));
            $(this).closest('td').find('.readMore').removeClass('d-none');
            $(this).closest('td').find('.readLess').addClass('d-none');
        });
    }

    function handleAddBtnClick() {
       $('.addBtn').on('click', function () {
            $('#for_update').html('');
            $('.service-title').text('Add New Service');
            $('#title').val('');
            $('#description').val('');
        });
    }
    function handleEditBtnClick() {
       $('.editBtn').on('click', function () {
        tr = $(this).closest('tr');
        var id = tr.attr('id');
        $('#for_update').html(`<input type="hidden" name="service_id" value="${id}">`);
        $('.service-title').text('Update Service');
        $('#title').val(tr.find('td:eq(2)').text().trim());
        $('#description').val(tr.find('.getDescription').text().trim());
        });
    }

    function handleDeleteBtnClick(){
        $('.deleteBtn').on('click',function(){
        tr = $(this).closest('tr');
        var id = tr.attr('id');
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
        axios.delete(`/user/service/${id}/delete/`)
        .then(function (response) {
        tr.remove();
        Swal.fire(
        'Deleted!',
        'Your file has been deleted.',
        'success'
        )
        })
        }else{
        Swal.fire(
        'Cancelled',
        'Your imaginary file is safe :)',
        'error'
        )
        }
        })
        });
    }
</script>
@endpush
