<?php
		header ('Content-type: text/html; charset=utf-8');
		require_once('connect.php');
		if ($connect->connect_error) {
    		die("Connection failed: " . $connect->connect_error);
		}
		mysqli_query($connect,"SET CHARACTER SET UTF8");
		$query = "SELECT * FROM HISTORY_IMAGE";
		$result = mysqli_query($connect,$query);
		$json_array = array();
		while( $row = mysqli_fetch_assoc($result) ){
			$json_array[] = $row;
		}
		$json_encoded_string = json_encode($json_array,JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_LINE_TERMINATORS);
		echo $json_encoded_string;

		mysqli_close($connect);
?>
