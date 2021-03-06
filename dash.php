
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->  
  <link rel="stylesheet" href="http://localhost:/stock/assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->  
  <link rel="stylesheet" href="http://localhost:/stock/assets/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="http://localhost:/stock/assets/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="http://localhost:/stock/assets/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="http://localhost:/stock/assets/dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="http://localhost:/stock/assets/bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="http://localhost:/stock/assets/bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="http://localhost:/stock/assets/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->  
  <link rel="stylesheet" href="http://localhost:/stock/assets/bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="http://localhost:/stock/assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <link rel="stylesheet" href="http://localhost:/stock/assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="http://localhost:/stock/assets/bower_components/select2/dist/css/select2.min.css">
  <link rel="stylesheet" href="http://localhost:/stock/assets/plugins/fileinput/fileinput.min.css">

  <!-- icheck -->
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="http://localhost:/stock/assets/plugins/iCheck/all.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

  <!-- jQuery 3 -->
  <script src="http://localhost:/stock/assets/bower_components/jquery/dist/jquery.min.js"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="http://localhost:/stock/assets/bower_components/jquery-ui/jquery-ui.min.js"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button);
  </script>
  <!-- Bootstrap 3.3.7 -->
  <script src="http://localhost:/stock/assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  <!-- Morris.js charts -->
  <script src="http://localhost:/stock/assets/bower_components/raphael/raphael.min.js"></script>
  <script src="http://localhost:/stock/assets/bower_components/morris.js/morris.min.js"></script>
  <!-- Sparkline -->
  <script src="http://localhost:/stock/assets/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
  <!-- jvectormap -->
  <script src="http://localhost:/stock/assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
  <script src="http://localhost:/stock/assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
  <!-- jQuery Knob Chart -->
  <script src="http://localhost:/stock/assets/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
  <!-- daterangepicker -->
  <script src="http://localhost:/stock/assets/bower_components/moment/min/moment.min.js"></script>
  <script src="http://localhost:/stock/assets/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
  <!-- datepicker -->
  <script src="http://localhost:/stock/assets/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
  <!-- Bootstrap WYSIHTML5 -->
  <script src="http://localhost:/stock/assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
  <!-- Slimscroll -->
  <script src="http://localhost:/stock/assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
  <!-- FastClick -->
  <script src="http://localhost:/stock/assets/bower_components/fastclick/lib/fastclick.js"></script>
  <!-- Select2 -->
  <script src="http://localhost:/stock/assets/bower_components/select2/dist/js/select2.full.min.js"></script>
  <!-- AdminLTE App -->  
  <script src="http://localhost:/stock/assets/dist/js/adminlte.min.js"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="http://localhost:/stock/assets/dist/js/pages/dashboard.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="http://localhost:/stock/assets/dist/js/demo.js"></script>
  <script src="http://localhost:/stock/assets/plugins/fileinput/fileinput.min.js"></script>

  <!-- ChartJS -->
  <script src="http://localhost:/stock/assets/bower_components/Chart.js/Chart.js"></script>

  <!-- icheck -->
  <script src="http://localhost:/stock/assets/plugins/iCheck/icheck.min.js"></script>

  <!-- DataTables -->
<script src="http://localhost:/stock/assets/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="http://localhost:/stock/assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>



</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>WFO</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>WUFO</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        
        <li id="dashboardMainMenu">
          <a href="http://localhost/stock/dash.php">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>

      <!--                        <li class="treeview" id="mainUserNav">
            <a href="#">
              <i class="fa fa-users"></i>
              <span>Users</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
                            <li id="createUserNav"><a href="http://localhost:/stock/users/create"><i class="fa fa-circle-o"></i> Add User</a></li>
              
                            <li id="manageUserNav"><a href="http://localhost:/stock/users"><i class="fa fa-circle-o"></i> Manage Users</a></li>
                        </ul>
          </li>
          
                      <li class="treeview" id="mainGroupNav">
              <a href="#">
                <i class="fa fa-files-o"></i>
                <span>Groups</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                                  <li id="addGroupNav"><a href="http://localhost:/stock/groups/create"><i class="fa fa-circle-o"></i> Add Group</a></li>
                                                <li id="manageGroupNav"><a href="http://localhost:/stock/groups"><i class="fa fa-circle-o"></i> Manage Groups</a></li>
                              </ul>
            </li>
           --> 


                      <li id="brandNav">
              <a href="demo/bran.php">
                <i class="glyphicon glyphicon-tags"></i> <span>Brands</span>
              </a>
            </li>
          
                      <li id="categoryNav">
              <a href="demo/cater.php">
                <i class="fa fa-files-o"></i> <span>Category</span>
              </a>
            </li>
          
                      <li id="storeNav">
              <a href="http://localhost/stock/demo/store.php">
                <i class="fa fa-files-o"></i> <span>Stores</span>
              </a>
            </li>
          
                    <li id="attributeNav">
            <a href="http://localhost/stock/demo/attributes.php">
              <i class="fa fa-files-o"></i> <span>Attributes</span>
            </a>
          </li>
          
                      <li class="treeview" id="mainProductNav">
              <a href="#">
                <i class="fa fa-cube"></i>
                <span>Products</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                                  <li id="addProductNav"><a href="http://localhost:/stock/products/create"><i class="fa fa-circle-o"></i> Add Product</a></li>
                                                <li id="manageProductNav"><a href="http://localhost:/stock/products"><i class="fa fa-circle-o"></i> Manage Products</a></li>
                              </ul>
            </li>
          

                      <li class="treeview" id="mainOrdersNav">
              <a href="#">
                <i class="fa fa-dollar"></i>
                <span>Orders</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                                  <li id="addOrderNav"><a href="http://localhost:/stock/orders/create"><i class="fa fa-circle-o"></i> Add Order</a></li>
                                                <li id="manageOrdersNav"><a href="http://localhost:/stock/orders"><i class="fa fa-circle-o"></i> Manage Orders</a></li>
                              </ul>
            </li>
          
                    <!--  <li id="reportNav">
              <a href="http://localhost:/stock/reports/">
                <i class="glyphicon glyphicon-stats"></i> <span>Reports</span>
              </a>
            </li> -->
          

                    <!--  <li id="companyNav"><a href="http://localhost:/stock/company/"><i class="fa fa-files-o"></i> <span>Company</span></a></li> -->
          
        

        <!-- <li class="header">Settings</li> -->

                 <!-- <li><a href="http://localhost:/stock/users/profile/"><i class="fa fa-user-o"></i> <span>Profile</span></a></li>
                          <li><a href="http://localhost:/stock/users/setting/"><i class="fa fa-wrench"></i> <span>Setting</span></a></li> -->
        
                <!-- user permission info -->
        <li><a href="http://localhost:/stock/auth/logout"><i class="glyphicon glyphicon-log-out"></i> <span>Logout</span></a></li>

      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      
        <div class="row">
          <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-aqua">
              <div class="inner">
                <h3>0</h3>

                <p>Total Products</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="http://localhost:/stock/products/" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-green">
              <div class="inner">
                <h3>0</h3>

                <p>Total Paid Orders</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="http://localhost:/stock/orders/" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-yellow">
              <div class="inner">
                <h3>2</h3>

                <p>Total Users</p>
              </div>
              <div class="icon">
                <i class="ion ion-android-people"></i>
              </div>
              <a href="http://localhost:/stock/users/" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-red">
              <div class="inner">
                <h3>1</h3>

                <p>Total Stores</p>
              </div>
              <div class="icon">
                <i class="ion ion-android-home"></i>
              </div>
              <a href="http://localhost:/stock/stores/" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
            

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <script type="text/javascript">
    $(document).ready(function() {
      $("#dashboardMainMenu").addClass('active');
    }); 
  </script>

  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 0.1.0 
    </div>
    <strong>Copyright &copy; 2018-2020.</strong> All rights reserved. 
  </footer>

  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

</body>
</html>
