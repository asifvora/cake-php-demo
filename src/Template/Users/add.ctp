<div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Add User</h4>
        </div>
        <?= $this->Form->create($user)?>
        <div class="modal-body">

           <div class="form-group">
                <label for="" class="control-label col-xs-4"><h5><b>Name :</b></h5></label>
                <div class="input-group col-xs-7">
                   <?php echo $this->Form->control(' ',['name'=>'name','class'=>'form-control']); ?>
                </div>
            </div>


            <div class="form-group">
                <label for="" class="control-label col-xs-4"><h5><b>Email :</b></h5></label>
                <div class="input-group col-xs-7">
                    <?php echo $this->Form->control(' ',['name'=>'email','class'=>'form-control']); ?>
                </div>
            </div>

            <div class="form-group">
                <label for="" class="control-label col-xs-4"><h5><b>Username :</b></h5></label>
                <div class="input-group col-xs-7">
                    <?php echo $this->Form->control(' ',['name'=>'username','class'=>'form-control']); ?>
                </div>
            </div>

            <div class="form-group">
                <label for="" class="control-label col-xs-4"><h5><b>Password :</b></h5></label>
                <div class="input-group col-xs-7">
                    <?php echo $this->Form->control(' ',['type'=>'password','name'=>'password','class'=>'form-control']); ?>
                </div>
            </div>

            <div class="form-group">
                <label for="" class="control-label col-xs-4"><h5><b>Role :</b></h5></label>
                <div class="input-group col-xs-7">
                    <?php echo $this->Form->control(' ', ['empty'=>'Select Role ', 'name'=>'role', 'type'=>'select', 'options'=>array('Admin'=>'Admin', 'User'=>'User'), 'class'=>'form-control']);
                    ?>
                </div>
            </div>




        </div>
        <div class="modal-footer">
               <?= $this->Form->button(__('Save'), array('formnovalidate'=>true,'class'=>'btn btn-primary'))?>
        </div>
        <?= $this->Form->end()?>
    </div>
</div>