<div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Add Employee</h4>
        </div>
        <?= $this->Form->create($employee, ['type'=>'file', 'id'=>'form'])?>
        <div class="modal-body">

            <div class="form-group">
                <label for="" class="control-label col-xs-4"><h5><b>Select Department :</b></h5></label>
                <div class="input-group col-xs-7">
                    <?php  echo $this->Form->control(' ', ['empty'=>'Select Department', 'name'=>'department_id', 'type'=>'select', 'options'=>$departments, 'class'=>'form-control']);
                    ?>
                </div>
            </div>

            <div class="form-group">
                <label for="" class="control-label col-xs-4"><h5><b>Select Designation :</b></h5></label>
                <div class="input-group col-xs-7">
                    <?php echo $this->Form->control(' ', ['empty'=>'Select Designation ', 'name'=>'designation_id', 'type'=>'select', 'options'=>$designations, 'class'=>'form-control']);
                    ?>
                </div>
            </div>    


            <div class="form-group">
                <label for="" class="control-label col-xs-4"><h5><b>Name :</b></h5></label>
                <div class="input-group col-xs-7">
                    <?php echo $this->Form->control(' ', ['name'=>'name', 'class'=>'form-control']);?>
                </div>
            </div>


            <div class="form-group">
                <label for="" class="control-label col-xs-4"><h5><b>Email :</b></h5></label>
                <div class="input-group col-xs-7">
                    <?php echo $this->Form->control(' ', ['name'=>'email', 'class'=>'form-control']);?>
                </div>
            </div>

            <div class="form-group">
                <label for="" class="control-label col-xs-4"><h5><b>Mobile :</b></h5></label>
                <div class="input-group col-xs-7">
                     <?php echo $this->Form->control(' ', ['type'=>'number', 'length'=>'10', 'min'=>'10', 'max'=>'9876543210', 'name'=>'mobile', 'class'=>'form-control']);?>
                   
                </div>
            </div>

            <div class="form-group">
                <label for="" class="control-label col-xs-4"><h5><b>Birth Date :</b></h5></label>
                <div class="input-group col-xs-7">
                    <?php echo $this->Form->control(' ', ['type'=>'text', 'name'=>'birtdate', 'class'=>'form-control']);?>
                </div>
            </div>

            <div class="form-group">
                <label for="" class="control-label col-xs-4"><h5><b>Gender :</b></h5></label>
                <div class="input-group col-xs-7">            
                    <?php echo $this->Form->control(' ', ['empty'=>'Select Gender ', 'name'=>'gender', 'type'=>'select', 'options'=>array('1'=>'Male', '2'=>'Female'), 'class'=>'form-control']);?>
                </div>
            </div>

            <div class="form-group">
                <label for="" class="control-label col-xs-4"><h5><b>Address :</b></h5></label>
                <div class="input-group col-xs-7">
                    <?php echo $this->Form->control(' ', ['type'=>'textarea', 'name'=>'address', 'class'=>'form-control']);?>
                </div>
            </div>

            <div class="form-group">
                <label for="" class="control-label col-xs-4"><h5><b>Hobby :</b></h5></label>
                <div class="input-group col-xs-7">
                    <?php echo $this->Form->control(' ', ['type'=>'select', 'name'=>'hobby', 'multiple'=>'""', 'options'=>$options, 'class'=>'form-control']);?>
                </div>
            </div>

            <div class="form-group">
                <label for="" class="control-label col-xs-4"><h5><b>Image :</b></h5></label>
                <div class="input-group col-xs-7">
                    <?php
                    echo $this->Form->control(' ', ['type'=>'file', 'name'=>'image', 'class'=>'form-control',
                        'data-buttontext'=>'Select file',
                        'data-buttonname'=>'btn-default',
                        'data-max-size'=>'2048',
                        'accept'=>'image/x-png,image/gif,image/jpeg/image-jpg',
                        'label'=>'Update Profile Picture']);
                    ?>
                </div>
            </div>

        </div>
        <div class="modal-footer">

            <?= $this->Form->button(__('Save'), array('formnovalidate'=>true, 'class'=>'btn btn-primary'))?>
            <?= $this->Form->button('Reset', array('type'=>'reset', 'class'=>'btn btn-default'));?>
        </div>
        <?= $this->Form->end()?>
    </div>
</div>