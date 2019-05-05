<html>

<head>
	<title>PrintQR</title>

	<style>
		.qrtext{
			width: 400px;
			height: 150px;
			font-size: 10px;
			/*text-align: center;*/
			margin: 5px;
		}
		.qrpic{
			width: 115px;
			height: 115px;
		}
		</style>
</head>

<body>
	<?php
$objConnect = mysqli_connect("localhost", "amsappne_nfcdb", "AMSnfcapp1", "amsappne_nfc");
//$objDB = mysqli_select_db($objConnect,"mydatabase");
//$connect = mysqli_connect("localhost", "amsappne_nfcdb", "AMSnfcapp1", "amsappne_nfc");
mysqli_set_charset($objConnect,'utf8');


	for($i=0;$i<count($_POST["chkDel"]);$i++)
	{
		if($_POST["chkDel"][$i] != "")
		{
			$strSQL = "SELECT * FROM ASSET ";
			$strSQL .="WHERE BARCODE = '".$_POST["chkDel"][$i]."' ";
			$objQuery = mysqli_query($objConnect,$strSQL);
			while($row = mysqli_fetch_array($objQuery)){
			//echo '<img src="http://amsapp.net/images/'.$row['BARCODE'].'.png"/>';
			echo '<div class="qrtext"><img src="'.base_url('images/qr_'.$row['BARCODE']).'.png" class="qrpic"><b>รหัสครุภัณฑ์: </br></b>'.$row['BARCODE'].'</br><b>วันที่นำเข้า: </b>'.$row['RECEIVEDATE'].'</br></div>';
			//echo '<div class="qrtext"><img src="'.base_url('images/qr_'.$row['BARCODE']).'.png" class="qrpic"></br><b>รหัสครุภัณฑ์: </br></b>'.$row['BARCODE'].'</br><b>วันที่นำเข้า: </b>'.$row['RECEIVEDATE'].'</div>';
			//echo '<div class="qrtext"><img src="'.base_url('images/qr_'.$row['BARCODE']).'.png" class="qrpic"></br><b>รหัสครุภัณฑ์: </br></b>'.$row['BARCODE'].'</br><b>วันที่นำเข้า: </b>'.$row['RECEIVEDATE'].'</br></div>';
		   }
	    }
	}

	

mysqli_close($objConnect);
?>
</body>

</html>
