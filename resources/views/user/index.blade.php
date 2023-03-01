@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Users</h3>
            {{-- add btn --}}
            <div class="card-tools">
                <a href="{{route('user.create')}}" class="btn btn-primary btn-sm">
                    <i class="fas fa-plus"></i>
                    Add User
                </a>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-striped projects">
                <thead>
                    <tr>
                        <th style="width: 1%">
                            #
                        </th>
                        <th style="width: 20%">
                            Full Name
                        </th>
                        <th style="width: 30%">
                            Email
                        </th>
                        <th style="width: 20%" class="text-center">
                            Actions
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @if (count($users) == 0)
                    <tr>
                        <td colspan="4" class="text-center">No data found</td>
                    </tr>
                    @endif
                    @foreach ($users as $user)
                    <tr id="{{$user->id}}">
                        <td>{{$loop->index+1}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td class="w-20">
                            <span class="btn btn-info btn-sm showBtn d-none" data-toggle="modal"
                                data-target="#show-contact-info">
                                <i class="fas fa-eye"></i>
                            </span>
                            <a href="{{ route('user.edit', $user->id) }}">
                                <span class="btn btn-primary btn-sm">
                                    <i class="fas fa-pencil-alt"></i>
                                </span>
                            </a>
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
{{-- @include('contact.show_info_modal') --}}
@endsection

@push('js')
<script>
    $(document).ready(function() {
            handleShowInfo();
            handleDeleteBtn();
        });

    function handleShowInfo() {
        $('.showBtn').click(function() {
            var tr = $(this).closest('tr');
            let id = $(this).closest('tr').attr('id');
           axios.get('/user/contact/'+id)
                .then(function(response) {
                    let data = response.data.data;
                    $('#details_name').text(data.name);
                    $('#details_email').text(data.email);
                    $('#details_message').text(data.message);

                    tr.find('.status').html('<span class="badge badge-success">Read</span>');
                })
                .catch(function(error) {
                    console.log(error);
                });

        });
    }

    function handleDeleteBtn() {
        $('.deleteBtn').click(function() {
            var tr = $(this).closest('tr');
            let id = tr.attr('id');
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
                axios.delete('user/'+id+'/delete')
                .then(function (response) {
                    tr.remove();
                        Swal.fire(
                        'Deleted!',
                        'Your file has been deleted.',
                        'success'
                        )
                    })
                }
                else{
                    Swal.fire(
                    'Cancelled',
                    'Your imaginary file is safe :)',
                    'error'
                    )
                }
            })
        })
    }
</script>
@endpush
