
 <!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin Kominfo</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url()."assets/"; ?>bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url()."assets/"; ?>bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url()."assets/"; ?>bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url()."assets/"; ?>dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url()."assets/"; ?>dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="<?php echo base_url()."assets/"; ?>bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?php echo base_url()."assets/"; ?>bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="<?php echo base_url()."assets/"; ?>bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url()."assets/"; ?>bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="<?php echo base_url()."assets/"; ?>plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="<?php echo base_url()."assets/"; ?>https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="<?php echo base_url()."assets/"; ?>https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="<?php echo base_url()."assets/"; ?>https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <link href="https://fonts.googleapis.com/css?family=Dancing+Script|Merienda|Pacifico" rel="stylesheet">

</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="<?php echo base_url()."assets/"; ?>index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b><font style="font-family: 'Dancing Script', cursive;">Kominfo</font></b></span>
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
  <?php if ($this->session->flashdata('success')): ?>
		<div class="alert alert-success">
			<?php echo $this->session->flashdata('success') ?>
		</div>
	<?php endif ?>
	    <!-- sidebar: style can be found in sidebar.less -->
	    <section class="sidebar">
	      <!-- sidebar menu: : style can be found in sidebar.less -->
	      <ul class="sidebar-menu" data-widget="tree">
	        <li class="header">MAIN NAVIGATION</li>

	        <li>
	          <a href="<?php echo base_url() ?>index.php/C_Login/success">
	            <i class="fa fa-dashboard"></i> <span>Home</span>
	          </a>
	        </li>

	        <li>
	          <a href="<?php echo base_url() ?>index.php/C_VisiMisi/index">
	            <i class="fa fa-book"></i> <span>Visi Misi</span>
	          </a>
        	</li>


			<li>
	          <a href="<?php echo base_url() ?>index.php/C_TugasFungsi/index">
	            <i class="fa fa-files-o"></i> <span>Tugas dan Fungsi</span>
	          </a>
	        </li>

	        <!-- <li>
	          <a href="<?php echo base_url() ?>index.php/C_Struktur/index">
	            <i class="fa fa-edit"></i> <span>Struktur Organisasi</span>
	          </a>
	        </li> -->

          <li>
            <a href="<?php echo base_url() ?>index.php/C_Struktur/data">
              <i class="fa fa-folder"></i> <span>Struktur Organisasi</span>
            </a>
          </li>

	        <li>
	          <a href=" <?php echo base_url() ?>index.php/C_Login/logout">
	            <i class="fa fa-share"></i> <span>Logout</span>
	          </a>
	        </li>
	    </section>
	    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
	    <!-- Content Header (Page header) -->
	    <section class="content-header">
      <br>
	      <h1>
	        <font style="font-family:Pacifico', cursive;">Selamat Datang,</font>
	      </h1>
        <br>
	    </section>
	    <!-- Main content -->
	    <section class="content">
        <!-- <div class="col-md-3">
    			<div class="box box-solid bg-green-gradient">
    	            <div class="box-header">
    	              <i class="fa fa-calendar"></i>
    	              <h3 class="box-title">Kalender</h3>
    	              <div class="pull-right box-tools">
    	                <button type="button" class="btn btn-success btn-sm" data-widget="collapse"><i class="fa fa-minus"></i>
    	                </button>
    	                <button type="button" class="btn btn-success btn-sm" data-widget="remove"><i class="fa fa-times"></i>
    	                </button>
    	              </div>
    	            </div>
    	            <div class="box-body no-padding">
    	              <div id="calendar" style="width: 100%"></div>
                </div>
        </div> -->
        <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
            <br>
              <h4>Pantau Website</h4>

              <p></p>
              <br>
            </div>
            <div class="icon">
              <i class="fa fa-globe"></i>
            </div>
            <a href="http://kominfo.bangkalankab.go.id/" class="small-box-footer">Kunjungi <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <br>
              <h4>Pantau Twitter</h4>

              <p></p>
              <br>
            </div>
            <div class="icon">
              <i class="fa fa-twitter"></i>
            </div>
            <a href="https://twitter.com/kominfobkl" class="small-box-footer">Kunjungi <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
            <br>
              <h4>Pantau Instagram</h4>

              <p></p>
              <br>
            </div>
            <div class="icon">
              <i class="fa fa-instagram"></i>
            </div>
            <a href="https://www.instagram.com/kominfobkl/" class="small-box-footer">Kunjungi <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-blue">
            <div class="inner">
            <br>
              <h4>Pantau Facebook</h4>

              <p></p>
              <br>
            </div>
            <div class="icon">
              <i class="fa fa-facebook"></i>
            </div>
            <a href="#" class="small-box-footer">Kunjungi <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->
        
	    </section>
	    <!-- /.content -->
  </div>
<!-- 
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.0
    </div>
    <strong>Copyright &copy; 2014-2016 <a href="<?php echo base_url()."assets/"; ?>https://adminlte.io">Almsaeed Studio</a>.</strong> All rights
    reserved.
  </footer>
 -->
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="<?php echo base_url()."assets/"; ?>bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo base_url()."assets/"; ?>bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url()."assets/"; ?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="<?php echo base_url()."assets/"; ?>bower_components/raphael/raphael.min.js"></script>
<script src="<?php echo base_url()."assets/"; ?>bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="<?php echo base_url()."assets/"; ?>bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="<?php echo base_url()."assets/"; ?>plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?php echo base_url()."assets/"; ?>plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo base_url()."assets/"; ?>bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?php echo base_url()."assets/"; ?>bower_components/moment/min/moment.min.js"></script>
<script src="<?php echo base_url()."assets/"; ?>bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="<?php echo base_url()."assets/"; ?>bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?php echo base_url()."assets/"; ?>plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="<?php echo base_url()."assets/"; ?>bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url()."assets/"; ?>bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url()."assets/"; ?>dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url()."assets/"; ?>dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url()."assets/"; ?>dist/js/demo.js"></script>
</body>
</html>
