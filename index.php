<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from html-templates.multipurposethemes.com/bootstrap-4/admin/minimo-admin/minimoadmin-bootstrap-3/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 13 Apr 2019 06:53:35 GMT -->
<head>
    <title>NIRMALA admin - Dashboard</title>

     <?php require_once('functions/function.php');
     load_head_component();
     connect_db();
     $em = new viewemployee();
?>
  </head>

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">


<!-- Header -->
<?php load_header();?>
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar" style="height: auto;">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="image">
          <img src="images/admin.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="info">
          <p>Admin</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
    
      
      <ul class="sidebar-menu tree" data-widget="tree">
       <li class="header">MAIN NAVIGATION</li>
        <li class="active">
          <a href="index.php">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
        <li>
          <a href="Employee.php">
            <i class="fa fa-user-o"></i> <span>Employees</span>
          </a>
        </li>
        <li>
          <a href="bank.php">
            <i class="fa fa-bank"></i> <span>Banks</span>
          </a>
        </li>
        <li>
          <a href="branch.php">
            <i class="fa  fa-building-o"></i> <span>Branches</span>
          </a>
        </li>
        
            
      </ul>
    </section>
    <!-- /.sidebar -->
    <div class="sidebar-footer">
    <!-- item-->
    <a href="#" class="link" data-toggle="tooltip" title="" data-original-title="Settings"><i class="fa fa-cog fa-spin"></i></a>
    <!-- item-->
    
    <!-- item-->
    <a href="#" class="link" data-toggle="tooltip" title="" data-original-title="Logout"><i class="fa fa-power-off"></i></a>
  </div>
  </aside>


  <!-- Left side column. contains the logo and sidebar -->
  

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
          <div class="small-box bg-blue">
            <div class="inner">
              <h3>1</h3>

              <p>Users</p>
            </div>
            <div class="icon">
              <i class="fa fa-user"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3><?php $em -> branch_count(); ?><sup style="font-size: 20px"></sup></h3>

              <p>Branches</p>
            </div>
            <div class="icon">
              <i class="fa fa-building-o"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-purple">
            <div class="inner">
              <h3><?php $em -> emp_count(); ?></h3>

              <p>Employees Registrations</p>
            </div>
            <div class="icon">
              <i class="fa fa-user-plus"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3><?php $em -> bank_count(); ?></h3>

              <p>Banks</p>
            </div>
            <div class="icon">
              <i class="fa fa-bank"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->
      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <section class="col-lg-6 connectedSortable">
          <!-- Custom tabs (Charts with tabs)-->
          

        </section>
        <!-- /.Left col -->
        <!-- right col (We are only adding the ID to make the widgets sortable)-->
        <section class="col-lg-6 connectedSortable">

        
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

</div>



<!-- Footer here-->
<?php load_footer(); ?>



  <!-- /.control-sidebar -->
  
  <!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
  
</div>
<!-- ./wrapper -->
  	
	 
	  
	<!-- jQuery 3 -->
	<script src="assets/vendor_components/jquery/dist/jquery.js"></script>
	
	<!-- jQuery UI 1.11.4 -->
	<script src="assets/vendor_components/jquery-ui/jquery-ui.js"></script>
	
	<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
	<script>
	  $.widget.bridge('uibutton', $.ui.button);
	</script>
	
	<!-- Bootstrap 3.3.7 -->
	<script src="assets/vendor_components/bootstrap/dist/js/bootstrap.js"></script>
	
	<!-- Morris.js charts -->
	<script src="assets/vendor_components/raphael/raphael.js"></script>
	<script src="assets/vendor_components/morris.js/morris.js"></script>
	
	<!-- Sparkline -->
	<script src="assets/vendor_components/jquery-sparkline/dist/jquery.sparkline.js"></script>
	
	<!-- jvectormap -->
	<script src="assets/vendor_plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>	
	<script src="assets/vendor_plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
	
	<!-- jQuery Knob Chart -->
	<script src="assets/vendor_components/jquery-knob/js/jquery.knob.js"></script>
	
	<!-- daterangepicker -->
	<script src="assets/vendor_components/moment/min/moment.min.js"></script>
	<script src="assets/vendor_components/bootstrap-daterangepicker/daterangepicker.js"></script>
	
	<!-- datepicker -->
	<script src="assets/vendor_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.js"></script>
	
	<!-- Bootstrap WYSIHTML5 -->
	<script src="assets/vendor_plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.js"></script>
	
	<!-- Slimscroll -->
	<script src="assets/vendor_components/jquery-slimscroll/jquery.slimscroll.js"></script>
	
	<!-- FastClick -->
	<script src="assets/vendor_components/fastclick/lib/fastclick.js"></script>
	
	<!-- mínimo admin App -->
	<script src="js/template.js"></script>
	
	<!-- mínimo admin dashboard demo (This is only for demo purposes) -->
	<script src="js/pages/dashboard.js"></script>
	
	<!-- mínimo admin for demo purposes -->
	<script src="js/demo.js"></script>

	
</body>

<!-- Mirrored from html-templates.multipurposethemes.com/bootstrap-4/admin/minimo-admin/minimoadmin-bootstrap-3/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 13 Apr 2019 06:54:23 GMT -->
</html>
