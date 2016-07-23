<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Admin | Dashboard</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- bootstrap 3.0.2 -->
        <link href="<?php echo site_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo site_url('assets/css/jquery.dataTables.css')?>" rel="stylesheet" type="text/css" />
        
        <!-- font Awesome -->
        <link href="<?php echo site_url('assets/css/font-awesome.min.css')?>" rel="stylesheet" type="text/css" />
        <!-- Ionicons -->
        <link href="<?php echo site_url('assets/css/ionicons.min.css')?>" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="<?php echo site_url('assets/css/AdminLTE.css')?>" rel="stylesheet" type="text/css" />
              <!-- jQuery 2.0.2 -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
   
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="skin-black" onunload="">
        <!-- header logo: style can be found in header.less -->
        <header class="header">
            <a href="../index.html" class="logo">
                <!-- Add the class icon to your logo image or logo icon to add the margining -->
                Admin
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                 <div class="navbar-right">
                    <ul class="nav navbar-nav">
                      
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="glyphicon glyphicon-user"></i>
                                <span>Jane Doe <i class="caret"></i></span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header bg-light-blue">
                                    <img src="../img/avatar3.png" class="img-circle" alt="User Image" />
                                    <p>
                                        Jane Doe - Web Developer
                                        <small>Member since Nov. 2012</small>
                                    </p>
                                </li>
                                <!-- Menu Body -->
                                <li class="user-body">
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Followers</a>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Sales</a>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Friends</a>
                                    </div>
                                </li>
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="#" class="btn btn-default btn-flat">Profile</a>
                                    </div>
                                    <div class="pull-right">
                                        <a href="#" class="btn btn-default btn-flat">Sign out</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div> 
            </nav>
        </header>
        <div class="wrapper row-offcanvas row-offcanvas-left">
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="left-side sidebar-offcanvas">                
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <div class="pull-left image">
                            <img src="../img/avatar3.png" class="img-circle" alt="User Image" />
                        </div>
                        <div class="pull-left info">
                            <p>Hello</p>

                            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                        </div>
                    </div>
                    <!-- search form -->
                    <form action="#" method="get" class="sidebar-form">
                        <div class="input-group">
                            <input type="text" name="q" class="form-control" placeholder="Search..."/>
                            <span class="input-group-btn">
                                <button type='submit' name='seach' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                            </span>
                        </div>
                    </form>
                    <!-- /.search form -->
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">
                        <li class="active">
                            <a href="../index.html">
                                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                            </a>
                        </li>
                         <li class="treeview">
                            <a href="#">
                                <i class="fa fa-edit"></i> <span>INVOICE</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="<?php echo site_url('invoice/edit') ; ?>"><i class="fa fa-angle-double-right"></i>create invoice</a></li>
                                <li><a href="<?php echo site_url('invoice/all') ; ?>"><i class="fa fa-angle-double-right"></i>list all</a></li>        
                            </ul>
                        </li>
                         <li class="treeview">
                            <a href="#">
                                <i class="fa fa-edit"></i> <span>CREDIT NOTE</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="<?php echo site_url('credit_note/edit') ; ?>"><i class="fa fa-angle-double-right"></i>create credit note</a></li>
                                <li><a href="<?php echo site_url('credit_note/all') ; ?>"><i class="fa fa-angle-double-right"></i>list all</a></li>        
                            </ul>
                        </li>
                         <li class="treeview">
                            <a href="#">
                                <i class="fa fa-edit"></i> <span>RECEIPT</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="<?php echo site_url('receipt/edit') ; ?>"><i class="fa fa-angle-double-right"></i>create receipt</a></li>
                                <li><a href="<?php echo site_url('receipt/all') ; ?>"><i class="fa fa-angle-double-right"></i>list all</a></li>        
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-edit"></i> <span>Stock</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="<?php echo site_url('stock/summary') ; ?>"><i class="fa fa-angle-double-right"></i>Summary</a></li>
                                <li><a href="<?php echo site_url('stock/cost_summary') ; ?>"><i class="fa fa-angle-double-right"></i>Summary(Cost)</a></li>        
                                <li><a href="<?php echo site_url('store/edit') ?>" ><i class="fa fa-angle-double-right"></i>Stock Counting</a></li>      
                                <li><a href="<?php echo site_url('store/edit_mobile') ?>" ><i class="fa fa-angle-double-right"></i>Mobile Counting</a></li>      
                                
                               <li><a href="<?php echo site_url('store/all') ?>" ><i class="fa fa-angle-double-right"></i>Stock Counting list</a></li>      
                           </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-edit"></i> <span>Distribution</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="<?php echo site_url('stock/edit') ; ?>"><i class="fa fa-angle-double-right"></i>create distribution</a></li>
                                <li><a href="<?php echo site_url('stock/all') ; ?>"><i class="fa fa-angle-double-right"></i>list all</a></li>        
                            </ul>
                        </li>

                         <li class="treeview">
                            <a href="#">
                                <i class="fa fa-table"></i> <span>Sale</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="<?php echo site_url('sale/edit');?>"><i class="fa fa-angle-double-right"></i> sale create</a></li>
                                <li><a href="<?php echo site_url('sale/all');?>"><i class="fa fa-angle-double-right"></i> sale all</a></li>
                             </ul>
                        </li>
                         <li class="treeview">
                            <a href="#">
                                <i class="fa fa-edit"></i> <span>Delivery</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="<?php echo site_url('delivery/all') ; ?>"><i class="fa fa-angle-double-right"></i>list all</a></li>        
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-table"></i> <span>Pricing</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="<?php echo site_url('pricing/import');?>"><i class="fa fa-angle-double-right"></i> import pricing from excel</a></li>
                                <li><a href="<?php echo site_url('pricing/edit');?>"><i class="fa fa-angle-double-right"></i> edit pricing</a></li>
                                <li><a href="<?php echo site_url('pricing/all');?>"><i class="fa fa-angle-double-right"></i> list all</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-table"></i> <span>Product</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="<?php echo site_url('product/import');?>"><i class="fa fa-angle-double-right"></i> impport product from excel</a></li>
                                <li><a href="<?php echo site_url('product/edit');?>"><i class="fa fa-angle-double-right"></i> insert custom product</a></li>
                                <li><a href="<?php echo site_url('product/all');?>"><i class="fa fa-angle-double-right"></i> list all</a></li>
                            </ul>
                        </li>
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>

            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">                
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Blank page
                        <small>Control panel</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">Blank page</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="modal fade" id="pleaseWaitDialog" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <h4 class="modal-title">Processing...</h4>
                                    <br/>
                                  <div class="progress sm progress-striped active">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                                            <span class="sr-only"></span>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                    </div>
                    <?php if(isset($content)) { ?>
                    <?php echo $content ?>
                    <?php } ?>
                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->


       <!-- jQuery UI 1.10.3 -->
        <script src="<?php echo site_url('assets/js/jquery-ui-1.10.3.min.js'); ?>" type="text/javascript"></script>
        <!-- Bootstrap -->
        <script src="<?php echo site_url('assets/js/bootstrap.min.js'); ?>" type="text/javascript"></script>
        <!-- Morris.js charts -->
        <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
        <script src="<?php echo site_url('assets/js/plugins/morris/morris.min.js'); ?>" type="text/javascript"></script>
        <!-- Sparkline -->
        <script src="<?php echo site_url('assets/js/plugins/sparkline/jquery.sparkline.min.js'); ?>" type="text/javascript"></script>
        <!-- jvectormap -->
        <script src="<?php echo site_url('assets/js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js'); ?>" type="text/javascript"></script>
        <script src="<?php echo site_url('assets/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js'); ?>" type="text/javascript"></script>
        <!-- datatable -->
        <script src="<?php echo site_url('assets/js/jquery.dataTables.js') ?>" type="text/javascript"></script>
        <script src="<?php echo site_url('assets/js/plugins/datatables/dataTables.bootstrap.js'); ?>" type="text/javascript"></script>
        <script src="//cdn.datatables.net/plug-ins/28e7751dbec/sorting/date-uk.js" ></script>
        <!-- fullCalendar -->
        <script src="<?php echo site_url('assets/js/plugins/fullcalendar/fullcalendar.min.js'); ?>" type="text/javascript"></script>
        <!-- jQuery Knob Chart -->
        <script src="<?php echo site_url('assets/js/plugins/jqueryKnob/jquery.knob.js'); ?>" type="text/javascript"></script>
        <!-- daterangepicker -->
        <script src="<?php echo site_url('assets/js/plugins/daterangepicker/daterangepicker.js'); ?>" type="text/javascript"></script>
        <!-- Bootstrap WYSIHTML5 -->
        <script src="<?php echo site_url('assets/js/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js'); ?>" type="text/javascript"></script>
        <!-- iCheck -->
        <script src="<?php echo site_url('assets/js/plugins/iCheck/icheck.min.js'); ?>" type="text/javascript"></script>
        <script src="<?php echo site_url('assets/js/plugins/input-mask/jquery.inputmask.js'); ?>" type="text/javascript"></script>
         <script src="<?php echo site_url('assets/js/plugins/input-mask/jquery.inputmask.date.extensions.js'); ?>" type="text/javascript"></script>
        <script src="<?php echo site_url('assets/js/plugins/input-mask/jquery.inputmask.extensions.js'); ?>" type="text/javascript"></script>
        <!-- AdminLTE App -->
        <script src="<?php echo site_url('assets/js/AdminLTE/app.js'); ?>" type="text/javascript"></script>
        <?php if(isset($js)){?>
            <?php foreach ($js as $value) { ?>
             <script src="<?php echo site_url('assets/js/'.$value.'.js'); ?>" type="text/javascript"></script>
                
            <?php } ?>
        <?php } ?>
    </body>
</html>
