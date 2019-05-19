<?php

    $connect = mysqli_connect("localhost", "amsappne_nfcdb", "AMSnfcapp1", "amsappne_nfc");
    mysqli_set_charset($connect,'utf8');
	
	$sql = "SELECT HISTORY_IMAGE_PATH FROM HISTORY_ASSET_RECENT1";
	
	$res = mysqli_query($connect,$sql);
	
	
	$result = array();
	
	$url = "http://amsapp.net/images/";
	while($row = mysqli_fetch_array($res)){
		array_push($result,array('url'=>$url.$row['HISTORY_IMAGE_PATH']));
	}
	
	echo json_encode(array("result"=>$result));
	
	mysqli_close($connect);
