<div class="modal" tabindex="-1" role="dialog" id="changePassword">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Change Password</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
            </div>
            <div class="modal-body">
                <div class="text-center alert alert-danger" id="password-alert" style="display: none;"></div><br>
                <form id="passwordForm">
                    <div class="form-group">
                        <label for="tracking">Old Password</label>
                        <input for="password" type="password" name="old_password" class="form-control" placeholder="Old Password" required data-type="password">
                    </div>
                    <div class="form-group">
                        <label for="tracking">New Password</label>
                        <input for="password" type="password" name="new_password" class="form-control" placeholder="New Password" required data-type="password">
                    </div>
                    <div class="form-group">
                        <label for="tracking">Confirm Password</label>
                        <input for="password" type="password" name="new_password_confirmation" class="form-control" placeholder="Confirm Password" required data-type="password">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" id="changePasswordButton" data-url="{{route('change-password')}}" data-type="password">Change</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
