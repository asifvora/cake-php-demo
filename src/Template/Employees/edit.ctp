<div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Edit Employee</h4>
        </div>
         <?= $this->Form->create($employee, ['type'=>'file', 'id'=>'form'])?>
        <div class="modal-body">

            <div class="form-group">
                <label for="" class="control-label col-xs-4"><h5><b>Id :</b></h5></label>
                <div class="input-group col-xs-7">
                    <?php echo $this->Form->control(' ', ['name'=>' ', 'class'=>'form-control', 'value'=>$employee->id, 'readonly'=>'readonly']);?>
                </div>
            </div>


            <div class="form-group">
                <label for="" class="control-label col-xs-4"><h6><b> Department :</b></h6></label>
                <div class="input-group col-xs-7">

                    <h5><?php echo $this->Form->control(' ', ['empty'=>'Select Department', 'name'=>'department_id', 'options'=>$departments, 'class'=>'form-control', 'value'=>$employee->department_id]);?></h5>
                </div>
            </div>

            <div class="form-group">
                <label for="" class="control-label col-xs-4"><h6><b> Designation :</b></h6></label>
                <div class="input-group col-xs-7">
                    <h5><?php echo $this->Form->control(' ', ['empty'=>'Select Designation', 'name'=>'department_id', 'type'=>'select', 'options'=>$designations, 'class'=>'form-control', 'value'=>$employee->department_id]);?></h5>
                </div>
            </div>

            <div class="form-group">
                <label for="" class="control-label col-xs-4"><h5><b>Name :</b></h5></label>
                <div class="input-group col-xs-7">
                    <?php echo $this->Form->control(' ', ['name'=>'name', 'class'=>'form-control', 'value'=>$employee->name]);?>
                </div>
            </div>


            <div class="form-group">
                <label for="" class="control-label col-xs-4"><h5><b>Email :</b></h5></label>
                <div class="input-group col-xs-7">
                    <?php echo $this->Form->control(' ', ['name'=>'email', 'class'=>'form-control', 'value'=>$employee->email]);?>
                </div>
            </div>

            <div class="form-group">
                <label for="" class="control-label col-xs-4"><h6><b> Mobile :</b></h6></label>
                <div class="input-group col-xs-7">
                    <?php echo $this->Form->control(' ', ['type'=>'number', 'length'=>'10', 'min'=>'10', 'max'=>'9876543210', 'name'=>'mobile', 'class'=>'form-control', 'value'=>$employee->mobile]);?>
                </div>
            </div>


            <div class="form-group">
                <label for="" class="control-label col-xs-4"><h6><b> Birth Date :</b></h6></label>
                <div class="input-group col-xs-7">
                    <?php echo $this->Form->control(' ', ['name'=>'birtdate', 'class'=>'form-control', 'value'=>$employee->birtdate]);?>
                </div>
            </div>


            <div class="form-group">
                <label for="" class="control-label col-xs-4"><h6><b> Gender :</b></h6></label>
                <div class="input-group col-xs-7">
                    <h5><?php echo $this->Form->control(' ', ['empty'=>'Select Gender', 'name'=>'gender', 'type'=>'select', 'options'=>array('Male'=>'Male', 'Female'=>'Female'), 'class'=>'form-control', 'value'=>$employee->gender]);?></h5>
                </div>
            </div>

            <div class="form-group">
                <label for="" class="control-label col-xs-4"><h6><b> Address :</b></h6></label>
                <div class="input-group col-xs-7">
                    <?php echo $this->Form->control(' ', ['type'=>'textarea', 'name'=>'address', 'class'=>'form-control', 'value'=>$employee->address]);?>
                </div>
            </div>

            <div class="form-group">
                <label for="" class="control-label col-xs-4"><h6><b> Hobby :</b></h6></label>
                <div class="input-group col-xs-7">
                    <?php echo $this->Form->control(' ', ['type'=>'select', 'name'=>'hobby', 'multiple'=>'""', 'options'=>$options, 'value'=>$select, 'class'=>'form-control']);?>
                </div>
            </div>

            <div class="form-group">
                <label for="" class="control-label col-xs-4"><h6><b> Image :</b></h6></label>
                <div class="input-group col-xs-7">
                    <?php
                    echo $this->Form->control(' ', ['type'=>'file', 'name'=>'image', 'label'=>'Update Profile Picture','class'=>'form-control', 'value'=>$employee->image]);
                    ?><br><br><br>
                    <a class="fancybox-effects-d" href="/img/upload/<?php echo $employee->image;?>" title="<?= h($employee->name)?>">
                        <img src="/img/upload/<?php echo $employee->image;?>" height="100" width="100" alt="Image">
                    </a>
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

<script type="text/javascript">
    
    
    $ ( document ).ready ( function () {
        /*
         *  Simple image gallery. Uses default settings
         */

        $ ( '.fancybox' ).fancybox () ;

     

        // Remove padding, set opening and closing animations, close if clicked and disable overlay
        $ ( ".fancybox-effects-d" ).fancybox ( {
            padding : 0 ,
            openEffect : 'elastic' ,
            openSpeed : 150 ,
            closeEffect : 'elastic' ,
            closeSpeed : 150 ,
            closeClick : true ,
            helpers : {
                overlay : null
            }
        } ) ;

       

        $ ( '.fancybox-thumbs' ).fancybox ( {
            prevEffect : 'none' ,
            nextEffect : 'none' ,
            closeBtn : false ,
            arrows : false ,
            nextClick : true ,
            helpers : {
                thumbs : {
                    width : 50 ,
                    height : 50
                }
            }
        } ) ;

       

    } ) ;
</script>