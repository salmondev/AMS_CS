<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!doctype html>
<html lang="en">

<head>
	<title>AMS</title>
	<link rel="icon" href="<?=base_url()?>/favicon.png" type="image/png">
	<!-- Meta -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
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

	<style>
		#block_container {
			text-align: left;
		}

		#bloc1,
		#bloc2 {
			display: inline;
		}

		.content {
			/*max-width: 1000px;*/
			margin: auto;
		}

		.footer {
			position: fixed;
			left: 0;
			bottom: 0;
			width: 100%;
			background-color: white;
			color: white;
			text-align: center;


		}

	</style>
</head>

<body class="content">
	<div style="margin: 2%;">
		<div id="block_container">
			<!--<div id="bloc1"><i class="fas fa-code" style="font-size: 4em;"></i></div> -->
			<div id="bloc2">
				<h1 class="display-4 text-primary"> Asset Management System <h1>
			</div>
		</div>
		<br>
		
		<div style="margin-top: 2%;">
<img class="img-fluid "src="<?php echo base_url('images/favicon/website.png');?>">
</div>

		<br>

		<!-- left Bordered -->
		<blockquote class="blockquote-v1 blockquote-v1--left">
			
			<p>AMS System under maintenance.</p>
			<footer class="blockquote-footer">AMS</footer>
		</blockquote>
		<!-- End left Bordered -->
		<!--
<br>
<a class="btn btn-outline-info btn-lg btn-block" target="_blank" href="https://en.wikipedia.org/wiki/Near-field_communication" role="button">NFC</a>
</div>
<br>-->
		<!-- Block -->
		<div class="demo-btn-space mb-7" style="margin: 2%;">
			<h3 class="h6 mb-3"></h3>
			<div class="row">
				<div class="col-lg-6 mb-2 mb-lg-0">
					<a href="<?php echo base_url('index.php/login');?>" class="btn btn-block btn-lg btn-outline-primary">LOG IN</a>
					<!--<button type="button" class="btn btn-block btn-lg btn-dark">SYSTEM</button>-->
				</div>
				<!--
              <div class="col-lg-6">
                <a href="<?php echo base_url('index.php/login');?>"class="btn btn-block btn-lg btn-outline-primary">LOG IN</a>
              </div>-->
			</div>
		</div>
		<!-- End Block -->



		<!-- ************************************************************************ -->


		<!-- ************************************************************************ -->
		<br>
		<div class="footer">
			<h5 class="bg-primary text-light" align="center">Copyright © 2019 CS KMUTNB</h5>
		</div>
		<!-- JAVASCRIPTS (Load javascripts at bottom, this will reduce page load time) -->
		<!-- Global Vendor -->
		<script src="<?php echo base_url('assets/vendors/jquery.min.js');?>"></script>
		<script src="<?php echo base_url('assets/vendors/jquery.migrate.min.js');?>"></script>
		<script src="<?php echo base_url('assets/vendors/popper.min.js');?>"></script>
		<script src="<?php echo base_url('assets/vendors/bootstrap/js/bootstrap.min.js');?>"></script>

		<!-- Theme Settings and Calls -->
		<script src="<?php echo base_url('assets/js/global.js');?>"></script>
		<!-- END JAVASCRIPTS -->

		<!-- Font Awesome's-->
		<script defer src="https://use.fontawesome.com/releases/v5.1.1/js/all.js" integrity="sha384-BtvRZcyfv4r0x/phJt9Y9HhnN5ur1Z+kZbKVgzVBAlQZX4jvAuImlIz+bG7TS00a"
		 crossorigin="anonymous"></script>
</body>

</html>
