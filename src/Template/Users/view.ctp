
<div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">User Detail</h4>
        </div>
        <div class="modal-body">
            <div class="form-group">
                <label for="" class="control-label col-xs-4"><h6><b>User Id :</b></h6></label>
                <div class="input-group col-xs-7">
                    <h5><?php echo $user->id;?></h5>
                </div>
            </div>
            <div class="form-group">
                <label for="" class="control-label col-xs-4"><h6><b> Name :</b></h6></label>
                <div class="input-group col-xs-7">
                    <h5><?php echo $user->name;?></h5>
                </div>
            </div>

            <div class="form-group">
                <label for="" class="control-label col-xs-4"><h6><b> Email :</b></h6></label>
                <div class="input-group col-xs-7">
                    <h5><?php echo $user->email;?></h5>
                </div>
            </div>
            
            <div class="form-group">
                <label for="" class="control-label col-xs-4"><h6><b> Username :</b></h6></label>
                <div class="input-group col-xs-7">
                    <h5><?php echo $user->username;?></h5>
                </div>
            </div>
            
<!--            <div class="form-group">
                <label for="" class="control-label col-xs-4"><h6><b> Password :</b></h6></label>
                <div class="input-group col-xs-7">
                    <h5><?php // echo $user->password;?></h5>
                </div>
            </div>-->
            
            <div class="form-group">
                <label for="" class="control-label col-xs-4"><h6><b> Role :</b></h6></label>
                <div class="input-group col-xs-7">
                    <h5><?php echo $user->role;?></h5>
                </div>
            </div>
            
            <div class="form-group">
                <label for="" class="control-label col-xs-4"><h6><b>Created :</b></h6></label>
                <div class="input-group col-xs-7">
                    <h5><?php echo $user->created;?></h5>
                </div>
            </div>

            <div class="form-group">
                <label for="" class="control-label col-xs-4"><h6><b>Modified :</b></h6></label>
                <div class="input-group col-xs-7">
                    <h5><?php echo $user->modified;?></h5>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>

    </div>
</div>







