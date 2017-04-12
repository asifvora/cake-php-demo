<?php // $pageTitle = $this->cell('Navigation::pageTitle'); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title><?= $this->fetch('title'); ?></title>

        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- header css -->
        <?= $this->element('header_css')?>
        <!-- end header css -->

    </head>
    <body>

        <!-- Start page-wrapper -->
        <div id="page-wrapper">            
            <!-- Top Bar Start -->
            <?= $this->element('topbar')?>
            <!-- Top Bar End -->

            <!-- Page content start -->
            <div class="page-contentbar">

                <!--left navigation start-->
                <?= $this->element('leftbar')?>
                <!--left navigation end-->


                <!-- START PAGE CONTENT -->
                <div id="page-right-content">
                    <?= $this->Flash->render()?>
                    <!-- start container -->
                    <div class="container">
                        <div class="row">
                            <!-- fetch contain -->
                            <?= $this->fetch('content')?>
                            <!-- end fetch contain -->
                            <!-- Modal -->
                            <div class="modal fade" id="myModal" role="dialog">
                            </div>
                        </div>
                        <!--end row -->
                    </div>
                    <!-- end container -->


                    <!--  footer -->
                    <div class="footer">                        
                        <div>
                            <strong>My Admin</strong> - Copyright &copy; <?php echo date('Y');?>
                        </div>
                    </div> 
                    <!-- end footer -->

                </div>
                <!-- End PAGE CONTENT -->

            </div>
            <!-- end Page content -->
        </div>
        <!-- End page-wrapper -->

        <!-- footer js -->
        <?= $this->element('foooter_js')?>
        <!-- end footer js-->

    </body>
</html>