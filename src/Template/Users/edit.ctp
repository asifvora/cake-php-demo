<div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Edit User</h4>
        </div>
        <?= $this->Form->create($user)?>
        <div class="modal-body">

            <div class="form-group">
                <label for="" class="control-label col-xs-4"><h5><b>Id :</b></h5></label>
                <div class="input-group col-xs-7">
                     <?php echo $this->Form->control(' ',['name'=>' ','class'=>'form-control','value'=>$user->id,'readonly'=>'readonly']); ?>
                </div>
            </div>


            <div class="form-group">
                <label for="" class="control-label col-xs-4"><h5><b>Name :</b></h5></label>
                <div class="input-group col-xs-7">
                    <?php echo $this->Form->control(' ',['name'=>'name','class'=>'form-control','value'=>$user->name]); ?>
                </div>
            </div>


            <div class="form-group">
                <label for="" class="control-label col-xs-4"><h5><b>Email :</b></h5></label>
                <div class="input-group col-xs-7">
                   <?php echo $this->Form->control(' ',['name'=>'email','class'=>'form-control','value'=>$user->email]); ?>
                </div>
            </div>

            <div class="form-group">
                <label for="" class="control-label col-xs-4"><h5><b>Username :</b></h5></label>
                <div class="input-group col-xs-7">
                   <?php echo $this->Form->control(' ',['name'=>'username','class'=>'form-control','value'=>$user->username]); ?>
                </div>
            </div>

            <div class="form-group">
                <label for="" class="control-label col-xs-4"><h5><b>Password :</b></h5></label>
                <div class="input-group col-xs-7">
                    <?php echo $this->Form->control(' ',['type'=>'password','name'=>'password','class'=>'form-control','value'=>$user->password]); ?>
                </div>
            </div>

            <div class="form-group">
                <label for="" class="control-label col-xs-4"><h5><b>Role :</b></h5></label>
                <div class="input-group col-xs-7">
                    <?php echo $this->Form->control(' ', ['empty'=>'Select Role ', 'name'=>'role', 'type'=>'select', 'options'=>array('Admin'=>'Admin', 'User'=>'User'), 'value'=>$user->role,'class'=>'form-control']);
                    ?>
                </div>
            </div>




        </div>
        <div class="modal-footer">
            <!--            <button class="btn btn-primary" type="submit" onclick="">Save</button>-->
            <?= $this->Form->button(__('Submit'), ['class'=>'btn btn-primary'])?>

            <!--            <button type="Reset" class="btn btn-default" >Reset</button>-->
        </div>
        <?= $this->Form->end()?>
    </div>
</div>