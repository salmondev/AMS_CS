<?php
$connect = mysqli_connect("localhost", "amsappne_nfcdb", "AMSnfcapp1", "amsappne_nfc");
mysqli_set_charset($connect,'utf8'); 

//$sql1 = "SELECT HISTORY_RID FROM HISTORY_ASSET BY HISSTORY_RID DESC LIMIT 1";
$sql1 = "SELECT LAST(HISTORY_RID) FROM HISTORY_ASSET";
	$result = mysqli_query($connect,$sql1);
	echo $result;
	print_r($result);
?>

<html>
<head>
	<title>image</title>
</head>

<body>
	<form action="multi_img.php" method="post" enctype="multipart/form-data">

		<input type="file" name="file_img[]" multiple />

		<input type="submit" name="upload_img" value="upload" />

	</form>
	


<?php
if(isset($_POST['upload_img']))
{
	for($i=0;$i<count($_FILES["file_img"]["name"]);$i++)
	{
		$host = "http://amsapp.net/";
		$filetmp = $_FILES["file_img"]["tmp_name"][$i];
		$filename = $_FILES["file_img"]["name"][$i];
		$filetype= $_FILES["file_img"]["type"][$i];
		$filepath = "photo/".$filename;
		$RID = "2";
		
		move_uploaded_file($filetmp,$filepath);

		$sql = "INSERT INTO HISTORY_IMAGE (HISTORY_IMAGE_HISTORY_RID,HISTORY_IMAGE_PATH) VALUES ('$RID','$host.$filepath')"; 
		mysqli_query($connect,$sql);
	}
}
/*
    $receiver_data=$_POST['array'];
	$new_array=json_decode($receiver_data,true);
    print_r($receiver_data);
    foreach($new_array as $row)
    {
	   $row['name'];
	}
	*/

?>

</body>
</html>
