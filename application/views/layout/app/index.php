<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->
    <head>
        <meta charset="utf-8" />
        <title><?php echo (isset($meta['title']) ? $meta['title'] : $this->config->item('site_name')); ?></title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" type="text/css" href="<?php echo asset('global/plugins/font-awesome/css/font-awesome.min.css'); ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo asset('global/plugins/simple-line-icons/simple-line-icons.min.css'); ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo asset('global/plugins/bootstrap/css/bootstrap.min.css'); ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo asset('global/plugins/bootstrap-switch/css/bootstrap-switch.min.css'); ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo asset('global/plugins/datatables/datatables.min.css'); ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo asset('global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css'); ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo asset('global/plugins/bootstrap-daterangepicker/daterangepicker.min.css'); ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo asset('global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css'); ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo asset('global/plugins/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css'); ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo asset('global/plugins/bootstrap-summernote/summernote.css'); ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo asset('global/plugins/bootstrap-wysihtml5/wysiwyg-color.css'); ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo asset('global/css/components-md.min.css'); ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo asset('global/css/plugins.min.css'); ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo asset('layouts/layout4/css/layout.min.css'); ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo asset('layouts/layout4/css/themes/default.min.css'); ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo asset('layouts/layout4/css/custom.min.css'); ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo asset('global/plugins/sweetalert2/sweetalert2.min.css'); ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo asset('global/plugins/bootstrap-fileinput/bootstrap-fileinput.css'); ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo asset('global/plugins/sweetalert2/sweetalert2.min.css'); ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo asset('global/plugins/select2-4.0.3/dist/css//select2.css'); ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo asset('global/plugins/select2-materialize-master//select2-materialize.css'); ?>">

        <link rel="stylesheet" type="text/css" href="<?php echo asset('pages/css/profile.min.css'); ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo asset('apps/css/ticket.min.css'); ?>">
        


        <?php echo @$addtional_css; ?>

        <style type="text/css">
            .select2-container--default .select2-selection--multiple, .select2-container--default.select2-container--focus .select2-selection--multiple {
             margin-left: -43px;
            }
        </style>

        <link rel="shortcut icon" href="favicon.ico" /> 

        <!-- END FOOTER -->
        <!--[if lt IE 9]>
        <script src="/assets/global/plugins/respond.min.js"></script>
        <script src="/assets/global/plugins/excanvas.min.js"></script> 
        <![endif]-->
        <!-- BEGIN CORE PLUGINS -->

        <script type="text/javascript" src="<?php echo asset('global/plugins/jquery.min.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo asset('global/plugins/bootstrap/js/bootstrap.min.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo asset('global/plugins/js.cookie.min.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo asset('global/plugins/jquery-slimscroll/jquery.slimscroll.min.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo asset('global/plugins/jquery.blockui.min.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo asset('global/plugins/uniform/jquery.uniform.min.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo asset('global/plugins/bootstrap-switch/js/bootstrap-switch.min.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo asset('global/plugins/jquery-validation/js/jquery.validate.min.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo asset('global/plugins/jquery-validation/js/additional-methods.min.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo asset('global/plugins/moment.min.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo asset('global/plugins/bootstrap-daterangepicker/daterangepicker.min.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo asset('global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo asset('global/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo asset('global/plugins/morris/morris.min.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo asset('global/plugins/morris/raphael-min.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo asset('global/plugins/counterup/jquery.waypoints.min.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo asset('global/plugins/counterup/jquery.counterup.min.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo asset('global/scripts/datatable.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo asset('global/plugins/datatables/datatables.min.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo asset('global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo asset('global/plugins/bootstrap-wizard/jquery.bootstrap.wizard.min.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo asset('global/scripts/app.min.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo asset('pages/scripts/dashboard.min.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo asset('apps/scripts/todo-2.min.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo asset('layouts/layout4/scripts/layout.min.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo asset('layouts/layout4/scripts/demo.min.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo asset('layouts/global/scripts/quick-sidebar.min.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo asset('pages/scripts/table-datatables-managed.min.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo asset('global/plugins/sweetalert2/sweetalert2.min.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo asset('global/plugins/bootstrap-fileinput/bootstrap-fileinput.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo asset('global/plugins/select2-4.0.3/dist/js//select2.min.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo asset('global/plugins/bootstrap-summernote/summernote.min.js');?>"></script>
        
        <script type="text/javascript">
            var app_url = '<?php echo app_url(); ?>';
        </script>
    </head>
    <!-- END HEAD -->
    <body class="page-container-bg-solid page-header-fixed page-sidebar-closed-hide-logo page-md">
        <!-- BEGIN HEADER -->
        <div class="page-header navbar navbar-fixed-top">
            <!-- BEGIN HEADER INNER -->
            <div class="page-header-inner ">
                <!-- BEGIN LOGO -->
                <div class="page-logo" style="width: 300px!important;">
                    <a href="#"  style="text-decoration:none; color:#fff;">
                        <h3 style="margin-top: 24px!important;"><b> TODO APP </b> </h3>
                    </a>
                    <div class="menu-toggler sidebar-toggler">
                    </div>
                </div>
                <!-- END LOGO -->
                <!-- BEGIN RESPONSIVE MENU TOGGLER -->
                <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse"> </a>
                <!-- END RESPONSIVE MENU TOGGLER -->
              
                <!-- BEGIN PAGE TOP -->
                <div class="page-top">
                    <!-- BEGIN TOP NAVIGATION MENU -->
                    <div class="top-menu">
                        <ul class="nav navbar-nav pull-right">
                            <li class="separator hide"> </li>
                            
                            <!-- BEGIN USER LOGIN DROPDOWN -->
                            <li class="dropdown dropdown-user dropdown-dark">
                                <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                    <span class="username username-hide-on-mobile"> Intellij </span>
                                </a>
                            </li>
                            <!-- END USER LOGIN DROPDOWN -->
                            <!-- BEGIN QUICK SIDEBAR TOGGLER -->
                            <li class="dropdown dropdown-extended quick-sidebar-toggler">
                                <span class="sr-only">Toggle Quick Sidebar</span>
                                <i class="icon-logout"></i>
                            </li>
                            <!-- END QUICK SIDEBAR TOGGLER -->
                        </ul>
                    </div>
                    <!-- END TOP NAVIGATION MENU -->
                </div>
                <!-- END PAGE TOP -->
            </div>
            <!-- END HEADER INNER -->
        </div>
        <!-- END HEADER -->

        <!-- BEGIN HEADER & CONTENT DIVIDER -->
        <div class="clearfix"> </div>
        <!-- END HEADER & CONTENT DIVIDER -->

        <!-- BEGIN CONTAINER -->
        <div class="page-container">
            <!-- BEGIN SIDEBAR -->
            <div class="page-sidebar-wrapper">
                <!-- BEGIN SIDEBAR -->
                <?php $this->load->view('layout/app/partials/sidebar'); ?>
                <!-- END SIDEBAR -->
            </div>
            <!-- END SIDEBAR -->
            <!-- BEGIN CONTENT -->
            <?php echo $contents; ?>
            <!-- END CONTENT -->
        </div>
        <!-- END CONTAINER -->

        <!-- BEGIN FOOTER -->
        <div class="page-footer">
            <div class="page-footer-inner"> <?php echo $this->config->item('copyright'); ?> </div>
            <div class="scroll-to-top">
                <i class="icon-arrow-up"></i>
            </div>
        </div>
        
        <script type="text/javascript">
            $('.select2').select2();
            $('textarea.summernote').summernote({height: 300});

            $(document).ready(function() {
                $('.tabledata').DataTable();
            });

            function confirmDelete(e)
            {
                swal({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    type: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then(function() {
                    window.location.href = e.attr('href');
                });
                return false;
            }
        </script>
    </body>
    <?php echo @$addtional_js; ?>
</html>