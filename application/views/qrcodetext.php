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
	
	<style>
   body
   {
    margin:0;
    padding:0;
    background-color:#f1f1f1;
   }
   .box
   {
    width:100%;
    padding:20px;
    background-color:#fff;
    border:1px solid #ccc;
    border-radius:5px;
    margin-top:25px;
   }
  </style>
</head>

<body>
<!--
	<input type="text" name="textQrcode" id="textQrcode"></br>-->
	<!--
	<button onclick="createQRcode()">QR Code Generate</button>

	<div id="showQRcode"></div>
-->

<div class="container box">
   <h1 align="center">QR Code for <b><?php echo $_POST['qrname']; ?></b></h1>
   <br />

	<!-- Button to Open the Modal --><!--
	<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal" onclick="createQRcode()">
		Generate QR Code 
	</button>
-->
	</br>
	
	<img src="<?php echo base_url('images/'.$_POST['qrpic']);?>" >
					</br>
	<button type="button" class="btn btn-primary" style="margin:20px" onclick="myFunction()">Print QR Code</button>

	<!--<div id="print_button" class="printbutton btn btn-info" onClick="window.print()"><i class="glyphicon glyphicon-print"></i>PRINT</a></div> -->

</br>
<a href="<?php echo site_url('asset/index3/sync') ?>" style="margin:20px" class="btn btn-danger" >BACK</a>

	<!-- The Modal -->
	<div class="modal" id="myModal">
		<div class="modal-dialog">
			<div class="modal-content">

				<!-- Modal Header -->
				<div class="modal-header">
					<h4 class="modal-title">ASSET QR Code</h4>
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
	</div>
	
</body>

<script>
function myFunction() {
  //window.print();
	var newWindow = window.open('', '', 'width=100, height=100'),
document = newWindow.document.open(),
pageContent =
    '<!DOCTYPE html>' +
    '<html>' +
    '<head>' +
    '<meta charset="utf-8" />' +
    '<title>QR Code</title>' +
    '<style type="text/css">body {-webkit-print-color-adjust: exact; font-family: Arial; }</style>' +
    '</head>' +
    '<body><div><div style="width:33.33%; float:left;"><img src="<?php echo base_url('images/'.$_POST['qrpic']);?>" ></body></html>';
document.write(pageContent);
document.close();
newWindow.moveTo(0, 0);
newWindow.resizeTo(screen.width, screen.height);
setTimeout(function() {
    newWindow.print();
    newWindow.close();
}, 250);
}
</script>
