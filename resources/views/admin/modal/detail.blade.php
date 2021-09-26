<div class="modal" tabindex="-1" role="dialog" id="detailModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Details</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
            </div>
            <div class="modal-body">
                <div class="text-center alert alert-danger" id="detail-alert" style="display: none;"></div><br>
                <form id="detailForm">
                    <input type="hidden" name="tracking_number" value="{{$id}}">
                    <div class="form-group">
                        <label for="tracking">Current Status</label>
                        <select for="detail" class="form-control" name="current_status" id="current_status">
                            <option value="Picked Up">Picked Up</option>
                            <option value="In-Transit">In-Transit</option>
                            <option value="Out For Deliever">Out For Deliever</option>
                            <option value="Delivery Exception">Delivery Exception</option>
                            <option value="Delivered">Delivered</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="tracking">Current Destination</label>
                        <input for="detail" type="text" name="current_destination" class="form-control" placeholder="Current Destination" required>
                    </div>
                    <div class="form-group">
                        <label for="tracking">Note</label>
                        <input for="detail" type="text" name="note" class="form-control" placeholder="Note" required>
                    </div>
                    <div class="form-group">
                        <label for="tracking">Description</label>
                        <textarea for="detail" class="form-control" name="description" id="description" cols="30" rows="10" required style="resize: none;" placeholder="Enter item description"></textarea>
                    </div>
                    <div class="form-group">
                        <div class='input-group date datetimepicker1' id='datetimepicker1'>
                            <input for="detail" type='text' class="form-control" id="date" placeholder="Date" name="date" />
                            <span class="input-group-addon" style="max-height: 10px;">
                                <span class="ti-calendar"></span>
                            </span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="tracking">Time</label>
                        <input for="detail" type="text" name="time" class="form-control" placeholder="Time" required>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" id="detailButton" data-url="{{route('add-details')}}" data-type="detail">Add</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
