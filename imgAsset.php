<?php  
$connect = mysqli_connect("localhost", "amsappne_nfcdb", "AMSnfcapp1", "amsappne_nfc");
mysqli_set_charset($connect,'utf8');
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
			    <td><img src="<?php echo $H['HISTORY_IMAGE_PATH']; ?>" style="width:20%;height:20%;"></td>
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
