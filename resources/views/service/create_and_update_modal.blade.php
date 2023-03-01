<div class="modal fade" id="modal-add-and-update-service" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title service-title">Add New Service</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('user.service.storeOrUpdate') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <span id="for_update"></span>
                    <div class="form-group">
                        <label for="image" class="required">Upload Service Image</label>
                        <input type="file" class="form-control" name="image" id="image"
                            placeholder="Upload service image">
                    </div>
                    <div class="form-group">
                        <label for="title" class="required">Service Title</label>
                        <input type="text" class="form-control" name="title" id="title"
                            placeholder="Enter service title">
                    </div>
                    <div class="form-group">
                        <label for="description" class="required">Service Description</label>
                        <textarea class="form-control" name="description" id="description"
                            placeholder="Enter service description"></textarea>
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
