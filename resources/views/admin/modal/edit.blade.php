<div class="modal" tabindex="-1" role="dialog" id="editModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Shipment</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
            </div>
            <div class="modal-body">
                <div class="text-center alert alert-danger" id="edit-alert" style="display: none;"></div><br>
                <form id="editForm">
                    <input for="editTracking" type="hidden" name="id" id="editId">
                    {{-- <div class="form-group">
                        <label for="tracking">Tracking Number</label>
                        <input type="text" name="tracking_number" id="tracking" class="form-control" placeholder="Tracking Number" required for="edit">
                    </div> --}}
                    <div class="form-group">
                        <label for="tracking">Destination</label>
                        <input for="editTracking" type="text" name="final_destination" class="form-control" placeholder="Destination" id="destination" required for="edit">
                    </div>
                    <div class="form-group">
                        <label for="tracking">Product Features</label>
                        <input for="editTracking" type="text" name="product_features" class="form-control" id="features" placeholder="Product Features" required for="edit">
                    </div>
                    <div class="form-group">
                        <label for="tracking">Postal Product</label>
                        <select for="editTracking" name="postal_product" id="postal" class="form-control">
                            <option value="Envelopes">Envelopes</option>
                            <option value="Free Shipping Supplies">Free Shipping Supplies</option>
                            <option value="Priority Mail">Priority Mail</option>
                            <option value="International Shipping">International Shipping</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="tracking">Sender</label>
                        <input for="add" type="text" name="sender" class="form-control" id="sender" placeholder="Sender" required>
                    </div>
                    <div class="form-group">
                        <label for="tracking">Sender's Address</label>
                        <input for="add" type="text" name="sender_address" class="form-control" id="sender_address" placeholder="Sender's Address" required>
                    </div>
                    <div class="form-group">
                        <label for="tracking">Receiver</label>
                        <input for="add" type="text" name="receiver" class="form-control" id="receiver" placeholder="Receiver" required>
                    </div>
                    <div class="form-group">
                        <label for="tracking">Receiver's Address</label>
                        <input for="add" type="text" name="receiver_address" class="form-control" id="receiver_address" placeholder="Receiver's Address" required>
                    </div>
                    
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" id="editButton" data-url="{{route('edit-tracking')}}" data-type="editTracking">Save</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
