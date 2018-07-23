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
    <title>iTemtracker</title>
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

    <!-- Export 
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/r/bs/jszip-2.5.0,pdfmake-0.1.18,dt-1.10.9,b-1.0.3,b-html5-1.0.3,b-print-1.0.3/datatables.min.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/buttons.dataTables.min.css');?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/jquery.dataTables.min.css');?>">
    
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.5.2/css/buttons.dataTables.min.css">
*****************************************-->
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"/>
<link href="https://cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css" rel="stylesheet"/>
<link href="https://cdn.datatables.net/buttons/1.2.4/css/buttons.dataTables.min.css" rel="stylesheet"/>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.18/pdfmake.min.js"></script>

<script src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.4/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.4/js/buttons.bootstrap.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.4/js/buttons.html5.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.4/js/buttons.print.js"></script>
    
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
          <a href="home" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b></b>CS</span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>ADMIN</b>CS</span>
          </a>
          <!-- Header Navbar -->
          <nav class="navbar navbar-static-top" role="navigation">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
              <span class="sr-only">Toggle navigation</span>
            </a>
            <!-- Navbar Right Menu -->
            <div class="navbar-custom-menu">
              <ul class="nav navbar-nav">
                <!-- Messages: style can be found in dropdown.less-->
                <li class="dropdown messages-menu">
                  <!-- Menu toggle button -->
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa-envelope-o"></i>
                    <span class="label label-success">4</span>
                  </a>
                  <ul class="dropdown-menu">
                    <li class="header">You have 4 messages</li>
                    <li>
                      <!-- inner menu: contains the messages -->
                      <ul class="menu">
                        <li><!-- start message -->
                        <a href="#">
                          <div class="pull-left">
                            <!-- User Image -->
                            <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                          </div>
                          <!-- Message title and timestamp -->
                          <h4>
                          Support Team
                          <small><i class="fa fa-clock-o"></i> 5 mins</small>
                          </h4>
                          <!-- The message -->
                          <p>Why not buy a new awesome theme?</p>
                        </a>
                      </li>
                      <!-- end message -->
                    </ul>
                    <!-- /.menu -->
                  </li>
                  <li class="footer"><a href="#">See All Messages</a></li>
                </ul>
              </li>
              <!-- /.messages-menu -->
              <!-- Notifications Menu -->
              <li class="dropdown notifications-menu">
                <!-- Menu toggle button -->
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-bell-o"></i>
                  <span class="label label-warning">10</span>
                </a>
                <ul class="dropdown-menu">
                  <li class="header">You have 10 notifications</li>
                  <li>
                    <!-- Inner Menu: contains the notifications -->
                    <ul class="menu">
                      <li><!-- start notification -->
                      <a href="#">
                        <i class="fa fa-users text-aqua"></i> 5 new members joined today
                      </a>
                    </li>
                    <!-- end notification -->
                  </ul>
                </li>
                <li class="footer"><a href="#">View all</a></li>
              </ul>
            </li>
            <!-- Tasks Menu -->
            <li class="dropdown tasks-menu">
              <!-- Menu Toggle Button -->
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <i class="fa fa-flag-o"></i>
                <span class="label label-danger">9</span>
              </a>
              <ul class="dropdown-menu">
                <li class="header">You have 9 tasks</li>
                <li>
                  <!-- Inner menu: contains the tasks -->
                  <ul class="menu">
                    <li><!-- Task item -->
                    <a href="#">
                      <!-- Task title and progress text -->
                      <h3>
                      Design some buttons
                      <small class="pull-right">20%</small>
                      </h3>
                      <!-- The progress bar -->
                      <div class="progress xs">
                        <!-- Change the css width attribute to simulate progress -->
                        <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar"
                          aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">20% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                </ul>
              </li>
              <li class="footer">
                <a href="#">View all tasks</a>
              </li>
            </ul>
          </li>
          <!-- User Account Menu -->
          <li class="dropdown user user-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <!-- The user image in the navbar-->
              <img src="<?php echo base_url('dist/img/kojima.jpg');?>" class="user-image" alt="User Image">
              <!-- hidden-xs hides the username on small devices so only the image appears. -->
              <span class="hidden-xs">ADMIN</span>
            </a>
            <ul class="dropdown-menu">
              <!-- The user image in the menu -->
              <li class="user-header">
                <img src="<?php echo base_url('dist/img/kojima.jpg');?>" class="img-circle" alt="User Image">
                <p>
                  ADMIN
                  <small>Computer Science</small>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#">Followers</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Sales</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Friends</a>
                  </div>
                </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="<?php echo base_url('index.php/home') ?>" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
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
          <img src="<?php echo base_url('dist/img/kojima.jpg');?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>ADMIN</p>
          <!-- Status -->
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form (Optional) -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
            <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
            </button>
          </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">SYSTEM</li>
        <!-- Optionally, you can add icons to the links -->
        <li ><a href="<?php echo site_url('dashboard/index/dashboard') ?>"><i class="fa fa-gears"></i> <span>Dashboard</span></a></li>
        <li ><a href="<?php echo site_url('tb_item/index/index') ?>"><i class="fa fa-database"></i> <span>Database</span></a></li>
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
    ItemTracker
    <small>Smartphone Application</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Admin</a></li>
      <li class="active">Home</li>
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
    <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
  </ul>
  <!-- Tab panes -->
  <div class="tab-content">
    <!-- Home tab content -->
    <div class="tab-pane active" id="control-sidebar-home-tab">
      <h3 class="control-sidebar-heading">Recent Activity</h3>
      <ul class="control-sidebar-menu">
        <li>
          <a href="javascript:;">
            <i class="menu-icon fa fa-birthday-cake bg-red"></i>
            <div class="menu-info">
              <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>
              <p>Will be 23 on April 24th</p>
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
            Custom Template Design
            <span class="pull-right-container">
              <span class="label label-danger pull-right">70%</span>
            </span>
            </h4>
            <div class="progress progress-xxs">
              <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
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
        <h3 class="control-sidebar-heading">General Settings</h3>
        <div class="form-group">
          <label class="control-sidebar-subheading">
            Report panel usage
            <input type="checkbox" class="pull-right" checked>
          </label>
          <p>
            Some information about this general settings option
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
<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
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

<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.flash.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>
 

<!-- *************************-->
<!-- DataTables -->
<script src="<?php echo base_url('bower_components/datatables.net/js/jquery.dataTables.min.js');?>"></script>
<script src="<?php echo base_url('bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js');?>"></script>

<script type="text/javascript" charset="utf-8">
//Date picker
$(function() {
    $("#datepicker").datepicker({
        dateFormat: 'YYYY-MM-DD'
    });
});
$('#datepicker').datepicker({
    autoclose: true
})

///Export DataTable
/*
$(document).ready(function() {
    
    $('#example2').DataTable({
      dom: 'lfrtipB'/*'Bfrtip'*/,
        /*buttons: [
          {
        extend: 'collection',
        text: 'Export',
        buttons: [
          'copy',
          'excel',
          'csv',
          'pdf',
          'print'
        ]
      }
        ],
        'paging': true,
        'lengthChange': true,
        'searching': true,
        'ordering': true,
        'info': true,
        'autoWidth': true,
        'exports' : true
    });
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
/*
// Sweet Alert 2< echo site_url('tb_item/remove/'.$t['id']); ?>
function sweet() {
    //event.preventDefault(); // prevent form submit
    //var form = event.target.form; // storing the form
    swal({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
        if (result.value) {
            swal(
                'Deleted!',
                'Your file has been deleted.',
                'success'
            )
        }
    })
}*/
/*
/// Ajax sweetalert2
function SwalDelete(id) {
    swal({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!',
        showLoaderOnConfirm: true,
        preConfirm: function() {
            return new Promise(function(resolve) {
                $.ajax({
                        url: 'delete.php',
                        type: 'POST',
                        data: 'delete=' + id,
                        dataType: 'json'
                    })
                    .done(function(response) {
                        swal('Deleted!', response.message, response.status);
                        readProducts();
                    })
                    .fail(function() {
                        swal('Oops...', 'Something went wrong with ajax !', 'error');
                    });
            });
        },
        allowOutsideClick: false
    });
}
$(document).on('click', '#delete_product', function(e) {
    var id = $(this).data('id');
    SwalDelete(id);
    e.preventDefault();
});*/

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
</body>
</html>