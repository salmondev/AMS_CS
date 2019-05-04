<?php  
$connect = mysqli_connect("localhost", "amsappne_nfcdb", "AMSnfcapp1", "amsappne_nfc");
mysqli_set_charset($connect,'utf8');
?>

<?php
	$name = ''; $type = ''; $size = ''; $error = '';
	function compress_image($source_url, $destination_url, $quality) {

		$info = getimagesize($source_url);

    		if ($info['mime'] == 'image/jpeg')
        			$image = imagecreatefromjpeg($source_url);

    		elseif ($info['mime'] == 'image/gif')
        			$image = imagecreatefromgif($source_url);

   		elseif ($info['mime'] == 'image/png')
        			$image = imagecreatefrompng($source_url);

    		imagejpeg($image, $destination_url, $quality);
		return $destination_url;
	}

	if ($_POST) {

    		if ($_FILES["file"]["error"] > 0) {
        			$error = $_FILES["file"]["error"];
    		} 
    		else if (($_FILES["file"]["type"] == "image/gif") || 
			($_FILES["file"]["type"] == "image/jpeg") || 
			($_FILES["file"]["type"] == "image/png") || 
			($_FILES["file"]["type"] == "image/pjpeg")) {

        			$url = 'images/';

        			$filename = compress_image($_FILES["file"]["tmp_name"], $url, 10);
        			$buffer = file_get_contents($url);

        			/* Send our file... */
        			echo $buffer;
    		}
	}
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>HISTORY Recent</title>
	<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css'>
	<link rel='stylesheet' href='https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css'>
	<link rel='stylesheet' href='https://cdn.datatables.net/buttons/1.2.2/css/buttons.bootstrap.min.css'>
	<style>
		body {
			margin: 2em;
		}

		td:last-child {
			text-align: center;
		}

		/*THUMBNAIL HOVERPOPUPS*/

		.thumbnail {
			position: relative;
			float: left;
			padding: 5px;
			/*z-index: 0;*/
		}

		.thumbnail:hover {
			background-color: #e9e9e2;
			/*z-index: 50;*/
			color: #335500;
			text-decoration: none;
		}

		.thumbnail span {
			/*CSS for enlarged image*/
			position: absolute;
			background-color: #e5e5e5;
			padding: 5px;
			/*left: -1000px;*/
			border: 1px solid #666;
			visibility: hidden;
			color: black;
			text-decoration: none;
		}

		.thumbnail span img {
			/*CSS for enlarged image*/
			border-width: 0px;
			/*padding: 2px;*/
		}

	</style>

	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css?family=Sarabun" rel="stylesheet">

</head>

<body style="font-family: 'Sarabun', sans-serif;">
	</br>
	</br>
	<div class="table-responsive">
		<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
			<thead>
				<tr>
					<th>image</th>
					<th>รหัสครุภัณฑ์</th>
					<th>ชื่อครุภัณฑ์</th>
					<th>วันที่นำเข้า</th>
					<th>รายละเอียด</th>
					<th>หน่วย</th>
					<th>สถานะการใช้งาน</th>
					<th>ชื่อผู้รับผิดชอบ</th>
					<th>รหัสอาคาร</th>
					<th>รหัสชั้น</th>
					<th>รหัสห้อง</th>
					<th>วันที่ตรวจสอบ</th>
					<th>เดือนที่ตรวจสอบ</th>
					<th>ปีที่ตรวจสอบ</th>
					<th>ชั่วโมงที่ตรวจสอบ</th>
					<th>นาทีที่ตรวจสอบ</th>
					<th>ชื่อผู้ตรวจสอบ</th>
				</tr>
			</thead>
			<?php foreach($history_asset_recent as $H){ ?>
			<tr>
				<td>
					<form action="" name="myform" id="myform" method="post" enctype="multipart/form-data">
						<!--<img src="<?php echo $H['HISTORY_PHOTO']; ?>">-->
						<a class="thumbnail" href="<?php echo $H['HISTORY_PHOTO']; ?>">
							<img name="file" id="file" src="<?php echo $H['HISTORY_PHOTO']; ?>" width="50%" height="50%"
								border="0"><span><img src="<?php echo $H['HISTORY_PHOTO']; ?>"></a>
					</form>
				</td>
				<td><?php echo $H['HISTORY_ASSETID']; ?></td>
				<td><?php echo $H['HISTORY_ASSET_NAME']; ?></td>
				<td><?php echo $H['HISTORY_RECEIVEDATE']; ?></td>
				<td><?php echo $H['HISTORY_SPEC']; ?></td>
				<td><?php echo $H['HISTORY_UNITNAME']; ?></td>
				<td><?php echo $H['HISTORY_STATUS_NAME']; ?></td>
				<td><?php echo $H['HISTORY_REFERNAME']; ?></td>
				<td><?php echo $H['HISTORY_BUILDING_ID']; ?></td>
				<td><?php echo $H['HISTORY_FLOOR_ID']; ?></td>
				<td><?php echo $H['HISTORY_ROOM_ID']; ?></td>
				<td><?php echo $H['HISTORY_DAY']; ?></td>
				<td><?php echo $H['HISTORY_MONTH']; ?></td>
				<td><?php echo $H['HISTORY_YEAR']; ?></td>
				<td><?php echo $H['HISTORY_HOUR']; ?></td>
				<td><?php echo $H['HISTORY_MINUTE']; ?></td>
				<td><?php echo $H['HISTORY_USERNAME']; ?></td>
			</tr>
			<?php } ?>
		</table>
	</div>


	<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>
	<script src='https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js'></script>
	<script src='https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js'></script>
	<script src='https://cdn.datatables.net/buttons/1.2.2/js/buttons.colVis.min.js'></script>
	<script src='https://cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js'></script>
	<script src='https://cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js'></script>
	<script src='https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js'></script>
	<script src='https://cdn.datatables.net/buttons/1.2.2/js/buttons.bootstrap.min.js'></script>
	<script src='https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js'></script>

	<script src='https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js'></script>
	<script src='https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js'></script>
	<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js'></script>

</body>

</html>
