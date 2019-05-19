<?php
//importing dbDetails file 
require_once 'dbDetails.php';

$sql = "SELECT * FROM HISTORY_ASSET_RECENT1";

$con = mysqli_connect(HOST,USER,PASS,DB) or die('Unable to Connect...');
	
		$res = mysqli_query($con,$sql);
	while($row = mysqli_fetch_array($res)){
        echo '<img src="'.$row['HISTORY_IMAGE_PATH'].'" style="width:20%;height:20%"/>';
        echo "</br>";
    }
    mysqli_close($con);
?>
