<div class="modal fade" id="edit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Area</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="POST" id="edit-form" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="areaId" class="form-label">Postal Code</label>
                        <input name="id" class="form-control" id="edit_areaId" value="">
                    </div>
                    <div class="mb-3">
                        <label for="areaName" class="form-label">Area Name</label>
                        <input name="name" class="form-control" id="edit_areaName" value="">
                    </div>
                    <div class="mb-3">
                        <label for="areaAddress" class="form-label">Area Address</label>
                        <input name="address" class="form-control" id="edit_areaAddress" value="">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary text-white">Edit</button>
                </div>
            </form>
        </div>
    </div>
</div>