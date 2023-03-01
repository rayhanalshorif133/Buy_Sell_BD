<div class="modal fade" id="modal-add-and-update-slider" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title slider-title">Add New Slider</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('user.slider.storeOrUpdate') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <span id="for_update"></span>
                    <div class="form-group">
                        <label for="title" class="optional">Slider Title</label>
                        <input type="text" class="form-control" name="title" id="title"
                            placeholder="Enter slider title">
                    </div>
                    <div class="form-group">
                        <label for="description" class="optional">Slider Description</label>
                        <input type="text" class="form-control" name="description" id="description"
                            placeholder="Enter slider description">
                    </div>

                    <div class="form-group">
                        <label for="slider" class="required">Upload Slider Image</label>
                        <input type="file" class="form-control" name="image" id="slider"
                            placeholder="Upload slider image">
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
