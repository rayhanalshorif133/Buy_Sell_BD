@extends('layouts.app')

@section('head')
<style>
    .table td,
    .table th {
        border: 1px dotted #eae9e9 !important;
    }

    .required::after {
        content: " *";
        color: red;
        font-weight: bold;
    }

    .optional::after {
        content: " (optional)";
        color: #999;
        font-weight: normal;
    }

    .tk::after {
        content: "৳";
        color: #000;
        font-weight: normal;
    }
</style>
@endsection

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Colors</h3>
            <div class="card-tools">
                <span class="btn btn-info btn-sm" data-toggle="modal" data-target="#addNewColor">
                    <i class="fas fa-plus"></i>
                    Add New
                </span>
            </div>
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th style="width: 1%">
                            #
                        </th>
                        <th style="width: 20%">
                            Name
                        </th>
                        <th style="width: 20%">
                            Code
                        </th>
                        <th style="width: 20%" class="text-left">
                            Actions
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($colors as $color)
                    <tr data-id="{{$color->id}}">
                        <td>
                            {{ $loop->iteration }}
                        </td>
                        <td>
                            {{ $color->name? $color->name : 'N/A' }}
                        </td>
                        <td>
                            <span class="badge badge-primary" style="background-color: {{ $color->code }};">{{
                                $color->code }}</span>
                        </td>
                        <td class="project-actions text-left">
                            <span class="btn btn-sm btn-outline-info editBtn"><i class="fas fa-pencil-alt"></i></span>
                            <span class="btn btn-sm btn-outline-success d-none checkBtn"><i
                                    class="fas fa-check"></i></span>
                            <span class="btn btn-sm btn-outline-danger deleteBtn"><i class="fas fa-trash"></i></span>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="4" class="text-center">No data found</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
<div class="modal fade" id="addNewColor" style="display: none;" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add New Color</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('user.color.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="code" class="required">Color</label>
                                <input type="color" class="form-control" name="color_code"
                                    placeholder="Enter color code">
                            </div>
                            <div class="col-md-6">
                                <label for="code">օʀ Code</label>
                                <input type="text" class="form-control" name="code" placeholder="Enter color code">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name" class="optional">Color Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Enter color name">
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
</div>
@endsection

@push('js')
<script>
    $(document).ready(function() {
            handleEditAndCheckBtn();
            handleDeleteBtn();

        });

    function handleEditAndCheckBtn(){
        $(".editBtn").on('click', function(){
            let tr = $(this).closest('tr');
            let id = tr.data('id');
            let name = tr.find('td:eq(1)').text();
            name = name.trim();
            let code = tr.find('td:eq(2)').text();
            tr.find('td:eq(1)').html(`<input type="text" class="form-control" id="name" value="${name}">`);

            let html = `
            <input type="color" class="form-control" id="code" value="${code}">
            `;
            tr.find('td:eq(2)').html(html);
            $(this).addClass('d-none');
            $(this).parent().find('.checkBtn').removeClass('d-none');
            handleCheckBtn(id);
        });
    }

    function handleCheckBtn(id){
        $(".checkBtn").on('click', function(){
            let tr = $(this).closest('tr');
            let name = tr.find('#name').val();
            let code = tr.find('#code').val();
            console.log(name, code);
            tr.find('td:eq(1)').html(name);
            if(code != undefined){
                tr.find('td:eq(2)').html(`<span class="badge badge-primary" style="background-color: ${code};">${code}</span>`);
                updateColor(id, name, code);
            }
            $(this).addClass('d-none');
            $(this).parent().find('.editBtn').removeClass('d-none');
        });
    }


    function updateColor(id, name, code){
        axios.post(`/user/color/${id}/update`,{
                name: name,
                code: code
            })
            .then(function (response) {
                console.log(response);
            });
    }


    function handleDeleteBtn(){
        $(".deleteBtn").on('click', function(){
            let tr = $(this).closest('tr');
            let id = tr.data('id');

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
                axios.delete(`/user/color/${id}/delete`)
                .then(function (response) {
                console.log(response);
                tr.remove();
                Swal.fire(
                'Deleted!',
                'Your file has been deleted.',
                'success'
                )
                });
                }  })

        });
    }
</script>
@endpush