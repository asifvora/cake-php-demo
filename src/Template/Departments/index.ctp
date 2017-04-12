<div class="col-sm-12">
    <h4 class="header-title"><a>Departments</a></h4>

    <div class="col-sm-10"> </div>
    <div class="col-sm-2">
        <button data-toggle="modal" onclick="AddModel();" data-target="#myModal" class="m-t-10 btn btn-lg btn-primary btn-block waves-effect m-t-20 waves-light">
            <i class="fa fa-plus"></i> Add New
        </button>
    </div><br>
    <div class="row p-t-50">
        <div class="col-sm-12">

            <div class="m-b-20 table-responsive">

                <table id="datatable-keytable" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>id</th>                         
                            <th>Name</th>                                            
                            <th>Created</th>
                            <th>Modified</th>
                            <td><b>Action</b></td>
                        </tr>
                    </thead>

                    <tbody>
                        <?php foreach($departments as $department):?>
                            <tr id='row<?= h($department->id)?>'>
                                <td><?= $this->Number->format($department->id)?></td>
                                <td><?= h($department->name)?></td>
                                <td><?= h($department->created)?></td>
                                <td><?= h($department->modified)?></td>
                                <td class="actions">
                                    <button type="button" id="btn" class="btn btn-info btn-xs" data-toggle="modal" onclick="ViewModel ( '<?= h($department->id)?>' )" data-target="#myModal">View</button>
                                    <button type="button" class="btn btn-success btn-xs" data-toggle="modal" onclick="EditModel ( '<?= h($department->id)?>' )" data-target="#myModal">Edit</button>
                                    <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" onclick="DeleteDepartment ( '<?= h($department->id)?>' )" data-target="#myModal">Delete</button>
                                </td>
                            </tr>
                        <?php endforeach;?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- end row -->
</div>
<!-- end col -->


<script>

 /**
     * Add Data using Model
     * @param {type} did
     * @returns {undefined}*
     */
    function AddModel (  )
    {
        $ ( '#myModal' ).html ( '<div class="modal-dialog"><br><br><br><br><br><br><br><br><center><img src="/img/loader/spinner.gif" alt="loader"><center></div>' ) ; //Loading loader
        $ ( '#myModal' ).load ( 'departments/add' ) ;
    }
    
    
    /**
     * View Data using Model
     * @param {type} did
     * @returns {undefined}*
     */
    function ViewModel ( id )
    {
        $ ( '#myModal' ).html ( '<div class="modal-dialog"><br><br><br><br><br><br><br><br><center><img src="/img/loader/spinner.gif" alt="loader"><center></div>' ) ; //Loading loader
        $ ( '#myModal' ).load ( 'departments/view/' + id ) ;
    }



    /**
     * Edit Data using Model
     * @param {type} did
     * @returns {undefined}*
     */
    function EditModel ( id )
    {
        $ ( '#myModal' ).html ( '<div class="modal-dialog"><br><br><br><br><br><br><br><br><center><img src="/img/loader/spinner.gif" alt="loader"><center></div>' ) ; //Loading loader
        $ ( '#myModal' ).load ( 'departments/edit/' + id ) ;
    }



    /**
     * Delete Department using ajax
     * @param {type} did
     * @returns {undefined}*
     */
    function DeleteDepartment ( did )
    {
        $ ( '#myModal' ).html ( '<div class="modal-dialog"><br><br><br><br><br><br><br><br><center><img src="/img/loader/spinner.gif" alt="loader"><center></div>' ) ; //Loading loader
        $.ajax ( {
            url : "/departments/delete_ajax" ,
            data : { id : did } ,
            type : 'POST' ,
            //dataType : 'JSON' ,
            success : function ( data )
            {
                console.log ( data ) ;
                $ ( '#myModal' ).html ( data ) ;
            } ,
            error : function ( data )
            {
                console.log ( data ) ;
                console.log ( 'Sorry Erorr in Ajax Call' ) ;
            }

        } ) ;
    }

    function DeleteDepartmentYes ( did )
    {

        $ ( '#myModal' ).html ( '<div class="modal-dialog"><br><br><br><br><br><br><br><br><center><img src="/img/loader/spinner.gif" alt="loader"><center></div>' ) ; //Loading loader

        $.ajax ( {
            url : "/departments/delete" ,
            data : { id : did } ,
            type : 'POST' ,
            //dataType : 'JSON' ,
            success : function ( data )
            {
                console.log ( data ) ;
                $ ( '#message' ).html ( '<div class="alert alert-success"><strong>Success!</strong> Record Succesfully Deleted...</div>' ) ;
                $ ( '#myModal' ).hide () ;
                $ ( '#row' + did ).hide () ;
                setTimeout ( function () {
                    $ ( '#message' ).html ( '' ) ;
                } , 3000 ) ;
            } ,
            error : function ( data )
            {
                console.log ( data ) ;
                console.log ( 'Sorry Erorr in Ajax Call' ) ;
            }

        } ) ;
    }




</script>


