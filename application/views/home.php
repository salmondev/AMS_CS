<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!doctype html>
<html lang="en">
  <head>
    <title>ItemTracker</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" type="image/png" href="favicon.png" />

    <!-- Web Fonts -->
    <link href="//fonts.googleapis.com/css?family=Playfair+Display:400,700%7COpen+Sans:300,400,600,700" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/vendors/bootstrap/css/bootstrap.css'); ?>">

    <!-- Theme Styles -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/styles.css'); ?>">

    <!-- Bootstrap Gallery -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">
    <link rel="stylesheet" href="fluid-gallery.css">

  </head>

  <body> 
    <div style="margin: 2%;">

    <h1  class="display-4 text-primary col-sm-12">
ItemTracker    <br>
<div style="margin-top: 5%; margin-left: 5%; margin-right: 5x%;">
<img class="img-fluid "src="<?php echo base_url('assets/img/earth1.jpg');?>">
</div>
    
    <br>
  
<!-- left Bordered -->
  <blockquote class="blockquote-v1 blockquote-v1--left">
  <p>Itemtracker can track item you want. App can locate position geolocation with QR Code scan by Smartphone application.</p>
  <footer class="blockquote-footer">ItemTracker</footer>
  </blockquote>
<!-- End left Bordered -->

<br>
<a class="btn btn-outline-info btn-lg btn-block" target="_blank" href="http://qrtracker.org/" role="button">QR CODE</a>
</div>
<br>
<!-- Block -->
<div class="demo-btn-space mb-7" style="margin: 2%;">
            <h3 class="h6 mb-3"></h3>
            <div class="row">
              <div class="col-lg-6 mb-2 mb-lg-0">
                <button type="button" class="btn btn-block btn-lg btn-dark">SYSTEM</button>
              </div>

              <div class="col-lg-6">
                <a href="<?php echo base_url('index.php/login');?>"class="btn btn-block btn-lg btn-outline-primary">LOG IN</a>
              </div>
            </div>
          </div>
          <!-- End Block -->



<!-- ************************************************************************ -->


<!-- ************************************************************************ -->
<br>
<h4 class="bg-primary text-light" align="center">Copyright © 2018 CS KMUTNB</h4>

    <!-- JAVASCRIPTS (Load javascripts at bottom, this will reduce page load time) -->
    <!-- Global Vendor -->
    <script src="<?php echo base_url('assets/vendors/jquery.min.js');?>"></script>
    <script src="<?php echo base_url('assets/vendors/jquery.migrate.min.js');?>"></script>
    <script src="<?php echo base_url('assets/vendors/popper.min.js');?>"></script>
    <script src="<?php echo base_url('assets/vendors/bootstrap/js/bootstrap.min.js');?>"></script>

    <!-- Theme Settings and Calls -->
    <script src="<?php echo base_url('assets/js/global.js');?>"></script>
    <!-- END JAVASCRIPTS -->
  </body>
</html>