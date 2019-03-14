<?php
//include database configuration file
include 'dbConfig.php';

//get records from database
$query = $db->query("SELECT * FROM ASSET ORDER BY ASSETID DESC");


if($query->num_rows > 0){
	$delimiter = ",";
	//$enclosure = '"';
	$filename = "asset_" . date('Y-m-d') . ".csv";
	
	
    
    //create a file pointer
    $f = fopen('php://memory', 'w');
    
    //set column headers
    $fields = array('ASSETID', 'REFERIDITEM', 'ASSETNAME', 'RECEIVEDATE', 'SPEC', 'UNITNAME');
    fputcsv($f, $fields, $delimiter);
    
    //output each row of the data, format line as csv and write to file pointer
    while($row = $query->fetch_assoc()){
        //$status = ($row['status'] == '1')?'Active':'Inactive';
        $lineData = array($row['ASSETID'], $row['REFERIDITEM'], $row['ASSETNAME'], $row['RECEIVEDATE'], $row['SPEC'], $row['UNITNAME']);
        fputcsv($f, $lineData, $delimiter, '"');
    }
    
    //move back to beginning of file
    fseek($f, 0);
    
    //set headers to download file rather than displayed
    header('Content-Type: text/csv');
    header('Content-Disposition: attachment; filename="' . $filename . '";');
    
    //output all remaining data on a file pointer
    fpassthru($f);
}
exit;

?>
