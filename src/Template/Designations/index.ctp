<div class="col-sm-12">
    <h4 class="header-title"><a>Designations</a></li></h4>
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
                                <th>Created</th>
                                <th>Modified</th>
                                <td><b>Action</b></td>
                            </tr>
                        </thead>

                        <tbody>
                            <?php foreach($designations as $designation):?>
                                <tr>
                                    <td><?= $this->Number->format($designation->id)?></td>
                                    <td><?= h($designation->name)?></td>
                                    <td><?= h($designation->created)?></td>
                                    <td><?= h($designation->modified)?></td>
                                    <td class="actions">
                                        <button type="button" id="btn" class="btn btn-info btn-xs" data-toggle="modal" onclick="ViewModel ( '<?= h($designation->id)?>' )" data-target="#myModal">View</button>
                                        <button type="button" class="btn btn-success btn-xs" data-toggle="modal" onclick="EditModel ( '<?= h($designation->id)?>' )" data-target="#myModal">Edit</button>
                                        <?= $this->Form->postLink(__('Delete'), ['action'=>'delete', $designation->id], ['confirm'=>__('Are you sure you want to delete # {0}?', $designation->id), 'class'=>'btn btn-danger btn-xs'])?>
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
            $ ( '#myModal' ).load ( 'designations/add/' ) ;
        }

        /**
         * View Data using Model
         * @param {type} did
         * @returns {undefined}*
         */
        function ViewModel ( id )
        {
            $ ( '#myModal' ).html ( '<div class="modal-dialog"><br><br><br><br><br><br><br><br><center><img src="/img/loader/spinner.gif" alt="loader"><center></div>' ) ; //Loading loader
            $ ( '#myModal' ).load ( 'designations/view/' + id ) ;
        }



        /**
         * Edit Data using Model
         * @param {type} did
         * @returns {undefined}*
         */
        function EditModel ( id )
        {
            $ ( '#myModal' ).html ( '<div class="modal-dialog"><br><br><br><br><br><br><br><br><center><img src="/img/loader/spinner.gif" alt="loader"><center></div>' ) ; //Loading loader
            $ ( '#myModal' ).load ( 'designations/edit/' + id ) ;
        }
    </script>