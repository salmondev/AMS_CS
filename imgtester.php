<?php

	function compress_image($source_url, $destination_url, $quality) {

		$info = getimagesize($source_url);

    		if ($info['mime'] == 'image/jpeg')
        			$image = imagecreatefromjpeg($source_url);

    		elseif ($info['mime'] == 'image/gif')
        			$image = imagecreatefromgif($source_url);

   		elseif ($info['mime'] == 'image/png')
        			$image = imagecreatefrompng($source_url);

    		imagejpeg($image, $destination_url, $quality);
		return $destination_url;
	}

    $connect = mysqli_connect("localhost", "amsappne_nfcdb", "AMSnfcapp1", "amsappne_nfc");
    mysqli_set_charset($connect,'utf8');
	
	$sql = "SELECT * FROM HISTORY_ASSET_RECENT1";
	
	$res = mysqli_query($connect,$sql);
	
	
	$result = array();
	
	//$url = 'http://amsapp.net/images/reduceimg/'.$row['HISTORY_ASSETID'];
	while($row = mysqli_fetch_array($res)){
		//array_push($result,array('url'=>$url.$row['HISTORY_IMAGE_PATH']));
		$url = 'http://amsapp.net/images/reduceimg/'.$row['HISTORY_ASSETID'].'.jpg';
		echo "path: ".$row['HISTORY_IMAGE_PATH'];
		echo "</br>";
		echo '<img src="'.$row['HISTORY_IMAGE_PATH'].'" style="width:20%;height:20%"/>';
		$image1 = '<img src="'.$row['HISTORY_IMAGE_PATH'].'" style="width:20%;height:20%"/>';
		$filename = compress_image($row['HISTORY_IMAGE_PATH'], $url, 10);
		$imgfile = imagejpeg($image1, $url, 10);
		echo '<img src="'.$filename.'" style="width:20%;height:20%"/>';
		echo "</br>";
		echo "reduce: ".$filename;
		echo $imgfile;
		echo "</br>";
	}
	
	//echo json_encode(array("result"=>$result));

	mysqli_close($connect);
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>_img</title>
</head>

<body>


</body>

</html>
