<div class="modal fade" id="modal-add-and-update-whatwedo" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title whatWeDoTitle">Add New What We Do?</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('user.what-we-do.storeOrUpdate') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <span id="for_update"></span>
                    <div class="form-group">
                        <label for="image" class="required">Upload Image</label>
                        <input type="file" class="form-control" name="image" id="image"
                            placeholder="Upload what we do image">
                    </div>
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" name="title" id="title"
                            placeholder="Enter what we do title">
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea class="form-control" name="description" id="description"
                            placeholder="Enter what we do description"></textarea>
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
