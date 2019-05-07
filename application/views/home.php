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

	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
		integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	<!-- Favicon -->
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
	<link rel="icon" type="image/png" href="favicon.png" />

	<!-- Font Awesome -->
	<link rel="stylesheet" type="text/css"
		href="<?php echo base_url('bower_components/font-awesome/css/font-awesome.min.css');?>">

	<!-- Web Fonts -->
	<link href="//fonts.googleapis.com/css?family=Playfair+Display:400,700%7COpen+Sans:300,400,600,700"
		rel="stylesheet">

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

		.vertical-align-middle {
			vertical-align: middle;
		}

		.padding-bottom-3 {
			padding-bottom: 3px;
		}

		.responsive {
			width: 100%;
			max-width: 324px;
			height: auto;
		}

	</style>

	<!--     Fonts and icons     -->
	<link rel="stylesheet" type="text/css"
		href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">

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
			<img class="responsive"  src="<?php echo base_url('amslogo.png');?>">

		</div>

		<br>

		<!-- left Bordered -->
		<blockquote class="blockquote-v1 blockquote-v1--left">


			<p><i class="fas fa-cubes"></i> ระบบจัดการพัสดุครุภัณฑ์ด้วย QR Code และ NFC <!--<i
					class="material-icons vertical-align-middle padding-bottom-3" style="margin-right:5px;">favorite</i>-->
			</p>
			<footer class="blockquote-footer"><a href="http://dev.amsapp.net/" >AMS DEV TEAM</a></footer>
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
					<a href="<?php echo base_url('login');?>"
						class="btn btn-block btn-lg btn-outline-primary">
						<div>
							<i class="material-icons vertical-align-middle padding-bottom-3" style="margin-right:5px;">
								exit_to_app
							</i>LOG IN to AMS
						</div>
					</a>
					<!--<button type="button" class="btn btn-block btn-lg btn-dark">SYSTEM</button>-->
				</div>
				<div class="col-lg-6 mb-2 mb-lg-0">
					<a href="http://dev.amsapp.net/AMS_QRGEN_Setup_1.0.0.exe"
						class="btn btn-block btn-lg btn-outline-success"><i class="fab fa-android"
							style="margin-right:5px;"></i>Download APK for Android</a>
					<!--<button type="button" class="btn btn-block btn-lg btn-dark">SYSTEM</button>-->
				</div>
				<!--
				<div class="col-lg-4 mb-2 mb-lg-0">
					<a href="http://dev.amsapp.net/AMS-setup-win.exe"
						class="btn btn-block btn-lg btn-outline-info"><i class="fab fa-windows"
							style="margin-right:5px;"></i>Download EXE for Windows</a>
					<button type="button" class="btn btn-block btn-lg btn-dark">SYSTEM</button>
				</div>-->
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
		<script defer src="https://use.fontawesome.com/releases/v5.1.1/js/all.js"
			integrity="sha384-BtvRZcyfv4r0x/phJt9Y9HhnN5ur1Z+kZbKVgzVBAlQZX4jvAuImlIz+bG7TS00a" crossorigin="anonymous">
		</script>
</body>

</html>
