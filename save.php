
<?php
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



$HISTORY_ASSET_ID = (int)$_POST['HISTORY_ASSET_ID'];
$HISTORY_ASSET_NAME = $_POST['HISTORY_ASSET_NAME'];
$HISTORY_REFERID = (int)$_POST['HISTORY_REFERID'];

$HISTORY_REFERNAME = $_POST['HISTORY_REFERNAME'];
$HISTORY_RECEIVEDATE = $_POST['HISTORY_RECEIVEDATE'];
$HISTORY_SPEC = $_POST['HISTORY_SPEC'];

$HISTORY_UNITNAME = $_POST['HISTORY_UNITNAME'];
$HISTORY_BUILDING_ID = (int)$_POST['HISTORY_BUILDING_ID'];
$HISTORY_BUILDING_NAME = $_POST['HISTORY_BUILDING_NAME'];

$HISTORY_FLOOR_ID = (int)$_POST['HISTORY_FLOOR_ID'];
$HISTORY_ROOM_ID = $_POST['HISTORY_ROOM_ID'];
$HISTORY_DAY = (int)$_POST['HISTORY_DAY'];

$HISTORY_MONTH = (int)$_POST['HISTORY_MONTH'];
$HISTORY_YEAR = (int)$_POST['HISTORY_YEAR'];
$HISTORY_HOUR = (int)$_POST['HISTORY_HOUR'];

$HISTORY_MINUTE = (int)$_POST['HISTORY_MINUTE'];
$HISTORY_STATUS_NAME = $_POST['HISTORY_STATUS_NAME'];
$HISTORY_USERNAME = $_POST['HISTORY_USERNAME'];


$sql = "INSERT INTO HISTORY_ASSET (HISTORY_ASSETID,HISTORY_ASSET_NAME,HISTORY_REFERID,
HISTORY_REFERNAME,HISTORY_RECEIVEDATE,HISTORY_SPEC,
HISTORY_UNITNAME,HISTORY_BUILDING_ID,HISTORY_BUILDING_NAME,
HISTORY_FLOOR_ID,HISTORY_ROOM_ID,HISTORY_DAY,
HISTORY_MONTH,HISTORY_YEAR,HISTORY_HOUR,
HISTORY_MINUTE,HISTORY_STATUS_NAME,HISTORY_USERNAME)
VALUES ({$HISTORY_ASSET_ID},'{$HISTORY_ASSET_NAME}',{$HISTORY_REFERID},
'{$HISTORY_REFERNAME}','{$HISTORY_RECEIVEDATE}','{$HISTORY_SPEC}',
'{$HISTORY_UNITNAME}',{$HISTORY_BUILDING_ID},'{$HISTORY_BUILDING_NAME}',
{$HISTORY_FLOOR_ID},'{$HISTORY_ROOM_ID}',{$HISTORY_DAY},
{$HISTORY_MONTH},{$HISTORY_YEAR},{$HISTORY_HOUR},
{$HISTORY_MINUTE},'{$HISTORY_STATUS_NAME}','{$HISTORY_USERNAME}')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?> 

<head>

<script type="text/javascript" src="https://unpkg.com/xlsx/dist/shim.min.js"></script>
<script type="text/javascript" src="https://unpkg.com/xlsx/dist/xlsx.full.min.js"></script>

<script type="text/javascript" src="https://unpkg.com/blob.js@1.0.1/Blob.js"></script>
<script type="text/javascript" src="https://unpkg.com/file-saver@1.3.3/FileSaver.js"></script>
</head>
