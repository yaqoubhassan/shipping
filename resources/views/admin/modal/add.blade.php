<div class="modal" tabindex="-1" role="dialog" id="addModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Shipment</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
            </div>
            <div class="modal-body">
                <div class="text-center alert alert-danger" id="add-alert" style="display: none;"></div><br>
                <form id="addForm">
                    <div class="form-group">
                        <label for="tracking">Tracking Number</label>
                        <input for="add" type="text" name="tracking_number" class="form-control" placeholder="Tracking Number" required>
                    </div>
                    <div class="form-group">
                        <label for="tracking">Destination</label>
                        <input for="add" type="text" name="final_destination" class="form-control" placeholder="Destination" required>
                    </div>
                    <div class="form-group">
                        <label for="tracking">Product Features</label>
                        <input for="add" type="text" name="product_features" class="form-control" placeholder="Product Features" required>
                    </div>
                    <div class="form-group">
                        <label for="tracking">Postal Product</label>
                        <select name="postal_product" id="postal_product" class="form-control">
                            <option value="Envelopes">Envelopes</option>
                            <option value="Free Shipping Supplies">Free Shipping Supplies</option>
                            <option value="Priority Mail">Priority Mail</option>
                            <option value="International Shipping">International Shipping</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="tracking">Sender</label>
                        <input for="add" type="text" name="sender" class="form-control" placeholder="Sender" required>
                    </div>
                    <div class="form-group">
                        <label for="tracking">Sender's Address</label>
                        <input for="add" type="text" name="sender_address" class="form-control" placeholder="Sender's Address" required>
                    </div>
                    <div class="form-group">
                        <label for="tracking">Receiver</label>
                        <input for="add" type="text" name="receiver" class="form-control" placeholder="Receiver" required>
                    </div>
                    <div class="form-group">
                        <label for="tracking">Receiver's Address</label>
                        <input for="add" type="text" name="receiver_address" class="form-control" placeholder="Receiver's Address" required>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" id="addButton" data-url="{{route('add-tracking')}}" data-type="add">Add</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
