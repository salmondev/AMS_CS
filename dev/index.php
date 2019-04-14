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
		.dark {
			transition: all 0.3s;
			color: var(--white) !important;
			background-image: none !important;
			background-color: var(--dark-blue) !important;
			text-shadow: none !important;
			box-shadow: none;
		}

		.body {
			background-color: black;
			color: white;
		}

		@media screen and (prefers-color-scheme: light) {
			body {
				background-color: white;
				color: black;
			}
		}

	</style>
	<script>
		const modeBtn = document
			.querySelector("#light-dark-mode-container");
		.addEventListener("click", function () {
			const everything = document.querySelectorAll('*')
			const projectTiles = document.querySelectorAll('.project-tile-overlay');
			everything.forEach((item) => {
				item.classList.toggle('dark');
			});

			projectTiles.forEach((item) => {
				item.classList.remove('dark');
			})
		});

	</script>
</head>

<body class="container-fluid">
	<div class="light-dark-mode-container">
		<h1>Asset Management System DEV section</h1>
		<div class="alert alert-success" role="alert">
			<h4 class="alert-heading">dev subdomain</h4>
			<p>dev.amsapp.net</p>
			<hr>
			<p class="mb-0">panurutDEV</p>
		</div>
		<a href="http://dev.amsapp.net/AMS_QRGEN_Setup_1.0.0.exe" class="btn btn-primary">AMS_QRGEN</a>
		<button class="btn btn-info" id="modeBtn">Dark Mode<button>
				<!-- Optional JavaScript -->
				<!-- jQuery first, then Popper.js, then Bootstrap JS -->
				<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
					integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
					crossorigin="anonymous"></script>
				<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
					integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
					crossorigin="anonymous"></script>
				<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
					integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
					crossorigin="anonymous"></script>
	</div>
</body>

</html>
