
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
  <link href="https://fonts.googleapis.com/css?family=Dancing+Script|Merienda" rel="stylesheet">
  
  <script type="text/javascript" language="javascript" src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<script type="text/javascript" language="javascript" src="http://cdn.datatables.net/1.10.4/js/jquery.dataTables.min.js"></script>

  <style>
  .file {
    visibility: hidden;
    position: absolute;
  }
  </style>

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
        <h1>
          Halaman Struktur Organisasi
        </h1>
      </section>
      <!-- Main content -->
      <section class="content">
        <div class="container">
          <h3 align="center"><b>Edit Data Struktur</b></h3>
         <div class="col-md-3">
         </div>
         <div class="jumbotron col-md-6">
           <?php foreach($struktur as $s) {?>
             <!--<?=form_open_multipart('C_Struktur/proses_ubah/'.$s->id)?>-->
             <?=form_open_multipart('C_Struktur/proses_ubah/'.$s->id)?>
            <div class="form-group">
              <label for="nama">Nama :</label>
              <input type="text" name="nama" class="form-control" placeholder="Masukan Nama Anggota" id="nama" value="<?php echo $s->nama ?>" required>
            </div>
            <div class="form-group">
              <label for="jabatan">Jabatan :</label>
              <input type="text" name="jabatan" class="form-control" placeholder="Masukan Jabatan" id="jabatan" value="<?php echo $s->jabatan ?>" required>
            </div>
            <div class="form-group">
              <label for="userfile">Gambar :</label>
              <input type="file" name="userfile" class="file">
              <div class="input-group col-xs-12">
                <span class="input-group-addon"><i class="glyphicon glyphicon-picture"></i></span>
                <input type="text" class="form-control input-lg" disabled placeholder="Upload Gambar (max. 2MB)">
                <span class="input-group-btn">
                  <button class="browse btn btn-primary input-lg" type="button"><i class="glyphicon glyphicon-search"></i> Telusuri</button>
                </span>
              </div><br>
            </div>
          <?php }?>
                <button type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-floppy-disk"></i> Simpan</button>
         </div>

        </div> <!-- /container -->
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


<script type="text/javascript">
  $(document).on('click', '.browse', function(){
    var file = $(this).parent().parent().parent().find('.file');
    file.trigger('click');
  });
  $(document).on('change', '.file', function(){
    $(this).parent().find('.form-control').val($(this).val().replace(/C:\\fakepath\\/i, ''));
  });
  </script>
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
