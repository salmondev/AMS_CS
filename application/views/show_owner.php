<?php // open a php tag


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
$sql = "SELECT `owner_fname` FROM `OWNER_TABLE`"; // select only the username field from the table "users_table"
$result = mysqli_query($conn,$sql); // process the query

$username_array = array(); // start an array

while($row = mysqli_fetch_array($result)){ // cycle through each record returned
  $username_array[] = "\"".$row['owner_fname']."\""; // get the username field and add to the array above with surrounding quotes
}

$username_string = implode(",", $username_array); // implode the array to "stick together" all the usernames with a comma inbetween each

echo $username_string; // output the string to the display

////

$sql1 = "SELECT `owner_uid` FROM `OWNER_TABLE`"; // select only the username field from the table "users_table"
$result = mysqli_query($conn,$sql1); // process the query

$pass_array = array(); // start an array

while($row = mysqli_fetch_array($result)){ // cycle through each record returned
  $pass_array[] = "\"".$row['owner_uid']."\""; // get the username field and add to the array above with surrounding quotes
}

$pass_string = implode(",", $pass_array); // implode the array to "stick together" all the usernames with a comma inbetween each

echo $pass_string; // output the string to the display

?>
