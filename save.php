<?php

	$connect = mysqli_connect("localhost", "amsappne_nfcdb", "AMSnfcapp1", "amsappne_nfc");
	mysqli_set_charset($connect,'utf8'); 

    //$sql1 = "SELECT HISTORY_RID FROM HISTORY_ASSET ORDER BY HISTORY_RID DESC LIMIT 1";  
	//$result = mysqli_query($connect,$sql1); 
	//$HISTORY_RID = '';
	//$FILES = [imageStringBase64]
	//$_POST['HISTORY_ASSET_ID'];
	//$FILES = array();
	$HISTORY_ASSET_ID = rawurldecode($_POST['HISTORY_ASSET_ID']);

	$HISTORY_ASSET_NAME = rawurldecode( $_POST['HISTORY_ASSET_NAME'] );
	$HISTORY_REFERID = (int)rawurldecode( $_POST['HISTORY_REFERID'] );

	$HISTORY_REFERNAME = rawurldecode( $_POST['HISTORY_REFERNAME'] );
	$HISTORY_RECEIVEDATE = rawurldecode( $_POST['HISTORY_RECEIVEDATE'] );
	$HISTORY_SPEC = rawurldecode( $_POST['HISTORY_SPEC'] );

	$HISTORY_UNITNAME = rawurldecode( $_POST['HISTORY_UNITNAME'] );
	$HISTORY_BUILDING_ID = (int)rawurldecode( $_POST['HISTORY_BUILDING_ID'] );
	$HISTORY_BUILDING_NAME = rawurldecode( $_POST['HISTORY_BUILDING_NAME'] );

	$HISTORY_FLOOR_ID = (int)rawurldecode( $_POST['HISTORY_FLOOR_ID'] );
	$HISTORY_ROOM_ID = rawurldecode( $_POST['HISTORY_ROOM_ID'] );
	$HISTORY_DAY = (int)rawurldecode( $_POST['HISTORY_DAY'] );

	$HISTORY_MONTH = (int)rawurldecode( $_POST['HISTORY_MONTH'] );
	$HISTORY_YEAR = (int)rawurldecode( $_POST['HISTORY_YEAR'] );
	$HISTORY_HOUR = (int)rawurldecode( $_POST['HISTORY_HOUR'] );

	$HISTORY_MINUTE = (int)rawurldecode( $_POST['HISTORY_MINUTE'] );
	$HISTORY_STATUS_NAME = rawurldecode( $_POST['HISTORY_STATUS_NAME'] );
	$HISTORY_USERNAME = rawurldecode( $_POST['HISTORY_USERNAME'] );

	$HISTORY_NOTE = rawurldecode( $_POST['HISTORY_NOTE'] );

	$FILES = json_decode($_POST['HISTORY_PHOTO']);
	
	//$sql = "INSERT INTO HISTORY_ASSET (HISTORY_ASSETID) VALUES ('{$HISTORY_ASSET_ID}')"; 
	//mysqli_query($connect,$sql);
	//HISTROY_ASSET ===================================================================
	$sql = "INSERT INTO HISTORY_ASSET (HISTORY_ASSETID,HISTORY_ASSET_NAME,HISTORY_REFERID,HISTORY_REFERNAME,HISTORY_RECEIVEDATE,HISTORY_SPEC,
HISTORY_UNITNAME,HISTORY_BUILDING_ID,HISTORY_BUILDING_NAME,HISTORY_FLOOR_ID,HISTORY_ROOM_ID,HISTORY_DAY,
HISTORY_MONTH,HISTORY_YEAR,HISTORY_HOUR,HISTORY_MINUTE,HISTORY_STATUS_NAME,HISTORY_USERNAME,HISTORY_NOTE)
VALUES ('{$HISTORY_ASSET_ID}','{$HISTORY_ASSET_NAME}',{$HISTORY_REFERID},
'{$HISTORY_REFERNAME}','{$HISTORY_RECEIVEDATE}','{$HISTORY_SPEC}',
'{$HISTORY_UNITNAME}',{$HISTORY_BUILDING_ID},'{$HISTORY_BUILDING_NAME}',
{$HISTORY_FLOOR_ID},'{$HISTORY_ROOM_ID}',{$HISTORY_DAY},
{$HISTORY_MONTH},{$HISTORY_YEAR},{$HISTORY_HOUR},
{$HISTORY_MINUTE},'{$HISTORY_STATUS_NAME}','{$HISTORY_USERNAME}','{$HISTORY_NOTE}')";
	mysqli_set_charset($sql,'utf8');

	if ($connect->query($sql) === TRUE) {
    	echo "<br>New record created successfully";
	} else {
    	echo "Error: " . $sql . "<br>" . $connect->error;
	}

	$HISTORY_RID = mysqli_insert_id($connect);

	for($i = 0;$i<count($FILES);$i++){
		//echo ;
		if($FILES[$i] != null){
		

		$path = 'http://amsapp.net/images/';
	    $IMG_DATA = base64_decode($FILES[$i]);
	    $name = $HISTORY_ASSET_ID."-".time();
	    $filename = $name."-".$i.".jpg";
	    $myfile = fopen($filename, "w") or die("Unable to open file!");
	    $txt = $IMG_DATA;
	    fwrite($myfile, $txt);
	    fclose($myfile);
	    $HISTORY_PHOTO = $path.$filename;
        //move_uploaded_file($filename,$path);
		rename($filename,"images/".$filename);
		
		$sql = "INSERT INTO HISTORY_IMAGE (HISTORY_IMAGE_HISTORY_RID,HISTORY_IMAGE_PATH) VALUES ($HISTORY_RID,'{$HISTORY_PHOTO}')"; 
		mysqli_query($connect,$sql);
		}
	}

//HISTROY_ASSET_RECENT ===================================================================
$query = mysqli_query($connect, "SELECT * FROM HISTORY_ASSET_RECENT1 WHERE HISTORY_ASSETID='$HISTORY_ASSET_ID'");

if(mysqli_num_rows($query) > 0){
    //echo "EXISTS";
    echo "<br>EXISTS UPDATE DATA !";
	$query = mysqli_query($connect,"SELECT * FROM HISTORY_ASSET_RECENT1 WHERE HISTORY_ASSETID ='$HISTORY_ASSET_ID'");
	while ($row = mysqli_fetch_assoc($query)) {
		$INPUT_TIME = ($HISTORY_DAY) + ($HISTORY_MONTH * 30) + ($HISTORY_YEAR * 365) + ($HISTORY_HOUR / 24) + ($HISTORY_MINUTE / 1440);
		$STORE_TIME = ($row["HISTORY_DAY"]) + ($row["HISTORY_MONTH"] * 30) + ($row["HISTORY_YEAR"] * 365) + ($row["HISTORY_HOUR"] / 24) + ($row["HISTORY_MINUTE"] / 1440); 

		if( $INPUT_TIME >= $STORE_TIME ){
			$query = mysqli_query($connect, "UPDATE HISTORY_ASSET_RECENT1 SET
				HISTORY_ASSETID = '$HISTORY_ASSET_ID',
				HISTORY_ASSET_NAME = '$HISTORY_ASSET_NAME',
				HISTORY_REFERID = $HISTORY_REFERID,
				HISTORY_REFERNAME = '$HISTORY_REFERNAME',
				HISTORY_RECEIVEDATE = '$HISTORY_RECEIVEDATE',
				HISTORY_SPEC = '$HISTORY_SPEC',
				HISTORY_UNITNAME = '$HISTORY_UNITNAME',
				HISTORY_BUILDING_ID = $HISTORY_BUILDING_ID,
				HISTORY_BUILDING_NAME = '$HISTORY_BUILDING_NAME',
				HISTORY_FLOOR_ID = $HISTORY_FLOOR_ID,
				HISTORY_ROOM_ID = '$HISTORY_ROOM_ID',
				HISTORY_DAY = $HISTORY_DAY,
				HISTORY_MONTH = $HISTORY_MONTH,
				HISTORY_YEAR = $HISTORY_YEAR,
				HISTORY_HOUR = $HISTORY_HOUR,
				HISTORY_MINUTE = $HISTORY_MINUTE,
				HISTORY_STATUS_NAME = '$HISTORY_STATUS_NAME',
				HISTORY_USERNAME = '$HISTORY_USERNAME',
				HISTORY_NOTE = '$HISTORY_NOTE',
				HISTORY_RID = $HISTORY_RID
				WHERE HISTORY_ASSETID = '$HISTORY_ASSET_ID'");
			echo "<br>INPUT DATA HAS RECENT DATE -> DATA UPDATED";
		}
		else{
			echo "<br>INPUT DATA HAS EARLY DATE -> DATA NOT UPDATED";
		}
	}
}else{
    //echo "DOESN'T EXISTS 1";
    
    echo "<br>DOESN'T EXISTS INSERT DATA !";
    $query = mysqli_query($connect, "INSERT INTO HISTORY_ASSET_RECENT1 (HISTORY_ASSETID,HISTORY_ASSET_NAME,HISTORY_REFERID,
    	HISTORY_REFERNAME,HISTORY_RECEIVEDATE,HISTORY_SPEC,
    	HISTORY_UNITNAME,HISTORY_BUILDING_ID,HISTORY_BUILDING_NAME,
    	HISTORY_FLOOR_ID,HISTORY_ROOM_ID,HISTORY_DAY,
    	HISTORY_MONTH,HISTORY_YEAR,HISTORY_HOUR,
    	HISTORY_MINUTE,HISTORY_STATUS_NAME,HISTORY_USERNAME,HISTORY_NOTE,HISTORY_RID)
    	VALUES ('{$HISTORY_ASSET_ID}','{$HISTORY_ASSET_NAME}',{$HISTORY_REFERID},
    	'{$HISTORY_REFERNAME}','{$HISTORY_RECEIVEDATE}','{$HISTORY_SPEC}',
    	'{$HISTORY_UNITNAME}',{$HISTORY_BUILDING_ID},'{$HISTORY_BUILDING_NAME}',
    	{$HISTORY_FLOOR_ID},'{$HISTORY_ROOM_ID}',{$HISTORY_DAY},
    	{$HISTORY_MONTH},{$HISTORY_YEAR},{$HISTORY_HOUR},
    	{$HISTORY_MINUTE},'{$HISTORY_STATUS_NAME}','{$HISTORY_USERNAME}','{$HISTORY_NOTE}',{$HISTORY_RID})");
}

?>
