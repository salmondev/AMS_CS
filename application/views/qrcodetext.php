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
   <h1 align="center"><i class="fa fa-qrcode" style="margin:10px"></i>QR Code for <b><?php echo $_POST['qrname']; ?></b></h1>
   

	<!-- Button to Open the Modal --><!--
	<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal" onclick="createQRcode()">
		Generate QR Code 
	</button>
-->
	<div style="width:40%">
	<img src="<?php echo base_url('images/'.$_POST['qrpic']);?>" >
	</div>
	<div class="box">
	<table class="table table-bordered table-striped">
  <thead>
    <tr>
      <th scope="col">ASSET</th>
      <th scope="col">Info</th>
    </tr>
  </thead>
  <tbody>
	<tr>
      <th scope="row">BARCODE</th>
      <td colspan="1"><?php echo $_POST['qrname']; ?></td>
    </tr>
		<tr>
      <th scope="row">REFERIDITEM</th>
      <td colspan="1"><?php echo $_POST['qrrefer']; ?></td>
    </tr>
		<tr>
      <th scope="row">ASSETNAME</th>
      <td colspan="1"><?php echo $_POST['qrassetname']; ?></td>
    </tr>
		<tr>
      <th scope="row">RECEIVEDATE</th>
      <td colspan="1"><?php echo $_POST['qrreceive']; ?></td>
    </tr>
    </tr>
  </tbody>
</table>
	</div>
	<button type="button" class="btn btn-primary" style="margin:20px" onclick="myFunction()"><i class="fa fa-print" style="margin:5px"></i>Print QR Code</button>

	<!--<div id="print_button" class="printbutton btn btn-info" onClick="window.print()"><i class="glyphicon glyphicon-print"></i>PRINT</a></div> -->

<a href="<?php echo site_url('asset/index3/sync') ?>" style="margin:20px" class="btn btn-danger" ><i class="fa fa-arrow-left" style="margin:5px"></i>BACK</a>

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
	var newWindow = window.open('', '', 'width=300, height=150'),
document = newWindow.document.open(),
pageContent =
    '<!DOCTYPE html>' +
    '<html>' +
    '<head>' +
    '<meta charset="utf-8" />' +
    '<title>ASSET QR Code</title>' +
    '<style type="text/css">body {-webkit-print-color-adjust: exact; font-family: Arial; }</style>' +
    '</head>' +
    '<body><div><div style="width:33.33%; float:left;"><img src="<?php echo base_url('images/'.$_POST['qrpic']);?>" ></br><b>รหัสครุภัณฑ์: </br></b><?php echo $_POST['qrname']; ?></br><b>วันที่นำเข้า: </b><?php echo $_POST['qrreceive']; ?></body></html>';
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
