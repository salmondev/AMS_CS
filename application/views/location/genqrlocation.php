<?php if (!isset($_SESSION['user'])) {
    redirect('login');
} ?>

<?php  
$connect = mysqli_connect("localhost", "amsappne_nfcdb", "AMSnfcapp1", "amsappne_nfc");
mysqli_set_charset($connect,'utf8');

?>

<head>

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<script type="text/javascript" src="https://unpkg.com/xlsx/dist/shim.min.js"></script>
	<script type="text/javascript" src="https://unpkg.com/xlsx/dist/xlsx.full.min.js"></script>

	<script type="text/javascript" src="https://unpkg.com/blob.js@1.0.1/Blob.js"></script>
	<script type="text/javascript" src="https://unpkg.com/file-saver@1.3.3/FileSaver.js"></script>

	<script src="<?php echo base_url('assets/js/qrcode.js');?>"></script>
	<script src="<?php echo base_url('assets/js/qrcode.min.js');?>"></script>


	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
		integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
	</script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"
		integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous">
	</script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"
		integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous">
	</script>

	<style>
		@media screen {
			#printSection {
				display: none;
			}
		}

		@media print {
			body * {
				visibility: hidden;
			}

			#printSection,
			#printSection * {
				visibility: visible;
			}

			#printSection {
				position: absolute;
				left: 0;
				top: 0;
			}
		}

		.modal {
			background: rgba(0, 0, 0, 0.5);
		}

		.show {
			background: rgba(0, 0, 0, 0.22);
		}

		.modal-backdrop.in {
			background: rgba(0, 0, 0, 0.5);
		}

	</style>


	<style>
		body {
			margin: 0;
			padding: 0;
			background-color: #f1f1f1;
		}

		.box {
			width: 100%;
			padding: 20px;
			background-color: #fff;
			border: 1px solid #ccc;
			border-radius: 5px;
			margin-top: 25px;
		}

		input[type=checkbox] {
			/* Double-sized Checkboxes */
			-ms-transform: scale(2);
			/* IE */
			-moz-transform: scale(2);
			/* FF */
			-webkit-transform: scale(2);
			/* Safari and Chrome */
			-o-transform: scale(2);
			/* Opera */
			/*padding: 10px;*/
			margin-left: 25px;
			margin-top: 15px;

		}

	</style>
</head>

<div class="container box">
	<h1 align="center" style="font-family: 'Sarabun', sans-serif;"><i class="fa fa-qrcode"
			style="margin:15px"></i>ระบบสร้างรหัส QR Code สถานที่</h1>
	<br />
	<form name="frmMain" action="<?php echo site_url('location/index4/printQRlocate') ?>" method="post"
		OnSubmit="return onDelete();">
		<input type="submit" name="btnDelete" value="PRINT QR CODE" class="btn btn-success">
		<br />
		<div class="table-responsive">
			<br />
			<div class="row">
				<div class="col-md-12">

				</div>
			</div>

			<table id="example3" class="table table-striped table-bordered">
				<thead>
					<tr>
						<th>
							<div align="center">
								Print QR
								<!--<input name="CheckAll" type="checkbox" id="CheckAll" value="Y" onClick="ClickCheckAll(this);">
	-->
							</div>

							<input type="hidden" name="hdnCount"
								value="<?php echo $this->db->from("ASSET")->count_all_results();?>">
						<th>LOCATION ID</th>
						<th>LOCATION BARCODE</th>
						<th>DEPARTMENTID</th>
						<th>LOCATION BUILDING ID</th>
						<th>LOCATION BUILDING NAME</th>
						<th>LOCATION FLOOR ID</th>
						<th>LOCATION ROOM ID</th>
						<th>QR CODE</th>
					</tr>
				</thead>

				<?php foreach($location as $L){  $i = 0;?>
				<tr>
					<td>
						<input type="checkbox" name="chkDel[]" id="chkDel<?php echo $i;?>"
							value="<?php echo $L["LOCATION_BARCODE"];?>">
						<?php $i++ ?>
	</form>
	</td>
	<td><?php echo $L['LOCATION_ID']; ?></td>
	<td><?php echo $L['LOCATION_BARCODE']; ?></td>
	<td><?php echo $L['DEPARTMENTID']; ?></td>
	<td><?php echo $L['LOCATION_BUILDING_ID']; ?></td>
	<td><?php echo $L['LOCATION_BUILDING_NAME']; ?></td>
	<td><?php echo $L['LOCATION_FLOOR_ID']; ?></td>
	<td><?php echo $L['LOCATION_ROOM_ID']; ?></td>
	<td>

		<form action="<?php echo site_url('location/index3/genqrlocate') ?>" method="post" name="form1">

			<input type="hidden" name="qr_id" value="<?php echo ($L['LOCATION_ID']); ?>">
			<input type="hidden" name="qr_text" value="<?php echo ($L['LOCATION_BARCODE']); ?>">
			<input type="hidden" name="qr_department" value="<?php echo ($L['DEPARTMENTID']); ?>">
			<input type="hidden" name="qr_building" value="<?php echo ($L['LOCATION_BUILDING_ID']); ?>">
			<input type="hidden" name="qr_buildingname" value="<?php echo ($L['LOCATION_BUILDING_NAME']); ?>">
			<input type="hidden" name="qr_room" value="<?php echo ($L['LOCATION_ROOM_ID']); ?>">
			<input type="submit" name="generate_text" value="GENERATE QR CODE" class="btn btn-primary" />

			<input type="hidden" name="hdnCount" value="<?php echo $this->db->from("LOCATION")->count_all_results();?>">
		</form>
	</td>
	</tr>
	<?php } ?>
	</table>
</div>
</div>

<script>
	$(function () {
		$('#example3').DataTable({
			'aLengthMenu': [
				[25, 50, 100, 200, -1],
				[25, 50, 100, 200, "All"]
			],
			'iDisplayLength': -1,
			'paging': true,
			'lengthChange': true,
			'searching': true,
			'ordering': true,
			'info': true,
			'autoWidth': true,
			"aoColumns": [{
					"bSortable": false
				},
				null,
				null,
				null,
				null,
				null,
				null,
				null,
				null
			]
		});
	});


	// Using aoColumns
	/*$(document).ready( function() {
	  $('#example2').dataTable( {
	    "aoColumns": [
	      { "bSortable": false },
		  null,
		  null,
		  null,
	      null,
	      null,
	      null
	    ] } );
	} );*/

</script>
