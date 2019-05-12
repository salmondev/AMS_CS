<?php 
	$receiver_data=$_POST['array'];
	$new_array=json_decode($receiver_data,true);
    print_r($receiver_data);
    foreach($new_array as $row)
    {
	   $row['name'];
    }

?>
