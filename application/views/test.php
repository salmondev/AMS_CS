<?php if (!isset($_SESSION['user'])) {
    redirect('login');
} ?>
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AMS</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('bower_components/bootstrap/dist/css/bootstrap.min.css');?>">
    <!-- Font Awesome -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('bower_components/font-awesome/css/font-awesome.min.css');?>">
    <!-- bootstrap datepicker -->
    <link rel="stylesheet" href="<?php echo base_url('bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css');?>">
    <!-- DataTables -->
    <link rel="stylesheet" href="<?php echo base_url('bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css');?>">
    
    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="<?php echo base_url('dist/sweetalert2.min.css');?>">
    
    <!-- Ionicons -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('bower_components/Ionicons/css/ionicons.min.css');?>">
    <!-- Theme style -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('dist/css/AdminLTE.min.css');?>">
    <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
    page. However, you can choose any other skin. Make sure you
    apply the skin class to the body tag so the changes take effect. -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('dist/css/skins/skin-purple.min.css');?>">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script type="text/javascript" src="https://unpkg.com/xlsx/dist/shim.min.js"></script>
<script type="text/javascript" src="https://unpkg.com/xlsx/dist/xlsx.full.min.js"></script>

<script type="text/javascript" src="https://unpkg.com/blob.js@1.0.1/Blob.js"></script>
<script type="text/javascript" src="https://unpkg.com/file-saver@1.3.3/FileSaver.js"></script>

    <style>
    .swal2-modal {
    
    }
    </style>
    <!-- Google Font -->
    <link rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    </head>
    <!--
    BODY TAG OPTIONS:
    =================
    Apply one or more of the following classes to get the
    desired effect
    |---------------------------------------------------------|
    | SKINS         | skin-blue                               |
    |               | skin-black                              |
    |               | skin-purple                             |
    |               | skin-yellow                             |
    |               | skin-red                                |
    |               | skin-green                              |
    |---------------------------------------------------------|
    |LAYOUT OPTIONS | fixed                                   |
    |               | layout-boxed                            |
    |               | layout-top-nav                          |
    |               | sidebar-collapse                        |
    |               | sidebar-mini                            |
    |---------------------------------------------------------|
    -->
    <body class="hold-transition skin-purple sidebar-mini">
      <div class="wrapper">
        <!-- Main Header -->
        <header class="main-header">
          <!-- Logo -->
          <a href="<?php echo site_url('test/index/test');?>" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b></b>CS</span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>ADMIN</b></span>
          </a>
          <!-- Header Navbar -->
          <nav class="navbar navbar-static-top" role="navigation">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
              <span class="sr-only"></span>
            </a>
            <!-- Navbar Right Menu -->
            <div class="navbar-custom-menu">
              <ul class="nav navbar-nav">
                <!-- Messages: style can be found in dropdown.less-->
                <li class="dropdown messages-menu">
                  <!-- Menu toggle button -->
                  
              
          <!-- User Account Menu -->
          <li class="dropdown user user-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <!-- The user image in the navbar-->
              <img src="<?php echo base_url('dist/img/admin.png');?>" class="user-image" alt="User Image">
              <!-- hidden-xs hides the username on small devices so only the image appears. -->
              <span class="hidden-xs">User : <b><?php $username = $this->session->userdata('user'); 	print_r($username);?></b></span>
            </a>
            <ul class="dropdown-menu">
              <!-- The user image in the menu -->
              <li class="user-header">
                <img src="<?php echo base_url('dist/img/admin.png');?>" class="img-circle" alt="User Image">
                <p>
                  ADMIN</br>
						
									User : <b><?php $username = $this->session->userdata('user'); 	print_r($username);?></b>
									
                </p>
              </li>
              
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="col-sm-12">
                  <a href="#" class="btn btn-primary btn-block">Profile</a>
                </div>
                
              </li>
            </ul>
						
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
					<a href="<?php echo site_url('login/logout') ?>" class="btn btn-danger brn-flat">Log out</a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url('dist/img/admin.png');?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>ADMIN</p>
          <!-- Status -->
          <i class="fa fa-circle text-success"></i> <?php $username = $this->session->userdata('user'); 	print_r($username);?>
        </div>
      </div>
      
      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">SYSTEM</li>
        <!-- Optionally, you can add icons to the links -->
        <li ><a href="<?php echo site_url('item_table/index3/sync') ?>"><i class="fa fa-gears"></i> <span>SYNC</span></a></li>
        <li ><a href="<?php echo site_url('item_table/index2/demo') ?>"><i class="fa fa-database"></i> <span>ITEM LIST</span></a></li>
        <li class="treeview class="active menu-open"">
          <a href="#"><i class="fa fa-globe"></i> <span>Tracking System</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="<?php echo site_url('map/index/map');?>"><i class="fa fa-map-marker"></i>Map</a></li>
          <li><a href="#"><i class="fa fa-rocket"></i>Tracking</a></li>
        </ul>
      </li>
      <li class="header">DATABASE</li>
      <li class="treeview class="active menu-open"">
        <a href="#"><i class="fa fa-database"></i> <span>DATABASE</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="<?php echo site_url('building_table/index/index');?>"><i class="fa fa-institution"></i><span>Building</span></a></li>
          <li><a href="<?php echo site_url('floor_table/index/index');?>"><i class="fa fa-server"></i>        <span>Floor   </span></a></li>
          <li><a href="<?php echo site_url('item_table/index/index');?>"><i class="fa fa-cubes"></i>          <span>Item    </span></a></li>
          <li><a href="<?php echo site_url('owner_table/index/index');?>"><i class="fa fa-address-card"></i>  <span>Owner   </span></a></li>
          <li><a href="<?php echo site_url('room_table/index/index');?>"><i class="fa fa-wrench"></i>         <span>Room    </span></a></li>
          <li><a href="<?php echo site_url('status_table/index/index');?>"><i class="fa fa-toggle-on"></i>    <span>Status  </span></a></li>
          <li><a href="<?php echo site_url('history_table/index/index');?>"><i class="fa fa-history"></i>     <span>History </span></a></li>
					<li><a href="<?php echo site_url('map_table/index/index');?>"><i class="fa fa-map"></i>         <span>Map     </span></a></li>
        
        </li>
        </ul>
    </ul>
    <!-- /.sidebar-menu -->
  </section>
  <!-- /.sidebar -->
</aside>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
    AMS
    <small>Asset Management System</small>
    </h1>
    <ol class="breadcrumb">
		<!--
      <li><a href="#"><i class="fa fa-dashboard"></i> Admin</a></li>
      <li class="active">Home</li>-->
    </ol>
  </section>
  <!-- Main content -->
  <section class="content container-fluid">
    
    <!--------------------------
    | Your Page Content Here |
    -------------------------->
    
    <?php
    if(isset($_view) && $_view)
    $this->load->view($_view);
    ?>
    
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<!-- Main Footer -->
<footer class="main-footer">
  <!-- To the right -->
  <div class="pull-right hidden-xs">
    Project CS
  </div>
  <!-- Default to the left -->
  <strong>Copyright &copy; 2018 <a href="http://www.cs.kmutnb.ac.th/" target="_blank">CS KMUTNB</a>.</strong> All rights reserved.
</footer>
<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
  <!-- Create the tabs -->
  <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
    <li class="active"><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
    <li><a href="<?php echo site_url('login/logout') ?>" class="btn btn-danger btn-flat">Log out</a></li>
  </ul>
  <!-- Tab panes -->
  <div class="tab-content">
    <!-- Home tab content -->
    <div class="tab-pane active" id="control-sidebar-home-tab">
      <h3 class="control-sidebar-heading">TODO Taskwork</h3>
      <ul class="control-sidebar-menu">
        <li>
          <a href="<?php echo site_url('tb_item/index/index') ?>">
            <i class="menu-icon fa fa-gear bg-red"></i>
            <div class="menu-info">
              <h4 class="control-sidebar-subheading">Export Function</h4>
              <p>under construction</p>
            </div>
            </a>
            <a href="<?php echo site_url('map/index/map');?>">
            <i class="menu-icon fa fa-gear bg-blue"></i>
            <div class="menu-info">
              <h4 class="control-sidebar-subheading">Google Map Function</h4>
              <p>under construction</p>
            </div>
          </a>
        </li>
      </ul>
      <!-- /.control-sidebar-menu -->
      <h3 class="control-sidebar-heading">Tasks Progress</h3>
      <ul class="control-sidebar-menu">
        <li>
          <a href="javascript:;">
            <h4 class="control-sidebar-subheading">
            Export Function
            <span class="pull-right-container">
              <span class="label label-danger pull-right">50%</span>
            </span>
            </h4>
            <div class="progress progress-xxs">
              <div class="progress-bar progress-bar-danger" style="width: 50%"></div>
            </div>
            </br>
            <h4 class="control-sidebar-subheading">
            Google Map Function
            <span class="pull-right-container">
              <span class="label label-primary pull-right">80%</span>
            </span>
            </h4>
            <div class="progress progress-xxs">
              <div class="progress-bar progress-bar-primary" style="width: 80%"></div>
            </div>
          </a>
        </li>
      </ul>
      <!-- /.control-sidebar-menu -->
    </div>
    <!-- /.tab-pane -->
    <!-- Stats tab content -->
    <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
    <!-- /.tab-pane -->
    <!-- Settings tab content -->
    <div class="tab-pane" id="control-sidebar-settings-tab">
      <form method="post">
        <h3 class="control-sidebar-heading">Development Infomation</h3>
        <div class="form-group">
          <label class="control-sidebar-subheading">
            Development ADMIN System
            <input type="checkbox" class="pull-right" checked>
          </label>
          <p>
            DEV : Panurut Chinakul
          </p>
        </div>
        <!-- /.form-group -->
      </form>
    </div>
    <!-- /.tab-pane -->
  </div>
</aside>
<!-- /.control-sidebar -->
<!-- Add the sidebar's background. This div must be placed
immediately after the control sidebar -->
<div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->
<!-- REQUIRED JS SCRIPTS -->
<!-- jQuery 3 -->
<script src="<?php echo base_url('bower_components/jquery/dist/jquery.min.js');?>"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url('bower_components/bootstrap/dist/js/bootstrap.min.js');?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('dist/js/adminlte.min.js');?>"></script>
<!-- Optionally, you can add Slimscroll and FastClick plugins.
Both of these plugins are recommended to enhance the
user experience. -->
<!-- bootstrap datepicker -->
<script src="<?php echo base_url('bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js');?>"></script>
<!-- SweetAlert2 -->
<script src="<?php echo base_url('dist/sweetalert2.all.min.js');?>"></script>
<!-- Export  -->
<script src="<?php echo base_url('assets/js/jszip.min.js');?>"></script>
<script src="<?php echo base_url('assets/js/pdfmake.min.js');?>"></script>
<script src="<?php echo base_url('assets/js/vfs_fonts.js');?>"></script>
<!-- DataTables -->
<script src="<?php echo base_url('bower_components/datatables.net/js/jquery.dataTables.min.js');?>"></script>
<script src="<?php echo base_url('bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js');?>"></script>

<script>
//Date picker
$(function() {
    $("#datepicker").datepicker({
        dateFormat: 'YYYY-MM-DD'
    });
});
$('#datepicker').datepicker({
    autoclose: true
})
$(function() {
    $('#example1').DataTable()
    $('#example2').DataTable({
        'paging': true,
        'lengthChange': true,
        'searching': true,
        'ordering': true,
        'info': true,
        'autoWidth': true
    })
});

/** add active class and stay opened when selected */
var url = window.location;
// for sidebar menu entirely but not cover treeview
$('ul.sidebar-menu a').filter(function() {
    return this.href == url;
}).parent().addClass('active');
// for treeview
$('ul.treeview-menu a').filter(function() {
    return this.href == url;
}).parentsUntil(".sidebar-menu > .treeview-menu").addClass('active');

function sweet() {
    swal("Deleted!", "Your imaginary file has been deleted.", "success")
}


function goBack() {
    window.history.back();
}
document.getElementById("delete-btn").addEventListener("click", function(event) {
    swal({
            title: "Are you sure?",
            text: "You will not be able to recover this imaginary file!",
            icon: "warning",
            buttons: {
                cancel: {
                    visible: true,
                    text: "No, cancel plx!",
                    closeModal: false,
                },
                confirm: {
                    text: "Yes, delete it!",
                    className: "doit",
                    closeModal: false,
                },
            },
        })
        //attach to the promise returned by swal()
        .then((willDelete) => {
            if (willDelete) {
                swal("Deleted!", "Your imaginary file has been deleted.", "success");
                //another promise and another promise fulfilled response
            } else {
                swal("Cancelled", "Your imaginary file is safe :)", "error");
            }
        });
});
</script>

<script type="text/javascript">

function doit(type, fn, dl) {
    var elt = document.getElementById('example2');
    var wb = XLSX.utils.table_to_book(elt, {sheet:"Sheet JS"});
    return dl ?
        XLSX.write(wb, {bookType:type, bookSST:true, type: 'base64'}) :
        XLSX.writeFile(wb, fn || ('Database_Item.' + (type || 'xlsx')));
}




</script>

</body>
</html>
