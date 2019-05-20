<?php  
$connect = mysqli_connect("localhost", "amsappne_nfcdb", "AMSnfcapp1", "amsappne_nfc");
mysqli_set_charset($connect,'utf8');
/*
if(isset($_POST['SubmitButton']))
{
	$input = $_POST['inputText']; //get input text
	$message = "Success! You entered: ".$input;
	
	$sql = "SELECT * from history_asset_recent1 WHERE CONCAT(HISTORY_DAY,'/',HISTORY_MONTH,'/',HISTORY_YEAR) >= '$input'";
	$result = mysqli_query($connect,$sql);
	
	while($row = mysqli_fetch_array($result)){
		echo $row['HISTORY_ASSET_NAME'];
		echo "&nbsp;";
		echo $row['HISTORY_ASSETID'];
		echo "</br>";
	}
}*/

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>HISTORY Recent</title>

	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css'>
    <link rel='stylesheet' href='https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css'>
    <link rel='stylesheet' href='https://cdn.datatables.net/buttons/1.2.2/css/buttons.bootstrap.min.css'>
    <link rel='stylesheet' href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css">

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.js"></script>


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


	<script>
        $(function () {
            $("#datepicker").datepicker({
                format: "dd/mm/yyyy",
                clearBtn: true,
                autoclose: true,
                orientation: "right"
            });
        });
    </script>

    <style>
        .dater{
            margin: 20px;
            /*text-align: center;
            margin-top: 500px;*/
        }
 </style>

</head>

<body style="font-family: 'Sarabun', sans-serif;">

	<h1>ข้อมูลการตรวจสอบครุภัณฑ์ล่าสุด</h1>
	</br>
	</br>
	<a href="<?php echo site_url('history_asset_recent/index2/imgAsset') ?>" target="_blank" class="btn btn-info"><i class="fa fa-picture-o"></i>รูปภาพการตรวจสอบล่าสุด</a>
	</br>
	</br>
	<div class="dater">
		
    <form action="<?php echo base_url('history_asset_recent/index4/fetch'); ?>" method="post">
        <p><b>วันที่ตรวจสอบ</b> : <input type="text" id="datepicker" name="inputText"></p>
        <button type="submit" class="btn btn-primary" name="SubmitButton"><i class="fa fa-search"></i>&nbsp;Search</button>
    </form>
    </div>
	</br>
	<div class="table-responsive">
		<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
			<thead>
				<tr>
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
<!--
	<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>
			--><script src='https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js'></script>
<!--
	<script src='https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js'></script>
	<script src='https://cdn.datatables.net/buttons/1.2.2/js/buttons.colVis.min.js'></script>
	<script src='https://cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js'></script>
	<script src='https://cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js'></script>
			-->
	<script src='https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js'></script>
<!--
	<script src='https://cdn.datatables.net/buttons/1.2.2/js/buttons.bootstrap.min.js'></script>
	<script src='https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js'></script>

	<script src='https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js'></script>
	<script src='https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js'></script>
	
	<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js'></script>
			-->
	<script>
		$(document).ready(function () {

			//Only needed for the filename of export files.
			//Normally set in the title tag of your page.
			document.title = 'ข้อมูลการตรวจสอบครุภัณฑ์ล่าสุด';
			// DataTable initialisation
			$('#example').DataTable({
				"dom": '<"dt-buttons"Bf><"clear">lirtp',
				"paging": true,
				"autoWidth": true,
				"columnDefs": [{
					"orderable": false,
					"targets": 5
				}],
				"buttons": [
					'colvis',
					'copyHtml5',
					'csvHtml5',
					'excelHtml5',
					{
						extend: 'pdfHtml5',
						orientation: 'landscape', //landscape give you more space
						pageSize: 'A1', //A0 is the largest A5 smallest(A0,A1,A2,A3,legal,A4,A5,letter))
						messageTop: 'HISTORY',
						filename: 'HISTORY_PDF',
						charset: 'utf-8',
						bom: 'true'
					},
					{
						extend: 'print',
						customize: function (doc) {
							$(doc.document.body).find('h1').css('font-size', '12pt');
							$(doc.document.body).find('table').css('font-size', '10pt');
							$(doc.document.body).css('font-size', '10px');
						}
					}
				]
			});
		});
	</script>
</body>

</html>
