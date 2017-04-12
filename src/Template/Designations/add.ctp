<div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Add Designation</h4>
        </div>
        <?= $this->Form->create($designation)?>
        <div class="modal-body">
            <div  class="add_div">
                <div class="form-group">
                    <label for="" class="control-label col-xs-4"><h5><b>Name :</b></h5></label>
                    <div class="input-group input-group m-t-10 ">
                        <?php echo $this->Form->control(' ', array('type'=>'text', 'name'=>'name[][name]', 'id'=>'name', 'class'=>'form-control'));?>
                        <span class="input-group-btn">
                            <button type="button" class="btn btn-primary" title="Add More" onclick='Add_More() ;'><i class="fa fa-plus"></i></button>
                        </span>
                    </div>
                    
                </div>
                <div  id="add_div"> </div>
            </div>
        </div>
        <div class="modal-footer">
            <?= $this->Form->button(__('Save'), array('formnovalidate'=>true, 'class'=>'btn btn-primary'))?>
            <?= $this->Form->button('Reset', array('type'=>'reset', 'class'=>'btn btn-default'));?>
        </div>
        <?= $this->Form->end()?>
    </div>
</div>

<script>
    function Add_More ()
    {
        var maxLimit = 2 ;
        var start = 1 ;

        if ( start <= maxLimit )
        {
            $ ( ".add_div" ).append ( '<div id="add_more" ><div class="form-group "><label for="" class="control-label col-xs-4"><h5><b>Name :</b></h5></label><div class="input-group input-group m-t-10"><?php echo $this->Form->control(' ', array('type'=>'text', 'name'=>'name[][name]', 'required'=>'required', 'oninvalid'=>'setCustomValidity("Enter Designation Name")', 'oninput'=>'setCustomValidity("")', 'class'=>'form-control '));?><span class="input-group-btn"><button type="button" class="btn btn-danger" title="Remove" onclick="Remove_More() ;"><i class="fa fa-minus"></i></button></span><br></div></div></div>' ) ;
            start++ ;
        }
    }

    function Remove_More ( )
    {
        $ ( "#add_more" ).remove ( ) ;
    }


</script>



