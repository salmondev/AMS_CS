<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
		integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<title>dev.ams</title>
	<style>
		body,
		.post {
			background: #fff;
			color: #222;
		}

		body.is-dark-mode,
		.post.is-dark-mode {
			background: #222;
			color: #fff;
		}

		body {
			margin: 0;
			padding: 0;
			font-family: sans-serif;
		}

		section {
			position: absolute;
			top: 0;
			left: 0;
			width: 100%;
			height: 100vh;
			box-sizing: border-box;
			padding: 100px;
			transition: 0.5s;
		}

		section.dark {
			background: #262626;
			color: #fff;
		}

		ul {
			position: absolute;
			top: 20px;
			right: 20px;
			margin: 0;
			padding: 0;
			width: 100px;
			height: 30px;
			z-index: 1;
			border: 1px solid #000;
			border-radius: 4px;
			cursor: pointer;
			overflow: hidden;
		}

		ul.active {
			border-color: #fff;
		}

		ul li {
			list-style: none;
			width: 100%;
			height: 60px;
			text-align: center;
			text-transform: uppercase;
			transition: 0.5s;
		}

		ul.active li {
			transform: translateY(-30px);
		}

		ul li span {
			display: block;
			width: 100%;
			height: 30px;
			line-height: 30px;
			color: #262626;
			background: #fff;
		}

		ul li span:nth-child(1) {
			background: #262626;
			color: #fff;
		}

	</style>

</head>

<body>
	<section>

		<h1>Asset Management System DEV section</h1>
		<div class="alert alert-success" role="alert">
			<h4 class="alert-heading">dev subdomain</h4>
			<p>dev.amsapp.net</p>
			<hr>
			<p class="mb-0">panurutDEV</p>
		</div>
		<h2>Dev Content</h2>
		<h1>AMS QR Code Generater</h1>
		<p>AMS QR Code Generater is desktop applictaion build with <a href="https://electronjs.org/" target="_blank">Electron</a> framework technology</p>
		<p>Convert web technology to be app write in javascript with <a href="https://nodejs.org/en/" target="_blank">NodeJS</a> backend.</p>
		<p>The app can be easy to generate QR Code from text input and print on PDF file via standard platfrom on your PC.</p>
	

		<a href="http://dev.amsapp.net/AMS_QRGEN_Setup_1.0.0.exe" class="btn btn-primary"><span class="glyphicon glyphicon-download"></span>Download AMS_QRGen</a>


		<a href="http://www.amsapp.net/" class="btn btn-outline-info">Switch Mode</a>

		

	</section>

	<ul>
		<li>
			<span>Dark</span>
			<span>Light</span>
		</li>
	</ul>

	


	<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
	<script type="text/javascript">
		$(document).ready(function () {
			$('ul').click(function () {
				$('ul').toggleClass('active')
				$('section').toggleClass('dark')
			})
		})

	</script>

	<script>
		$(function () {
			initialViewMode()

			function initialViewMode() {
				var viewMode = localStorage.getItem('viewMode');
				if (viewMode && viewMode === 'dark') {
					$('body .post').addClass('is-dark-mode');
				}
			}

			function toggleViewMode() {
				var viewMode = localStorage.getItem('viewMode');
				$('body .post').toggleClass('is-dark-mode');

				localStorage.setItem('viewMode', viewMode && viewMode === 'dark' ? 'light' : 'dark');
			}

			$('#toggle-view').on('click', function () {
				toggleViewMode();
			});
		})

	</script>

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
		integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
	</script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
		integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
	</script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
		integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
	</script>
</body>

</html>
