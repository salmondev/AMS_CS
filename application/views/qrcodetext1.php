<!--<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1>How to generate QR Code using Codeigniter</h1>
<form action="<?php echo base_url();?>QrController/qrcodeGenerator" method="post">
<input type="text" name="qrcode_text">
<button>Submit</button>
</form>
</body>
</html>
-->


<!DOCTYPE html>
<html>

<head>
	<title>QR Code Gen Tester</title>
	<meta charset=UTF-8">
	<script src="<?php echo base_url('assets/js/qrcode.js');?>"></script>
	<script src="<?php echo base_url('assets/js/qrcode.min.js');?>"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS"
	 crossorigin="anonymous">

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
	 crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut"
	 crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k"
	 crossorigin="anonymous"></script>

	<style>
		@media screen {
  #printSection {
      display: none;
  }
}

@media print {
  body * {
    visibility:hidden;
  }
  #printSection, #printSection * {
    visibility:visible;
  }
  #printSection {
    position:absolute;
    left:0;
    top:0;
  }
}
</style>

</head>

<body style="margin:20px;">

	<input type="text" name="textQrcode" id="textQrcode"></br>
	<!--
	<button onclick="createQRcode()">QR Code Generate</button>

	<div id="showQRcode"></div>
-->

	</br>

	<!-- Button to Open the Modal -->
	<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal" onclick="createQRcode()">
		Generate QR Code 
	</button>

	<!-- The Modal -->
	<div class="modal" id="myModal">
		<div class="modal-dialog">
			<div class="modal-content">

				<!-- Modal Header -->
				<div class="modal-header">
					<h4 class="modal-title">QR Code</h4>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>

				<!-- Modal body -->
				<div class="modal-body">
					<div id="showQRcode"></div>
				</div>

				<!-- Modal footer -->
				<div class="modal-footer">
					<!--<div class="col-xs-4">
						<button type="button" class="btn btn-primary" id="btnPrint">Print</button>
					</div>
					<div class="col-xs-4">
						<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
					</div>-->
					<button type="button" class="btn btn-primary" id="btnPrint">Print</button>
				</div>

			</div>
		</div>
	</div>


	<script>


		function createQRcode() {
			var textQrcode = document.getElementById('textQrcode');
			var showQRcode = document.getElementById('showQRcode');

			if (textQrcode.value.trim() !== '') {
				showQRcode.innerHTML = '';
				new QRCode(showQRcode, textQrcode.value);
				textQrcode.value = '';
			}
		}


		/////////////////////////////////////////////////////////////////

		document.getElementById("btnPrint").onclick = function () {
			printElement(document.getElementById("showQRcode"));
		}

		function printElement(elem) {
			var domClone = elem.cloneNode(true);

			var $printSection = document.getElementById("printSection");

			if (!$printSection) {
				var $printSection = document.createElement("div");
				$printSection.id = "printSection";
				document.body.appendChild($printSection);
			}

			$printSection.innerHTML = "";
			$printSection.appendChild(domClone);
			window.print();
		}

	</script>
</body>


foreach ($_POST as $a => $b) {
        echo '<input type="hidden" name="'.htmlentities($a).'" value="'.htmlentities($b).'">';
	}
