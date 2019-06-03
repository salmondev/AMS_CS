<?php

  if(!empty($_FILES['uploaded_file']))
  {
    $path = "drive/";
    $path = $path . basename( $_FILES['uploaded_file']['name']);
    if(move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $path)) {
      echo "The file ".  basename( $_FILES['uploaded_file']['name']). 
      " has been uploaded";
    } else{
        echo "There was an error uploading the file, please try again!";
	}
	header('Location: index.php');
  }

?>


<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
		integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<!-- SweetAlert -->
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>

	<title>drive.ams</title>
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

		<h1>Asset Management System Drive</h1>
		<div class="alert alert-success" role="alert">
			<h4 class="alert-heading">developer session</h4>
			<p>drive.amsapp.net</p>
			<hr>
			<p class="mb-0">panurutDEV</p>
		</div>
		<div class="alert alert-primary" role="alert">
			<h4 class="alert-heading">Drive</h4>
			<p><?php 
			$dir    = '/drive';
			$files1 = scandir($dir);
			echo $files1;
			print_r($files1);
			?></p>
			<hr>
		</div>

		</br></br></br>

		<div class="card text-white bg-dark mb-6" style="max-width: 30rem;">
			<div class="card-header">AMS DRIVE</div>
			<div class="card-body">
				<h5 class="card-title">Upload your file</h5>
				<p class="card-text">
					<form action="index.php" enctype="multipart/form-data" method="POST">
						<p>_developer file</p>
						<!--<input type="file" name="uploaded_file" ></input>-->
						<!--<label class="btn btn-primary">
							Browse&hellip; <input type="file" name="uploaded_file" style="display: none;">
						</label>-->
						<div class="input-group">
							<label class="input-group-btn">
								<span class="btn btn-primary">
									Browse&hellip; <input type="file" name="uploaded_file" style="display: none;" multiple>
								</span>
							</label>
							<input type="text" class="form-control" readonly>
						</div>
						</br>
						<input type="submit" value="Upload" class="btn btn-success" onclick="sc()"></input>
					</form>
				</p>
			</div>
		</div>


	</section>

	<ul>
		<li>
			<span>Dark</span>
			<span>Light</span>
		</li>
	</ul>

	<script>
		function sc() {
			Swal.fire(
				'Upload Success',
				'Your file has been saved.',
				'success'
			)
		}

	</script>




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

		///////////////////////////////
		//uploader
		$(function () {

			// We can attach the `fileselect` event to all file inputs on the page
			$(document).on('change', ':file', function () {
				var input = $(this),
					numFiles = input.get(0).files ? input.get(0).files.length : 1,
					label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
				input.trigger('fileselect', [numFiles, label]);
			});

			// We can watch for our custom `fileselect` event like this
			$(document).ready(function () {
				$(':file').on('fileselect', function (event, numFiles, label) {

					var input = $(this).parents('.input-group').find(':text'),
						log = numFiles > 1 ? numFiles + ' files selected' : label;

					if (input.length) {
						input.val(log);
					} else {
						if (log) alert(log);
					}

				});
			});

		});

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
