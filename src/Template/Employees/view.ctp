
<div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Employee Detail</h4>
        </div>
        <div class="modal-body">
            <div class="form-group">
                <label for="" class="control-label col-xs-4"><h6><b> Id :</b></h6></label>
                <div class="input-group col-xs-7">
                    <h5><?php echo $employee->id;?></h5>
                </div>
            </div>

           <div class="form-group">
                <label for="" class="control-label col-xs-4"><h6><b> Department :</b></h6></label>
                <div class="input-group col-xs-7">
                    <h5><?= $employee->has('department')?$this->Html->link($employee->department->name, ['controller'=>'Departments', 'action'=>'view', $employee->department->id]):''?></h5>
                </div>
            </div>




            <div class="form-group">
                <label for="" class="control-label col-xs-4"><h6><b> Designation :</b></h6></label>
                <div class="input-group col-xs-7">
                    <h5><?= $employee->has('designation')?$this->Html->link($employee->designation->name, ['controller'=>'Designations', 'action'=>'view', $employee->designation->id]):''?></h5>
                </div>
            </div>

            <div class="form-group">
                <label for="" class="control-label col-xs-4"><h6><b> Name :</b></h6></label>
                <div class="input-group col-xs-7">
                    <h5><?php echo $employee->name;?></h5>
                </div>
            </div>

            <div class="form-group">
                <label for="" class="control-label col-xs-4"><h6><b> Email :</b></h6></label>
                <div class="input-group col-xs-7">
                    <h5><?php echo $employee->email;?></h5>
                </div>
            </div>

            <div class="form-group">
                <label for="" class="control-label col-xs-4"><h6><b> Mobile :</b></h6></label>
                <div class="input-group col-xs-7">
                    <h5><?php echo $employee->mobile;?></h5>
                </div>
            </div>


            <div class="form-group">
                <label for="" class="control-label col-xs-4"><h6><b> Birth Date :</b></h6></label>
                <div class="input-group col-xs-7">
                    <h5><?php echo $employee->birtdate;?></h5>
                </div>
            </div>


            <div class="form-group">
                <label for="" class="control-label col-xs-4"><h6><b> Gender :</b></h6></label>
                <div class="input-group col-xs-7">
                    <h5><?php echo $employee->gender;?></h5>
                </div>
            </div>

            <div class="form-group">
                <label for="" class="control-label col-xs-4"><h6><b> Address :</b></h6></label>
                <div class="input-group col-xs-7">
                    <h5> <?php echo $this->Form->control(' ', ['type'=>'textarea', 'name'=>'address', 'class'=>'form-control','readonly'=>'readonly', 'value'=>$employee->address]);?></h5>
                </div>
            </div>

            <div class="form-group">
                <label for="" class="control-label col-xs-4"><h6><b> Hobby :</b></h6></label>
                <div class="input-group col-xs-7">
                    <h5><?php echo $employee->hobby;?></h5>
                </div>
            </div>

            <div class="form-group">
                <label for="" class="control-label col-xs-4"><h6><b> Image :</b></h6></label>
                <div class="input-group col-xs-7">
                    <a class="fancybox-effects-d" href="/img/upload/<?php echo $employee->image;?>" title="<?= h($employee->name)?>">
                        <img src="/img/upload/<?php echo $employee->image;?>" height="100" width="100" alt="Image">
                    </a>
                </div>
            </div>


            <div class="form-group">
                <label for="" class="control-label col-xs-4"><h6><b>Created :</b></h6></label>
                <div class="input-group col-xs-7">
                    <h5><?php echo $employee->created;?></h5>
                </div>
            </div>

            <div class="form-group">
                <label for="" class="control-label col-xs-4"><h6><b>Modified :</b></h6></label>
                <div class="input-group col-xs-7">
                    <h5><?php echo $employee->modified;?></h5>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>

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




