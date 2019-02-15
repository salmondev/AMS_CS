<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Log In</title>
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

	<script>
		function lettersOnly(input) {
    var regex = /[^a-z]/gi;
    input.value = input.value.replace(regex, "");
}
</script>

	<!-- Google Font -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition login-page">
	<div class="login-box">
		<div class="login-logo">
			<a href="home"><b>LOG IN</b></a>
		</div>
		<!-- /.login-logo -->
		<div class="login-box-body">
			<p class="login-box-msg">เข้าสู่ระบบจัดการพัสดุ/ครุภัณฑ์</p>

			<form name="login" action="<?php echo site_url('login/check');?>" method="post">

				<div class="form-group has-feedback">
					<input type="text" name="emp_username" id="owner_fname" class="form-control" placeholder="Username" onkeyup="lettersOnly(this)">
					<span class="glyphicon glyphicon-user form-control-feedback"></span>
				</div>



				<div class="form-group has-feedback">
					<input type="password" name="emp_password" id="owner_uid" class="form-control" required minlength="4" placeholder="Password">
					<span class="glyphicon glyphicon-lock form-control-feedback"></span>
				</div>

				<!-- ///////////////////////////////////////////////////// 
			<div class="form__element">
            <input class="form__input" id="password" type="password" name="password" required minlength="8" aria-describedby="passwordHint" autocomplete="current-password">
            <p class="form__hint" id="passwordHint">The password must be at least 8 characters long.</p>
        </div>-->
				<!-- ///////////////////////////////////////////////////// -->
				<div class="row">

					<!-- /.col -->
					<div class="col-xs-4">
						<button type="submit" class="btn btn-primary btn-block ">Log In</button>

					</div>
					<div class="col-xs-4">
					</div>
					<div class="col-xs-4">
						<a href="<?php echo site_url('home') ?>">
							<p class="btn btn-danger">HOME</p>
						</a>
					</div>

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
