<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin Getz Seat Cover</title>
   <!-- Tell the browser to be responsive to screen width -->
   <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url('').'assets/'?>bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url('').'assets/'?>bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url('').'assets/'?>bower_components/Ionicons/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url('').'assets/'?>bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url('').'assets/'?>dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="<?php echo base_url('').'assets/'?>dist/css/animate.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url('').'assets/'?>dist/css/skins/_all-skins.min.css">

  <!-- jQuery 3 -->
<script src="<?php echo base_url('').'assets/'?>bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url('').'assets/'?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="<?php echo base_url('').'assets/'?>bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url('').'assets/'?>bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="<?php echo base_url('').'assets/'?>bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url('').'assets/'?>bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('').'assets/'?>dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url('').'assets/'?>dist/js/demo.js"></script>
<script src="<?php echo base_url('').'assets/'?>dist/js/bootstrap-notify.js"></script>
<!-- page script -->

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>GSC</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Admin</b> Getz</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo base_url('').'assets/'?>dist/img/pp.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo $_SESSION['userdata']->nama?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?php echo base_url('').'assets/'?>dist/img/pp.jpg" class="img-circle" alt="User Image">
                <p>
                <?php echo $_SESSION['userdata']->nama?>
                  <small>Getz Seat Cover</small>
                </p>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                </div>
                <div class="pull-right">
                  <a href="<?php echo base_url()?>auth/logout" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
       <?php
        include('menusuperadmin.php');
        ?>
    </section>
    <!-- /.sidebar -->
  </aside>
  <div class="content-wrapper">
  <!-- Content Wrapper. Contains page content -->
 
    <!-- Content Header (Page header) -->
    <?php echo $contents; ?>
  
  <!-- /.content-wrapper -->
  </div>
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 1.1.0
    </div>
    <strong>Copyright &copy; 2019 IREY.</strong> All rights reserved.
  </footer>
</body>
</html>

<script>
 <?php if(!empty($error)){ ?> 
 setnotif('<?php echo $error?>'); 
 <?php }?>
  function validate(evt) {
  var theEvent = evt || window.event;

  // Handle paste
  if (theEvent.type === 'paste') {
      key = event.clipboardData.getData('text/plain');
  } else {
  // Handle key press
      var key = theEvent.keyCode || theEvent.which;
      key = String.fromCharCode(key);
  }
  var regex = /[0-9]/;
  if( !regex.test(key) ) {
    theEvent.returnValue = false;
    if(theEvent.preventDefault) theEvent.preventDefault();
  }
}
function setnotif(err)
{ 
  $.notify({
	// options
	icon: 'glyphicon glyphicon-warning-sign',
	title: 'Error',
	message: err,
  },{
    // settings
    element: 'body',
    position: null,
    type: "danger",
    allow_dismiss: true,
    newest_on_top: false,
    showProgressbar: false,
    placement: {
      from: "bottom",
      align: "right"
    },
    offset: 20,
    spacing: 10,
    z_index: 1031,
    delay: 5000,
    timer: 1000,
    url_target: '_blank',
    mouse_over: null,
    animate: {
      enter: 'animated fadeInRight',
      exit: 'animated fadeOutRight'
    },
    onShow: null,
    onShown: null,
    onClose: null,
    onClosed: null,
    icon_type: 'class',
    template: '<div data-notify="container" class="col-xs-11 col-sm-3 alert alert-{0}" role="alert">' +
      '<button type="button" aria-hidden="true" class="close" data-notify="dismiss">×</button>' +
      '<span data-notify="icon"></span> ' +
      '<span data-notify="title">{1}</span> ' +
      '<span data-notify="message">{2}</span>' +
      '<div class="progress" data-notify="progressbar">' +
        '<div class="progress-bar progress-bar-{0}" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>' +
      '</div>' +
      '<a href="{3}" target="{4}" data-notify="url"></a>' +
    '</div>' 
  });
}
</script>
