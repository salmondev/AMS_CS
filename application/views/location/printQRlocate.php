<html>

<head>
	<title>Print QR Code</title>

	<style>
		/*
		.qrtext {
			width: 400px;
			height: 225px;
			font-size: 10px;
			margin: 5px;
		}

		.qrpic {
			width: 225px;
			height: 225px;
		}*/

		.grid-container {
			display: grid;
			grid-template-columns: 225px 400px;
			/*grid-template-rows: 225px;*/
			grid-template-areas: "qrpic qrtext";
		}

		.qrpic {
			grid-area: qrpic;
			width: 225px;
			height: 225px;
			/*border-style: solid;
			border-width: medium;*/
		}

		.qrtext {
			grid-area: qrtext;
			/*border-style: solid;
			border-width: medium;*/
			text-align: left;
			font-size: 14px;
		}

		.a4 {
			width: 1900;
			height: 2700;
		}

		.pagebreak {
			page-break-before: always;
		}

		body,
		h1,
		h2,
		h3,
		ol,
		ul,
		div {
			width: auto;
			border: 0;
			margin: 0 5%;
			padding: 0;
			float: none;
			position: static;
			overflow: visible;
		}

		@media print {
			div {
				page-break-inside: avoid;
			}
		}

		/* page-break-after works, as well */

	</style>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
		integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
		integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
	</script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
		integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
	</script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
		integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
	</script>

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css?family=Sarabun" rel="stylesheet">

</head>

<body style="font-family: 'Sarabun', sans-serif;">


	<?php
$objConnect = mysqli_connect("localhost", "amsappne_nfcdb", "AMSnfcapp1", "amsappne_nfc");
//$objDB = mysqli_select_db($objConnect,"mydatabase");
//$connect = mysqli_connect("localhost", "amsappne_nfcdb", "AMSnfcapp1", "amsappne_nfc");
mysqli_set_charset($objConnect,'utf8');
include('phpqrcode/qrlib.php'); 


	for($i=0;$i<count($_POST["chkDel"]);$i++)
	{
		if($_POST["chkDel"][$i] != "")
		{
			$strSQL = "SELECT * FROM LOCATION ";
			$strSQL .="WHERE LOCATION_BARCODE = '".$_POST["chkDel"][$i]."' ";
			$objQuery = mysqli_query($objConnect,$strSQL);

			$tempPath = "images/";
			$fileName='qrlocate_'.$_POST["chk"][$i].'.png';
 			$pngPath = $tempPath.$fileName;
			QRcode::png($_POST["chk"][$i],$pngPath,'L',9,2);
			$cm = $_POST["qrsize"][$i];
			$px = ($cm/(2.54/96));
			$font = $cm+12;
			
            
			//while($row = mysqli_fetch_array($objQuery)){
				foreach($objQuery as $row){
			//echo '<img src="http://amsapp.net/images/'.$row['BARCODE'].'.png"/>';
            
			echo '<div><div><img src="'.base_url('images/qrlocate_'.$row['LOCATION_ID']).'.png" style="width: '.$px.'px;height: '.$px.'px;"></div><div style="font-size:'.$font.'"><b>รหัสห้อง: </br></b>'.$row['LOCATION_BARCODE'].'</br><b>ห้อง: </b>'.$row['LOCATION_ROOM_ID'].'</div></br></br></div>';
			
			}
		}
		
	}
	

	

mysqli_close($objConnect);
?>
	<div class="pagebreak"> </div>

	<script>
		window.onload = function () {
			window.print();
		}

	</script>
</body>

</html>
