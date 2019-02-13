
<div style="margin:60px;">
 
<?php
//$matcher = $_REQUEST['matcher'];
$matcher = "unwantcolumn";
$file = "TEST_IMPORT.csv";
$fp = fopen($file, r);
 
//Finding the position of fieldnames from Row 1
$fieldnames = fgetcsv($fp);
$assetidindex = array_search("ASSETID", $fieldnames);
$referidindex = array_search("REFERID", $fieldnames);
$assetnameindex = array_search("ASSETNAME", $fieldnames);
$receivedateindex = array_search("RECEIVEDATE", $fieldnames);
$specindex = array_search("SPEC", $fieldnames);
$unwantcolumnindex = array_search("unwantcolumn", $fieldnames);
$unitnameindex = array_search("UNITNAME", $fieldnames);
echo "<p><b>Fieldnames of Row 1 have been read and identified:</b>
<br>ASSETIDindex = " .$assetidindex.
"<br>REFERIDindex = " .$referidindex.
"<br>ASSETNAMEindex = " .$assetnameindex.
"<br>RECEIVEDATEindex = " .$receivedateindex.
"<br>SPECindex = " .$specindex.
"<br>unwantcolumnindex = " .$unwantcolumnindex.
"<br>UNITNAMEindex = " .$unitnameindex.
"<br>==END OF READING Fieldnames on ROW 1==</p>";
 
//Finding elements of the matched record
while ($row = fgetcsv($fp)) {
if ( strtolower($row[$unwantcolumnindex]) == strtolower($matcher) ) {
$assetid = $row[$assetidindex];
$referid = $row[$referidindex];
$assetname = $row[$assetnameindex];
$receivedate = $row[$receivedateindex];
$spec = $row[$specindex];
$unitname = $row[$unitnameindex];
break;
}
}
fclose($fp);
?>
<b><p>PRINTING ELEMENTS OF THE MATCHED RECORD</p></b>
<?php
echo "<br>ASSETID = " . $assetid;
echo "<br>REFERID = " . $referid;
echo "<br>ASSETNAME = " . $assetname;
echo "<br>RECEIVEDATE = " . $receivedate;
echo "<br>SPEC = " . $spec;
echo "<br>UNITNAME = " . $unitname;

?>
</div>
