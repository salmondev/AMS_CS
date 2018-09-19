
<?php
$servername = "localhost";
$username = "amsappne_nfcdb";
$password = "AMSnfcapp1";
$dbname = "amsappne_nfc";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}



$ID=$_POST['item_uid'];
$Serial = $_POST['item_serial'];
$Name = $_POST['item_name'];


$sql = "INSERT INTO item_table (item_uid,item_serial,item_name)
VALUES ('{$ID}','{$Serial}','{$Name}')";

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
