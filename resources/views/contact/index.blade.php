@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Contacts</h3>
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
                        <th>
                            Message
                        </th>
                        <th style="width: 8%" class="text-center">
                            Status
                        </th>
                        <th style="width: 20%" class="text-center">
                            Actions
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @if (count($contacts) == 0)
                    <tr>
                        <td colspan="6" class="text-center">No data found</td>
                    </tr>
                    @endif
                    @foreach ($contacts as $contact)
                    <tr id="{{$contact->id}}">
                        <td>{{$loop->index+1}}</td>
                        <td>{{$contact->name}}</td>
                        <td>{{$contact->email}}</td>
                        <td>{{Str::limit($contact->message,90)}}</td>
                        <td class="status">
                            @if ($contact->is_read == 0)
                            <span class="badge badge-danger">Unread</span>
                            @else
                            <span class="badge badge-success">Read</span>
                            @endif
                        </td>
                        <td class="w-20">
                            <span class="btn btn-info btn-sm showBtn" data-toggle="modal"
                                data-target="#show-contact-info">
                                <i class="fas fa-eye"></i>
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
@include('contact.show_info_modal')
@endsection

@push('js')
<script>
    $(document).ready(function() {
            handleShowInfo();
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
</script>
@endpush
