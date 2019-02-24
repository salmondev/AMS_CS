<?php
//fetch.php
$connect = mysqli_connect("localhost", "amsappne_nfcdb", "AMSnfcapp1", "amsappne_nfc");  
 mysqli_set_charset($connect,'utf8');
$columns = array('ASSETID', 'REFERID', 'ASSETNAME', 'RECEIVEDATE', 'SPEC','UNITNAME');

$query = "SELECT * FROM ASSET WHERE ";

if($_POST["is_date_search"] == "yes")
{
 $query .= 'RECEIVEDATE BETWEEN "'.$_POST["start_date"].'" AND "'.$_POST["end_date"].'" AND ';
}

if(isset($_POST["search"]["value"]))
{
 $query .= '
  (ASSETID LIKE "%'.$_POST["search"]["value"].'%" 
  OR REFERID LIKE "%'.$_POST["search"]["value"].'%" 
  OR ASSETNAME LIKE "%'.$_POST["search"]["value"].'%" 
  OR SPEC LIKE "%'.$_POST["search"]["value"].'%"
  OR UNITNAME LIKE "%'.$_POST["search"]["value"].'%")
 ';
}

if(isset($_POST["order"]))
{
 $query .= 'ORDER BY '.$columns[$_POST['order']['0']['column']].' '.$_POST['order']['0']['dir'].' 
 ';
}
else
{
 $query .= 'ORDER BY ASSETID DESC ';
}

$query1 = '';

if($_POST["length"] != -1)
{
 $query1 = 'LIMIT ' . $_POST['start'] . ', ' . $_POST['length'];
}

$number_filter_row = mysqli_num_rows(mysqli_query($connect, $query));

$result = mysqli_query($connect, $query . $query1);

$data = array();

while($row = mysqli_fetch_array($result))
{
 $sub_array = array();
 $sub_array[] = $row["ASSETID"];
 $sub_array[] = $row["REFERID"];
 $sub_array[] = $row["ASSETNAME"];
 $sub_array[] = $row["RECEIVEDATE"];
 $sub_array[] = $row["SPEC"];
 $sub_array[] = $row["UNITNAME"];
 $data[] = $sub_array;
}

function get_all_data($connect)
{
 $query = "SELECT * FROM ASSET";
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
