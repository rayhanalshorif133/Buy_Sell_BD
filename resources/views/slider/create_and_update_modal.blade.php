<div class="modal fade" id="modal-add-and-update-slider" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title slider-title">Add New Banner</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('user.slider.storeOrUpdate') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <span id="for_update"></span>
                    <div class="form-group">
                        <label for="slider_category" class="required">Banner Category</label>
                        <select name="slider_category" id="slider_category" class="form-control">
                            <option value="membership">Membership</option>
                            <option value="service">Service</option>
                            <option value="property">Property</option>
                            <option value="ticket">Ticket</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="title" class="required">Banner Title</label>
                        <div class="input-group">
                            <input type="text" class="form-control" name="title[]" id="title" required placeholder="Enter slider title">
                            <div class="input-group-append appendNewLineTitle">
                                <span class="input-group-text">+</span>
                            </div>
                        </div>
                        <span class="appendTitleInput"></span>
                    </div>
                    <div class="form-group">
                        <label for="slider" class="required">Upload Banner Image</label>
                        <input type="file" class="form-control" name="image" id="slider" required
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


