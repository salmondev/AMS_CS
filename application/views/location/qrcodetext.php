
<!DOCTYPE html>
<html>

<head>
	<title>QR Code Location</title>
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


<div class="container box">
   <h1 align="center"><i class="fa fa-qrcode" style="margin:10px"></i>QR Code for <b><?php echo $_POST['qrbarcode']; ?></b></h1>
   
	<div style="width:40%">
	<img src="<?php echo base_url('images/'.$_POST['qrpic']);?>" >
	</div>
	<div class="box">
	<table class="table table-bordered table-striped">
  <thead>
    <tr>
      <th scope="col">LOCATION</th>
      <th scope="col">Info</th>
    </tr>
  </thead>
  <tbody>
	<tr>
      <th scope="row">LOCATION BARCODE</th>
      <td colspan="1"><?php echo $_POST['qrbarcode']; ?></td>
    </tr>
		<tr>
      <th scope="row">DEPARTMENT</th>
      <td colspan="1"><?php echo $_POST['qrdepart']; ?></td>
    </tr>
		<tr>
      <th scope="row">BUILDING ID</th>
      <td colspan="1"><?php echo $_POST['qrbuild']; ?></td>
		</tr>
		<tr>
      <th scope="row">BUILDING NAME</th>
      <td colspan="1"><?php echo $_POST['qrbuildname']; ?></td>
    </tr>
		<tr>
      <th scope="row">ROOM</th>
      <td colspan="1"><?php echo $_POST['qrroom']; ?></td>
    </tr>
    </tr>
  </tbody>
</table>
	</div>
	<button type="button" class="btn btn-primary" style="margin:20px" onclick="myFunction()"><i class="fa fa-print" style="margin:5px"></i>Print QR Code</button>

<a href="<?php echo site_url('location/index2/genqrlocation') ?>" style="margin:20px" class="btn btn-danger" ><i class="fa fa-arrow-left" style="margin:5px"></i>BACK</a>

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
    '<title>LOCATION QR Code</title>' +
    '<style type="text/css">body {-webkit-print-color-adjust: exact; font-family: Arial; }</style>' +
    '</head>' +
    '<body><div><div style="width:33.33%; float:left;"><img src="<?php echo base_url('images/'.$_POST['qrpic']);?>" ></br><b>รหัสห้อง: </br></b><?php echo $_POST['qrbarcode']; ?></br><b>ห้อง: </b><?php echo $_POST['qrroom']; ?></body></html>';
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
