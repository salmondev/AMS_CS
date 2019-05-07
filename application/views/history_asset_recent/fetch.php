<?php
$connect = mysqli_connect("localhost", "amsappne_nfcdb", "AMSnfcapp1", "amsappne_nfc");
mysqli_set_charset($connect,'utf8');

$column = array('HISTORY_ASSETID',
'HISTORY_REFERID',
'HISTORY_BUILDING_ID',
'HISTORY_FLOOR_ID',
'HISTORY_DAY',
'HISTORY_MONTH',
'HISTORY_YEAR',
'HISTORY_HOUR',
'HISTORY_MINUTE',
'HISTORY_ASSET_NAME',
'HISTORY_RECEIVEDATE',
'HISTORY_SPEC',
'HISTORY_UNITNAME',
'HISTORY_STATUS_NAME',
'HISTORY_REFERNAME',
'HISTORY_BUILDING_NAME',
'HISTORY_ROOM_ID',
'HISTORY_USERNAME',
'HISTORY_NOTE');

$query = "
SELECT * FROM HISTORY_ASSET_RECENT 
";

if(isset($_POST['filter_month'], $_POST['filter_year']) && $_POST['filter_gender'] != '' && $_POST['filter_year'] != '')
{
 $query .= '
 WHERE HISTORY_MONTH = "'.$_POST['filter_month'].'" AND HISTORY_YEAR = "'.$_POST['filter_year'].'" 
 ';
}

if(isset($_POST['order']))
{
 $query .= 'ORDER BY '.$column[$_POST['order']['0']['column']].' '.$_POST['order']['0']['dir'].' ';
}
else
{
 $query .= 'ORDER BY HISTORY_ASSETID DESC ';
}

$query1 = '';

if($_POST["length"] != -1)
{
 $query1 = 'LIMIT ' . $_POST['start'] . ', ' . $_POST['length'];
}

$statement = $connect->prepare($query);

$statement->execute();

$number_filter_row = $statement->rowCount();

$statement = $connect->prepare($query . $query1);

$statement->execute();

$resultSet = $statement->get_result();

$result = $resultSet->fetch_all();



$data = array();

foreach($result as $row)
{
 $sub_array = array();
 $sub_array[] = $row['HISTORYASSETID'];
 $sub_array[] = $row['HISTORY_REFERID'];
 $sub_array[] = $row['HISTORY_BUILDING_ID'];
 $sub_array[] = $row['HISTORY_FLOOR_ID'];
 $sub_array[] = $row['HISTORY_DAY'];
 $sub_array[] = $row['HISTORY_MONTH'];
 $sub_array[] = $row['HISTORY_YEAR'];
 $sub_array[] = $row['HISTORY_HOUR'];
 $sub_array[] = $row['HISTORY_MINUTE'];
 $sub_array[] = $row['HISTORY_ASSET_NAME'];
 $sub_array[] = $row['HISTORY_RECEIVEDATE'];
 $sub_array[] = $row['HISTORY_SPEC'];
 $sub_array[] = $row['HISTORY_UNITNAME'];
 $sub_array[] = $row['HISTORY_STATUS_NAME'];
 $sub_array[] = $row['HISTORY_REFERNAME'];
 $sub_array[] = $row['HISTORY_BUILDING_NAME'];
 $sub_array[] = $row['HISTORY_ROOM_ID'];
 $sub_array[] = $row['HISTORY_USERNAME'];
 $sub_array[] = $row['HISTORY_NOTE'];
 
 $data[] = $sub_array;
}

function count_all_data($connect)
{
 $query = "SELECT * FROM HISTORY_ASSET_RECENT";
 $statement = $connect->prepare($query);
 $statement->execute();
 return $statement->rowCount();
}

$output = array(
 "draw"       =>  intval($_POST["draw"]),
 "recordsTotal"   =>  count_all_data($connect),
 "recordsFiltered"  =>  $number_filter_row,
 "data"       =>  $data
);

echo json_encode($output);

?>
