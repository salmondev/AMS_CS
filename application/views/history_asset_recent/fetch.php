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

//////////

$query .= " WHERE ";
if(isset($_POST["is_category"]))
{
 $query .= "HISTORY_YEAR = '".$_POST["is_category"]."' AND ";
}
if(isset($_POST["search"]["value"]))
{
 $query .= '(HISTORY_ASSETID LIKE "%'.$_POST["search"]["value"].'%" ';
 $query .= 'OR HISTORY_ASSET_NAME LIKE "%'.$_POST["search"]["value"].'%" ';
 $query .= 'OR HISTORY_YEAR LIKE "%'.$_POST["search"]["value"].'%" ';
 $query .= 'OR HISTORY_MONTH LIKE "%'.$_POST["search"]["value"].'%") ';
}

if(isset($_POST["order"]))
{
 $query .= 'ORDER BY '.$column[$_POST['order']['0']['column']].' '.$_POST['order']['0']['dir'].' ';
}
else
{
 $query .= 'ORDER BY HISTORY_ASSETID DESC ';
}

$query1 = '';

if($_POST["length"] != 1)
{
 $query1 .= 'LIMIT ' . $_POST['start'] . ', ' . $_POST['length'];
}

$number_filter_row = mysqli_num_rows(mysqli_query($connect, $query));

$result = mysqli_query($connect, $query . $query1);

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
 $result = mysqli_query($connect, $query);
 return mysqli_num_rows($result);
}

$output = array(
    "draw"    => intval($_POST["draw"]),
    "recordsTotal"  =>  get_all_data($connect),
    "recordsFiltered" => $number_filter_row,
    "data"    => $data
   );

echo json_encode($output);

?>
