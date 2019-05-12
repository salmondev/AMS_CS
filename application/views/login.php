<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Log In</title>
	<link rel="icon" href="<?=base_url()?>/favicon.png" type="image/png">
	<!-- Tell the browser to be responsive to screen width -->
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
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

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

	<style>
		button {
			z-index: 1;
			position: relative;
			font-size: inherit;
			font-family: inherit;
			color: white;
			padding: 0.5em 1em;
			outline: none;
			border: none;
			background-color: hsl(246, 41%, 21%);
			overflow: hidden;
			transition: color 0.4s ease-in-out;
		}

		button::before {
			content: '';
			z-index: -1;
			position: absolute;
			bottom: 100%;
			right: 100%;
			width: 1em;
			height: 1em;
			border-radius: 50%;
			background-color: #008d4c;
			transform-origin: center;
			transform: translate(50%, 50%) scale(0);
			transition: transform 0.45s ease-in-out;
		}

		button:hover {
			cursor: pointer;
			color: #161616;
		}

		button:hover::before {
			transform: translate(50%, 50%) scale(15);
		}

		div {
			position: relative;
		}

		input {
			width: 6.5em;
			color: white;
			font-size: inherit;
			font-family: inherit;
			background-color: transparent;
			border: 1px solid transparent;
			border-bottom-color: hsla(185, 100%, 62%, 0.2);
		}

		input:focus {
			outline: none;
		}

		input::placeholder {
			color: hsla(0, 0%, 100%, 0.6);
		}

		span.a {
			position: absolute;
			bottom: 0;
			left: 0;
			right: 0;
			height: 1px;
			background-color: #3cefff;
			transform-origin: bottom right;
			transform: scaleX(0);
			transition: transform 0.5s ease;
		}

		input:focus~span.a {
			transform-origin: bottom left;
			transform: scaleX(1);
		}

	</style>

	<script>
		function lettersOnly(input) {
			var regex = /[^a-z]/gi;
			input.value = input.value.replace(regex, "");
		}

	</script>



	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css?family=Sarabun" rel="stylesheet">

	<link rel="stylesheet"
		href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

	<link href="https://unpkg.com/material-components-web@latest/dist/material-components-web.min.css" rel="stylesheet">
	<script src="https://unpkg.com/material-components-web@latest/dist/material-components-web.min.js"></script>

</head>

<body class="hold-transition login-page" style="font-family: 'Sarabun', sans-serif;">
	<div class="login-box">
		<div class="login-logo">
			<a href="http://amsapp.net/"><b>AMS</b></a>
		</div>
		<!-- /.login-logo -->
		<div class="login-box-body">
			<!-- <p class="login-box-msg">เข้าสู่ระบบจัดการพัสดุ/ครุภัณฑ์</p> -->
			<p class="login-box-msg">Asset Management System</p>


			<!--
				<div class="form-group has-feedback">
					<input type="text" name="emp_username" id="owner_fname" class="form-control" placeholder="Username" onkeyup="lettersOnly(this)">
					<span class="glyphicon glyphicon-user form-control-feedback"></span>
				</div>



				<div class="form-group has-feedback">
					<input type="password" name="emp_password" id="owner_uid" class="form-control" required minlength="4" placeholder="Password">
					<span class="glyphicon glyphicon-lock form-control-feedback"></span>
				</div> -->

			<!-- ///////////////////////////////////////////////////// 
			<div class="form__element">
            <input class="form__input" id="password" type="password" name="password" required minlength="8" aria-describedby="passwordHint" autocomplete="current-password">
            <p class="form__hint" id="passwordHint">The password must be at least 8 characters long.</p>
        </div>-->
			<!--<div class=" col-md-12">-->
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title" style="font-family: 'Sarabun', sans-serif;"><i
							class="btn-label glyphicon glyphicon-user"></i>&nbsp;เข้าสู่ระบบจัดการพัสดุ/ครุภัณฑ์
					</h3>
				</div>
				<div class="panel-body">
					<div class="page-body">
						<form name="login" action="<?php echo site_url('login/check');?>" method="post">
							<div class="row">
								<div class="col-md-8 col-xs-11 ">
									<div class="form-group"><label class="control-label required" for="LoginForm_username">ชื่อผู้ใช้
											<span class="required">*</span></label>
										<div class="form-group has-feedback">
											<input type="text" name="emp_username" id="owner_fname" class="form-control"
												placeholder="Username" onkeyup="lettersOnly(this)">
											<span class="a"></span>
											<span class="glyphicon glyphicon-user form-control-feedback"></span>
										</div>
										<p id="LoginForm_username_em_" style="display:none" class="help-block"></p>
									</div>
								</div>
							</div>
					</div>

					<div class="row">
						<div class="col-md-8 col-xs-11 ">
							<div class="form-group"><label class="control-label required" for="LoginForm_password">รหัสผ่าน <span
										class="required">*</span></label>
								<div class="form-group has-feedback">
									<input type="password" name="emp_password" id="owner_uid" class="form-control" required minlength="4"
										placeholder="Password">
									<span class="a"></span>
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
</body>

</html>
