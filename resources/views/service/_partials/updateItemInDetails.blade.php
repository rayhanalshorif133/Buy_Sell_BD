<div class="modal fade" id="updateItem" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">
                    Update Sevice Details
                </h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('user.service.update_details') }}" class="" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="service_details_id" id="service_details_id">
                    <input type="hidden" name="service_id" value="{{ $serviceID }}">
                    <div class="form-group row">
                        <label for="service_item" class="col-sm-2 col-form-label required">
                            Service item
                        </label>
                        <div class="col-sm-10">
                            {{-- option --}}
                            <select name="service_name_item" id="update_service_item" class="form-control">
                                <option value="" selected disabled>Select Service Item</option>
                                @foreach ($serviceItems as $item)
                                <option value="{{ $item }}" class="text-capitalize">
                                    {{ $item }}
                                </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="title" class="col-sm-2 col-form-label required">Title</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="update_title" placeholder="Enter title" name="title">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="image" class="col-sm-2 col-form-label">Image</label>
                        <div class="col-sm-10">
                            <input type="file" class="form-control" id="image" placeholder="Image" name="image">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="description" class="col-sm-2 col-form-label required">Description</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" id="update_description" name="description"
                                placeholder="Description"></textarea>
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
