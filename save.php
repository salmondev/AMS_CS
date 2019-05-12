
<?php
header ('Content-type: text/html; charset=utf-8');
$servername = "localhost";
$username = "amsappne_nfcdb";
$password = "AMSnfcapp1";
$dbname = "amsappne_nfc";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
mysqli_set_charset($conn,'utf8');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
mysqli_query($connect,"SET CHARACTER SET UTF8");

$HISTORY_ASSET_ID = rawurldecode( $_POST['HISTORY_ASSET_ID'] );
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
//$HISTORY_PHOTO = rawurldecode( $_POST['HISTORY_PHOTO'] );

if( $_POST['HISTORY_PHOTO'] != null){
	$path = 'http://amsapp.net/images/';
	$IMG_DATA = base64_decode($_POST['HISTORY_PHOTO']);
	$name = $HISTORY_ASSET_ID.time();
	$filename = $name.".jpg";
	$myfile = fopen($filename, "w") or die("Unable to open file!");
	$txt = $IMG_DATA;
	fwrite($myfile, $txt);
	fclose($myfile);
	$HISTORY_PHOTO = $path.$filename;
//move_uploaded_file($filename,$path);
	rename($filename,"images/".$filename);
}
else{
	$HISTORY_PHOTO = null;
}

//$PHOTO = imagecreatefromstring($IMG_DATA);
//$IMG_DATA = $_POST['HISTORY_PHOTO'];
//$HISTORY_PHOTO = base64_decode($IMG_DECODE);
//$path = 'http://amsapp.net/images/'.$HISTORY_ASSET_ID.$HISTORY_DAY.$HISTORY_MONTH.$HISTORY_YEAR.$HISTORY_HOUR.$HISTORY_MINUTE.'.jpg';
//file_put_contents($path,$HISTORY_PHOTO);
//$file = fopen($path, 'wb');
//$is_written = fwrite($file, $HISTORY_PHOTO);
//fclose($file);

//HISTROY_ASSET ===================================================================
$sql = "INSERT INTO HISTORY_ASSET (HISTORY_ASSETID,HISTORY_ASSET_NAME,HISTORY_REFERID,
HISTORY_REFERNAME,HISTORY_RECEIVEDATE,HISTORY_SPEC,
HISTORY_UNITNAME,HISTORY_BUILDING_ID,HISTORY_BUILDING_NAME,
HISTORY_FLOOR_ID,HISTORY_ROOM_ID,HISTORY_DAY,
HISTORY_MONTH,HISTORY_YEAR,HISTORY_HOUR,
HISTORY_MINUTE,HISTORY_STATUS_NAME,HISTORY_USERNAME,HISTORY_NOTE,HISTORY_PHOTO)
VALUES ('{$HISTORY_ASSET_ID}','{$HISTORY_ASSET_NAME}',{$HISTORY_REFERID},
'{$HISTORY_REFERNAME}','{$HISTORY_RECEIVEDATE}','{$HISTORY_SPEC}',
'{$HISTORY_UNITNAME}',{$HISTORY_BUILDING_ID},'{$HISTORY_BUILDING_NAME}',
{$HISTORY_FLOOR_ID},'{$HISTORY_ROOM_ID}',{$HISTORY_DAY},
{$HISTORY_MONTH},{$HISTORY_YEAR},{$HISTORY_HOUR},
{$HISTORY_MINUTE},'{$HISTORY_STATUS_NAME}','{$HISTORY_USERNAME}','{$HISTORY_NOTE}',
'{$HISTORY_PHOTO}')";
mysqli_set_charset($sql,'utf8');

if ($conn->query($sql) === TRUE) {
    echo "<br>New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


//HISTROY_ASSET_RECENT ===================================================================
$query = mysqli_query($conn, "SELECT * FROM HISTORY_ASSET_RECENT WHERE HISTORY_ASSETID='$HISTORY_ASSET_ID'");

if(mysqli_num_rows($query) > 0){
    //echo "EXISTS";
    echo "<br>EXISTS UPDATE DATA !";
    //PHASE 1
	$query = mysqli_query($conn,"SELECT * FROM HISTORY_ASSET_RECENT WHERE HISTORY_ASSETID ='$HISTORY_ASSET_ID'");
	while ($row = mysqli_fetch_assoc($query)) {
		$INPUT_TIME = ($HISTORY_DAY) + ($HISTORY_MONTH * 30) + ($HISTORY_YEAR * 365) + ($HISTORY_HOUR / 24) + ($HISTORY_MINUTE / 1440);
		$STORE_TIME = ($row["HISTORY_DAY"]) + ($row["HISTORY_MONTH"] * 30) + ($row["HISTORY_YEAR"] * 365) + ($row["HISTORY_HOUR"] / 24) + ($row["HISTORY_MINUTE"] / 1440); 
/*
		echo "<br>INPUT DATE / STORE DATE : " . $HISTORY_DAY . "/" . $HISTORY_MONTH . "/" . $HISTORY_YEAR . " " . $HISTORY_HOUR . ":" . $HISTORY_MINUTE . " /// " . $row["HISTORY_DAY"] . "/" . $row["HISTORY_MONTH"] . "/" . $row["HISTORY_YEAR"] . " " . $row["HISTORY_HOUR"] . ":" . $row["HISTORY_MINUTE"];
		echo "<br>INPUT TIME / STORE TIME : " . $INPUT_TIME . "/" . $STORE_TIME;
*/
		if( $INPUT_TIME >= $STORE_TIME ){
			$query = mysqli_query($conn, "UPDATE HISTORY_ASSET_RECENT SET
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
				HISTORY_PHOTO = '$HISTORY_PHOTO'
				WHERE HISTORY_ASSETID = '$HISTORY_ASSET_ID'");
			echo "<br>INPUT DATA HAS RECENT DATE -> DATA UPDATED";
		}
		else{
			echo "<br>INPUT DATA HAS EARLY DATE -> DATA NOT UPDATED";
		}
	}
}else{
    // do something
    //echo "DOESN'T EXISTS 1";
    
    echo "<br>DOESN'T EXISTS INSERT DATA !";
    $query = mysqli_query($conn, "INSERT INTO HISTORY_ASSET_RECENT (HISTORY_ASSETID,HISTORY_ASSET_NAME,HISTORY_REFERID,
    	HISTORY_REFERNAME,HISTORY_RECEIVEDATE,HISTORY_SPEC,
    	HISTORY_UNITNAME,HISTORY_BUILDING_ID,HISTORY_BUILDING_NAME,
    	HISTORY_FLOOR_ID,HISTORY_ROOM_ID,HISTORY_DAY,
    	HISTORY_MONTH,HISTORY_YEAR,HISTORY_HOUR,
    	HISTORY_MINUTE,HISTORY_STATUS_NAME,HISTORY_USERNAME,HISTORY_NOTE,HISTORY_PHOTO)
    	VALUES ('{$HISTORY_ASSET_ID}','{$HISTORY_ASSET_NAME}',{$HISTORY_REFERID},
    	'{$HISTORY_REFERNAME}','{$HISTORY_RECEIVEDATE}','{$HISTORY_SPEC}',
    	'{$HISTORY_UNITNAME}',{$HISTORY_BUILDING_ID},'{$HISTORY_BUILDING_NAME}',
    	{$HISTORY_FLOOR_ID},'{$HISTORY_ROOM_ID}',{$HISTORY_DAY},
    	{$HISTORY_MONTH},{$HISTORY_YEAR},{$HISTORY_HOUR},
    	{$HISTORY_MINUTE},'{$HISTORY_STATUS_NAME}','{$HISTORY_USERNAME}','{$HISTORY_NOTE}','{$HISTORY_PHOTO}')");
}

$conn->close();
?> 

<head>

<script type="text/javascript" src="https://unpkg.com/xlsx/dist/shim.min.js"></script>
<script type="text/javascript" src="https://unpkg.com/xlsx/dist/xlsx.full.min.js"></script>

<script type="text/javascript" src="https://unpkg.com/blob.js@1.0.1/Blob.js"></script>
<script type="text/javascript" src="https://unpkg.com/file-saver@1.3.3/FileSaver.js"></script>
</head>
