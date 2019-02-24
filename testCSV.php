<?php
	$servername = "localhost";
	$username = "amsappne_nfcdb";
	$password = "AMSnfcapp1";
	$dbname = "amsappne_nfc";
	$connect = new mysqli($servername, $username, $password, $dbname);
	if ($connect->connect_error) {
    	die("Connection failed: " . $connect->connect_error);
	}
	echo "55555555555555555";
	if(isset($_POST["submit"])){
		if($_FILES['file']['name']){
			$filename = explode('.', $_FILES['file']['name']);
			if($filename[1] == 'csv'){
				$handle = fopen($_FILES['file']['tmp_name'],"r");
				while(!feof($handle)){
					$content = fgetcsv($handle);
					$count = count($content);
					for ($i=0; $i < $count; $i++) { 
						echo $content[$i]."\t";
					}
					echo "<br/>";
				}
			}
		}

	}
/*
	if(isset($_POST["submit"])){
		if(filename[1] = 'csv'){
			$filename = explode('.', $_FILES['file']['name']);
			$handle = fopen($_FILES['file']['tmp_name'],"r");
			
			while(!feof($handle)){

				$content = fgetcsv($handle);
				$count = count($content);
				for ($i=0; $i < count; $i++) { 
					echo $content[$i]."\t";
				}
				echo "<br/>";
			}
			
		}

	}
	*/
	/*
	if(isset($_POST["submit"])){
		$filename = explode('.', $_FILES['file']['name']);
		if(filename[1] = 'csv'){
			$handle = fopen($_FILES['file']['tmp_name'],"r");
			while($data = fgetcsv($handle)){
				///

			}
		}

	}
	*/

?>
<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	<body>
		<form method='POST' enctyp='multipart/form-data'>
			<div align="center">
				<p>Upload CSV : <input type="file" name="file"/></p>
				<p><input type="submit" name="submit" value= 'Import'/></p>

			</div>
		</form>
	</body>
</html>