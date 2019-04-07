<!doctype html>
<html lang="en">

<head>
	<title>AMS</title>
	<link rel="icon" href="<?=base_url()?>/favicon.png" type="image/png">
	<!-- Meta -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
	 crossorigin="anonymous">
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

	<!-- Bootstrap 3.3.7 -->
	<link rel="stylesheet" href="<?php echo base_url('bower_components/bootstrap/dist/css/bootstrap.min.css');?>">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="<?php echo base_url('bower_components/font-awesome/css/font-awesome.min.css');?>">
	<!-- Ionicons -->
	<link rel="stylesheet" href="<?php echo base_url('bower_components/Ionicons/css/ionicons.min.css');?>">
	<!-- Theme style -->
	<link rel="stylesheet" href="<?php echo base_url('dist/css/AdminLTE.min.css');?>">
	<!-- iCheck -->
	<link rel="stylesheet" href="<?php echo base_url('plugins/iCheck/square/blue.css');?>">

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

	<script>
		function lettersOnly(input) {
			var regex = /[^a-z]/gi;
			input.value = input.value.replace(regex, "");
		}

	</script>

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
			<img class="img-fluid " src="<?php echo base_url('images/favicon/website.png');?>">
		</div>

		<br>
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title"><i class="btn-label glyphicon glyphicon-user"></i>&nbsp;เข้าสู่ระบบจัดการพัสดุ/ครุภัณฑ์
				</h3>
			</div>
			<div class="panel-body">
				<div class="page-body">
					<form name="login" action="<?php echo site_url('login/check');?>" method="post">
						<div class="row">
							<div class="col-md-8 col-xs-11 ">
								<div class="form-group"><label class="control-label required" for="LoginForm_username">ชื่อผู้ใช้ <span class="required">*</span></label>
									<div class="form-group has-feedback">
										<input type="text" name="emp_username" id="owner_fname" class="form-control" placeholder="Username" onkeyup="lettersOnly(this)">
										<span class="glyphicon glyphicon-user form-control-feedback"></span>
									</div>
									<p id="LoginForm_username_em_" style="display:none" class="help-block"></p>
								</div>
							</div>
						</div>
				</div>

				<div class="row">
					<div class="col-md-8 col-xs-11 ">
						<div class="form-group"><label class="control-label required" for="LoginForm_password">รหัสผ่าน <span class="required">*</span></label>
							<div class="form-group has-feedback">
								<input type="password" name="emp_password" id="owner_uid" class="form-control" required minlength="4"
								 placeholder="Password">
								<span class="glyphicon glyphicon-lock form-control-feedback"></span>
							</div>
							<p id="LoginForm_password_em_" style="display:none" class="help-block"></p>
						</div>
					</div>
				</div>
			</div>
			<div class="row">

				<div class="col-xs-8 col-xs-6 " align="center">
					<button type="submit" class="btn btn-success btn-palegreen" title="Login">
						<i class="btn-label glyphicon glyphicon-lock"></i>&nbsp;เข้าสู่ระบบ
					</button>
				</div>

				<div class="col-xs-4 col-xs-6 ">

				</div>

				<div class="col-xs-4 col-xs-6 ">

				</div>
				<!--
					<div class="col-xs-8 col-xs-6 ">
					<a href="<?php echo site_url('home') ?>">
						<p class="btn btn-danger">HOME</p>
					</a>
					</div>-->
			</div>

			<div class="row">
				<br>
				<!--
					<a style="padding-left: 20px;" href="/index.php/Home/RegisterMember" target="_blank" role="button" class="btn-small btn-link"><i
						 class="btn-label glyphicon glyphicon-hand-right"></i>&nbsp;&nbsp;ลงทะเบียนผู้ใช้ทั่วไป</a><br>  -->
				<!--
										<a style="padding-left: 20px;" href="/index.php/Home/GetUserForgotPassword" target="_blank" role="button"
										 class="btn-small btn-link"><i class="btn-label glyphicon glyphicon-hand-right"></i>&nbsp;&nbsp;ลืมรหัสผ่าน
											(Forgot password?)</a> </div> -->
				</form>
			</div>
		</div>
		<!--</div>-->
		<!-- ///////////////////////////////////////////////////// -->
		<div class="row">

			<!-- /.col -->
			<!--
				<div class="col-xs-4">
					<button type="submit" class="btn btn-primary btn-block ">Log In</button>

				</div>
				<div class="col-xs-4">
				</div>
				<div class="col-xs-4">
					<a href="<?php echo site_url('home') ?>">
						<p class="btn btn-danger">HOME</p>
					</a>
				</div> -->

			<!-- /.col -->
		</div>
		</form>
		<!--
    <div class="social-auth-links text-center">
      <p>- OR -</p>
      <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using
        Facebook</a>
      <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign in using
        Google+</a>
    </div>
    <!-- /.social-auth-links -->



	</div>
	<!-- /.login-box-body -->
	</div>
	<!-- /.login-box -->

	<!-- jQuery 3 -->
	<script src="<?php echo base_url('bower_components/jquery/dist/jquery.min.js');?>"></script>
	<!-- Bootstrap 3.3.7 -->
	<script src="<?php echo base_url('bower_components/bootstrap/dist/js/bootstrap.min.js');?>"></script>
	<!-- iCheck -->
	<script src="<?php echo base_url('plugins/iCheck/icheck.min.js');?>"></script>
	<script>
		$(function () {
			$('input').iCheck({
				checkboxClass: 'icheckbox_square-blue',
				radioClass: 'iradio_square-blue',
				increaseArea: '20%' /* optional */
			});
		});

	</script>
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
