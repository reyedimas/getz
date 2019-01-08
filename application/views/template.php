<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url()?>assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="<?php echo base_url()?>assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Getz Seat Cover
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="<?php echo base_url()?>assets/css/material-kit.css?v=2.0.5" rel="stylesheet" />
  <link href="<?php echo base_url()?>assets/css/hover-box.css" rel="stylesheet" />
  <link href="<?php echo base_url()?>assets/css/custom.css" rel="stylesheet" />
  <link href='https://api.mapbox.com/mapbox.js/v3.1.1/mapbox.css' rel='stylesheet' />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="<?php echo base_url()?>assets/demo/demo.css" rel="stylesheet" />
  
  <!--   Core JS Files   -->
  <script src="<?php echo base_url()?>assets/js/core/jquery.min.js" type="text/javascript"></script>
  <script src="<?php echo base_url()?>assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="<?php echo base_url()?>assets/js/core/bootstrap-material-design.min.js" type="text/javascript"></script>
  <script src="<?php echo base_url()?>assets/js/plugins/moment.min.js"></script>
  <!--	Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
  <script src="<?php echo base_url()?>assets/js/plugins/bootstrap-datetimepicker.js" type="text/javascript"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="<?php echo base_url()?>assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
  <!--  Google Maps Plugin    -->
  <!-- Control Center for Material Kit: parallax effects, scripts for the example pages etc -->
  <script src="<?php echo base_url()?>assets/js/material-kit.js?v=2.0.5" type="text/javascript"></script>
  <script src="<?php echo base_url()?>assets/js/hover-box.js" type="text/javascript"></script>
  <script src='https://api.mapbox.com/mapbox.js/v3.1.1/mapbox.js'></script>
</head>

<body class="index-page sidebar-collapse" style="background-color: black;">
  <nav class="navbar navbar-transparent navbar-color-on-scroll fixed-top navbar-expand-lg navbar-background" color-on-scroll="100" id="sectionsNav">
    <div class="container">
      <div class="navbar-translate">
        <a class="navbar-brand" href="<?php echo base_url()?>home">
        <img style="width:15%; margin-top:-15px;" src="<?php echo base_url()?>assets/img/logo.png" alt="Getz Seat Cover" class="img-rounded img-fluid">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="sr-only">Toggle navigation</span>
          <span class="navbar-toggler-icon"></span>
          <span class="navbar-toggler-icon"></span>
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a style="color:white;" class="nav-link" rel="tooltip" title="" data-placement="bottom" href="https://www.facebook.com/getz.cover?__tn__=%2CdC-R-R&eid=ARDkd298KHfgquKpNLVqMpi9JoW_X4HIjNGMn4B7T-KGz_p6u9lwtcM0Asb8N1xRo-py2BjnwO1QPp4K&hc_ref=ARQBJsRYLdo_m3Ud_R6WbtYvPXH0ydfES9wKHpRHBK7kjlwFbe397mzqe7YSZ6P_lmA&fref=nf" target="_blank">
              <i class="fa fa-facebook-square"></i>
            </a>
          </li>
          <li class="nav-item">
            <a style="color:white;" class="nav-link" rel="tooltip" title="" data-placement="bottom" href="https://www.instagram.com/getz_seatcover" target="_blank">
              <i class="fa fa-instagram"></i>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="page-header header-filter clear-filter" data-parallax="true" style="background-image: url('./assets/img/cover.jpg');">
    <div class="container">
      <div class="row">
        <div class="col-md-8 ml-auto mr-auto">
          <div class="brand">
            <h1 style="font: 350% Cocogoose;">GETZ SEAT COVER</h1>
            <p>With over 6 years in the Auto Upholstery business, we consider ourselves a family team. Each of our employees has his or her own talent—all aimed at transforming your automobile! Our name is Getz Seat Cover</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="main main-raised">
    <div class="section" style="padding: 0px;">
      <div class="container tim-container">
        <?php echo $contents?>
        <div class="space-50"></div>
      </div>
    </div>
  </div> 

  <footer class="footer" data-background-color="black">
    <div class="container">
      <nav class="float-left" style="text-align:left; color:white;">
        <ul>
          <p>Jl. Kabupaten Km. 1,5 Trihanggo, Gamping, Sleman, Yogyakarta 55291</p>
        </ul>
        <ul>
          <p>anjar.nurseto@gmail.com</p>
        </ul>
        <ul>
          <p>0856 4326 4531</p>
        </ul>
      </nav>
      <div class="copyright float-right" style="color:white;">
        &copy;
        <script>
          document.write(new Date().getFullYear())
        </script>, made by IREY
      </div>
    </div>
  </footer>
  
  <script>
    $(document).ready(function() {
      //init DateTimePickers
      materialKit.initFormExtendedDatetimepickers();
    });

    function scrollToDownload() {
      if ($('.section-download').length != 0) {
        $("html, body").animate({
          scrollTop: $('.section-download').offset().top
        }, 1000);
      }
    }

    $(document).ready(function() {
    });
  </script>
</body>
</html>