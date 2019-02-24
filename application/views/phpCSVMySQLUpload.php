<?php

move_uploaded_file($_FILES["fileCSV"]["tmp_name"],$_FILES["fileCSV"]["name"]); // Copy/Upload CSV

$objConnect = mysql_connect("localhost","amsappne_nfcdb","AMSnfcapp1") or die("Error Connect to Database"); // Conect to MySQL
$objDB = mysql_select_db("amsappne_nfc");

$objCSV = fopen($_FILES["fileCSV"]["name"], "r");
while (($objArr = fgetcsv($objCSV, 1000, ",")) !== FALSE) {
	$strSQL = "INSERT INTO ITEM_TABLE ";
	$strSQL .="(item_uid,item_serial,item_name,item_password) ";
	$strSQL .="VALUES ";
	$strSQL .="('".$objArr[0]."','".$objArr[1]."','".$objArr[2]."' ";
	$strSQL .=",'".$objArr[3]."') ";
	$objQuery = mysql_query($strSQL);
}
fclose($objCSV);

echo "Upload & Import Done.";
?>
