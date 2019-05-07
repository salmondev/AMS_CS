<?php  
$connect = mysqli_connect("localhost", "amsappne_nfcdb", "AMSnfcapp1", "amsappne_nfc");
mysqli_set_charset($connect,'utf8');

$HISTORY_YEAR = '';
$HISTORY_MONTH = '';
$query = "SELECT DISTINCT HISTORY_YEAR AND HISTORY_MONTH FROM HISTORY_ASSET_RECENT ORDER BY HISTORY_YEAR ASC";
$statement = $connect->prepare($query);
$statement->execute();
$resultSet = $statement->get_result();
$result = $resultSet->fetch_all();
if(isset($HISTORY_YEAR)){
foreach($result as $row)
{
 $HISTORY_YEAR .= '<option value="'.$row['HISTORY_YEAR'].'">'.$row['HISTORY_YEAR'].'</option>';
 $HISTORY_MONTH .= '<option value="'.$row['HISTORY_YEAR'].'">'.$row['HISTORY_YEAR'].'</option>';
}
}

?>

<html>

<head>
	<title>History Recent</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
	<script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

</head>

<body>
	<div class="container box">
		<h3 align="center">History Recent</h3>
		<br />
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4">
				<div class="form-group">
					<select name="filter_year" id="filter_year" class="form-control" required>
						<option value="">Select Year</option>
						<?php echo $HISTORY_YEAR; ?>
					</select>
				</div>
				<div class="form-group">
					<select name="filter_month" id="filter_month" class="form-control" required>
						<option value="">Select Month</option>
						<?php echo $HISTORY_MONTH; ?>
					</select>
				</div>
				<div class="form-group" align="center">
					<button type="button" name="filter" id="filter" class="btn btn-info">Filter</button>
				</div>
			</div>
			<div class="col-md-4"></div>
		</div>
		<div class="table-responsive">
			<table id="example" class="table table-bordered table-striped">
				<thead>
					<tr>
						<th>
							<p>HISTORY ASSETID</p> (รหัสครุภัณฑ์)
						</th>
						<th>
							<p>HISTORY REFERID</p> (ผู้รับผิดชอบ)
						</th>
						<th>
							<p>HISTORY BUILDING ID</p> (รหัสอาคาร)
						</th>
						<th>
							<p>HISTORY FLOOR ID</p> (รหัสชั้น)
						</th>
						<th>
							<p>HISTORY DAY</p> (วัน)
						</th>
						<th>
							<p>HISTORY MONTH</p> (เดือน)
						</th>
						<th>
							<p>HISTORY YEAR</p> (ปี)
						</th>
						<th>
							<p>HISTORY HOUR</p> (ชั่วโมง)
						</th>
						<th>
							<p>HISTORY MINUTE</p> (นาที
						</th>
						<th>
							<p>HISTORY ASSET NAME</p> (ชื่อครุภัณฑ์)
						</th>
						<th>
							<p>HISTORY RECEIVEDATE</p> (วันที่นำเข้า)
						</th>
						<th>
							<p>HISTORY SPEC</p> (รายละเอียด)
						</th>
						<th>
							<p>HISTORY UNITNAME</p> (หน่วย)
						</th>
						<th>
							<p>HISTORY STATUS NAME</p> (สถานะ)
						</th>
						<th>
							<p>HISTORY REFERNAME</p> (ชื่อผู้รับผิดชอบ)
						</th>
						<th>
							<p>HISTORY BUILDING NAME</p> (ชื่ออาคาร)
						</th>
						<th>
							<p>HISTORY ROOM ID</p> (รหัสห้อง)
						</th>
						<th>
							<p>HISTORY USERNAME</p> (ชื่อผู้ตรวจสอบ)
						</th>
						<th>
							<p>HISTORY NOTE</p> (บันทึกย่อ)
						</th>
					</tr>
				</thead>
			</table>
			<br />
			<br />
			<br />
		</div>
	</div>
</body>

</html>

<script type="text/javascript" language="javascript">
	$(document).ready(function () {

		fill_datatable();

		function fill_datatable(filter_month = '', filter_year = '') {
			var dataTable = $('#example').DataTable({
				// "dom": '<"dt-buttons"Bf><"clear">lirtp',
				"processing": true,
				"serverSide": true,
				"order": [],
				"ajax": {
					url: "<?php echo site_url('history_asset_recent/index4/fetch') ?>",
					type: "POST",
					data: {
						filter_month: filter_month,
						filter_year: filter_year
					}
				}
			});
		}

		$('#filter').click(function () {
			var filter_month = $('#filter_month').val();
			var filter_year = $('#filter_year').val();
			if (filter_month != '' && filter_year != '') {
				$('#example').DataTable().destroy();
				fill_datatable(filter_month, filter_year);
			} else {
				alert('Select Both filter option');
				$('#example').DataTable().destroy();
				fill_datatable();
			}
		});


	});

</script>
