<?php  
$connect = mysqli_connect("localhost", "amsappne_nfcdb", "AMSnfcapp1", "amsappne_nfc");
mysqli_set_charset($connect,'utf8');

$query = "SELECT * FROM HISTORY_ASSET_RECENT ORDER BY HISTORY_YEAR ASC";

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
		
		<div class="table-responsive">
			<table id="example4" class="table table-bordered table-striped">
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
							<!--<p>HISTORY YEAR</p> (ปี) -->
							<select name="HISTORY_YEAR" id="HISTORY_YEAR" class="form-control">
                                <option value="">HISTORY YEAR Search</option>
                                <?php 
         while($row = mysqli_fetch_array($result))
         {
          echo '<option value="'.$row["HISTORY_YEAR"].'">'.$row["HISTORY_YEAR"].'</option>';
         }
         ?>
                            </select>

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

<script type="text/javascript" language="javascript">
    $(document).ready(function () {

        load_data();

        function load_data(is_category) {
            var dataTable = $('#example4').DataTable({
                "dom": '<"dt-buttons"Bf><"clear">lirtp',
                "processing": true,
                "serverSide": true,
                "paging": true,
                "autoWidth": true,
                "order": [],
                "ajax": {
                    url: "<?php echo base_url('history_asset_recent/index4/fetch'); ?>",
                    type: "POST",
                    data: {
                        is_category: is_category
                    }
                },
                "columnDefs": [{
                    "targets": [2],
                    "orderable": false,
                }, ],
                "buttons": [
                    'colvis',
                    'copyHtml5',
                    'csvHtml5',
                    'excelHtml5',
                    'pdfHtml5',
                    'print'
                ]
            });
        }

        $(document).on('change', '#category', function () {
            var category = $(this).val();
            $('#example4').DataTable().destroy();
            if (category != '') {
                load_data(category);
            } else {
                load_data();
            }
        });
    });
</script>
