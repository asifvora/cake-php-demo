<div class="col-sm-12">
    <h4 class="header-title"><a>Users</a></li></h4>
    <div class="col-sm-12">
        <div class="col-sm-10"> </div>
        <div class="col-sm-2">
            <button data-toggle="modal" onclick="AddModel () ;" data-target="#myModal" class="m-t-10 btn btn-lg btn-primary btn-block waves-effect m-t-20 waves-light">
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
                                <th>Email</th>  
                                <th>Username</th>  
                                <th>Role</th>                               
                                <td><b>Action</b></td>
                            </tr>
                        </thead>

                        <tbody>
                            <?php foreach($users as $user):?>
                                <tr>
                                    <td><?= $this->Number->format($user->id)?></td>
                                    <td><?= h($user->name)?></td>
                                    <td><?= h($user->email)?></td>
                                    <td><?= h($user->username)?></td>
                                    <td><?= h($user->role)?></td>
                                    <td class="actions">
                                        <button type="button" id="btn" class="btn btn-info btn-xs" data-toggle="modal" onclick="ViewModel ( '<?= h($user->id)?>' )" data-target="#myModal">View</button>
                                        <button type="button" class="btn btn-success btn-xs" data-toggle="modal" onclick="EditModel ( '<?= h($user->id)?>' )" data-target="#myModal">Edit</button>
                                        <?= $this->Form->postLink(__('Delete'), ['action'=>'delete', $user->id], ['confirm'=>__('Are you sure you want to delete # {0}?', $user->id), 'class'=>'btn btn-danger btn-xs'])?>
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


</div>

<script>
    /**
     * Add Data using Model
     * @param {type} did
     * @returns {undefined}*
     */
    function AddModel (  )
    {
        $ ( '#myModal' ).html ( '<div class="modal-dialog"><br><br><br><br><br><br><br><br><center><img src="/img/loader/spinner.gif" alt="loader"><center></div>' ) ; //Loading loader
        $ ( '#myModal' ).load ( 'users/add/' ) ;
    }

    /**
     * View Data using Model
     * @param {type} did
     * @returns {undefined}*
     */
    function ViewModel ( id )
    {
        $ ( '#myModal' ).html ( '<div class="modal-dialog"><br><br><br><br><br><br><br><br><center><img src="/img/loader/spinner.gif" alt="loader"><center></div>' ) ; //Loading loader
        $ ( '#myModal' ).load ( 'users/view/' + id ) ;
    }



    /**
     * Edit Data using Model
     * @param {type} did
     * @returns {undefined}*
     */
    function EditModel ( id )
    {
        $ ( '#myModal' ).html ( '<div class="modal-dialog"><br><br><br><br><br><br><br><br><center><img src="/img/loader/spinner.gif" alt="loader"><center></div>' ) ; //Loading loader
        $ ( '#myModal' ).load ( 'users/edit/' + id ) ;
    }
</script>