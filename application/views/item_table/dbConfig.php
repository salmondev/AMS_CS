<?php
//DB details
$dbHost     = 'localhost';
$dbUsername = 'amsappne_nfcdb';
$dbPassword = 'AMSnfcapp1';
$dbName     = 'amsappne_nfc';

//Create connection and select DB
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
mysqli_set_charset($db,'utf8');

if($db->connect_error){
    die("Unable to connect database: " . $db->connect_error);
}


