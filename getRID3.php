<?php
/*
$connect = mysqli_connect("localhost", "amsappne_nfcdb", "AMSnfcapp1", "amsappne_nfc");
mysqli_set_charset($connect,'utf8'); 

    $sql1 = "SELECT HISTORY_RID FROM HISTORY_ASSET ORDER BY HISTORY_RID DESC LIMIT 1";  
	$result = mysqli_query($connect,$sql1); 
	$HISTORY_RID = '';
	//$FILES = [imageStringBase64]
	//$_POST['HISTORY_ASSET_ID'];
	$FILES = array();
	array_push($FILES, "image1");
	array_push($FILES, "image2");
	array_push($FILES, "image3");
	

	while($row = mysqli_fetch_array($result)){
		echo $row['HISTORY_RID'] + 1;
		$HISTORY_RID = $row['HISTORY_RID'] + 1;
	}

	$sql = "INSERT INTO HISTORY_ASSET (HISTORY_RID,HISTORY_ASSETID) VALUES ($HISTORY_RID,'555')"; 
	mysqli_query($connect,$sql);

	for($i = 0;$i<count($FILES);$i++){
		//echo ;
		$sql = "INSERT INTO HISTORY_IMAGE (HISTORY_IMAGE_HISTORY_RID,HISTORY_IMAGE_PATH) VALUES ($HISTORY_RID,'($FILES[$i])')"; 
		mysqli_query($connect,$sql);
	}

	*/

	$connect = mysqli_connect("localhost", "amsappne_nfcdb", "AMSnfcapp1", "amsappne_nfc");
	mysqli_set_charset($connect,'utf8'); 

    $sql1 = "SELECT HISTORY_RID FROM HISTORY_ASSET ORDER BY HISTORY_RID DESC LIMIT 1";  
	$result = mysqli_query($connect,$sql1); 
	$HISTORY_RID = '';
	//$FILES = [imageStringBase64]
	//$_POST['HISTORY_ASSET_ID'];
	//$FILES = array();
	$HISTORY_ASSET_ID = rawurldecode($_POST['HISTORY_ASSET_ID']);
	$FILES = json_decode($_POST['HISTORY_IMAGE_PATH']);
	

	while($row = mysqli_fetch_array($result)){
		echo $row['HISTORY_RID'] + 1;
		$HISTORY_RID = $row['HISTORY_RID'] + 1;
	}

	$sql = "INSERT INTO HISTORY_ASSET (HISTORY_RID,HISTORY_ASSETID) VALUES ($HISTORY_RID,'{$HISTORY_ASSET_ID}')"; 
	mysqli_query($connect,$sql);

	for($i = 0;$i<count($FILES);$i++){
		//echo ;
		$sql = "INSERT INTO HISTORY_IMAGE (HISTORY_IMAGE_HISTORY_RID,HISTORY_IMAGE_PATH) VALUES ($HISTORY_RID,'($FILES[$i])')"; 
		mysqli_query($connect,$sql);
	}
?>
