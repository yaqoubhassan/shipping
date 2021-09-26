<div class="modal" tabindex="-1" role="dialog" id="deleteDetailModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Confirm Delete</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
            </div>
            <div class="modal-body">
                <input type="hidden" id="detailId">
                <p>Are you sure you want to delete this detail?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" id="confirmDeleteDetail" data-url="{{route('delete-detail')}}">Delete</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
