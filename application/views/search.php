<?php  
 $connect = mysqli_connect("localhost", "amsappne_nfcdb", "AMSnfcapp1", "amsappne_nfc");  
 mysqli_set_charset($connect,'utf8');
 $query = "SELECT * FROM ASSET ORDER BY ASSETID desc";  
 $result = mysqli_query($connect, $query);  
 ?>
<!DOCTYPE html>
<html>

<head>
	<title>User Search</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
	<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
	<link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
</head>

<body>
	<br /><br />
	<div class="container" style="width:900px;">
		<h2 align="center">Search Asset System</h2>
		<h3 align="center">ASSET DATA</h3><br />
		<div class="col-md-3">
			<input type="text" name="from_date" id="from_date" class="form-control" placeholder="From Date" />
		</div>
		<div class="col-md-3">
			<input type="text" name="to_date" id="to_date" class="form-control" placeholder="To Date" />
		</div>
		<div class="col-md-5">
			<input type="button" name="filter" id="filter" value="Filter" class="btn btn-info" />
		</div>
		<div style="clear:both"></div>
		<br />
		<div id="order_table">
			<table class="table table-bordered">
				<tr>
					<th width="5%">ASSETID</th>
					<th width="20%">REFERIDITEM</th>
					<th width="40%">ASSETNAME</th>
					<th width="10%">RECEIVEDATE</th>
					<th width="40%">SPEC</th>
					<th width="5%">UNITNAME</th>
				</tr>
				<?php  
                     while($row = mysqli_fetch_array($result))  
                     {  
                     ?>
				<tr>
					<td>
						<?php echo $row["ASSETID"]; ?>
					</td>
					<td>
						<?php echo $row["REFERIDITEM"]; ?>
					</td>
					<td>
						<?php echo $row["ASSETNAME"]; ?>
					</td>
					<td>
						<?php echo $row["RECEIVEDATE"]; ?>
					</td>
					<td>
						<?php echo $row["SPEC"]; ?>
					</td>
					<td>
						<?php echo $row["UNITNAME"]; ?>
					</td>
				</tr>
				<?php  
                     }  
                     ?>
			</table>
		</div>
	</div>
</body>

</html>
<script>




////////////////////////////////////////////////////////////////
	$(document).ready(function () {
		
	
		$(function () {
			$("#from_date").datepicker({
			format: 'yy-mm-dd',
			orientation: "bottom left"
    });
			$("#to_date").datepicker({
			format: 'yy-mm-dd',
			orientation: "bottom left"
    });
		});
		$('#filter').click(function () {
			var from_date = $('#from_date').val();
			var to_date = $('#to_date').val();
			if (from_date != '' && to_date != '') {
				$.ajax({
					url: "<?php echo site_url('search/index2/filter') ?>",
					method: "POST",
					data: {
						from_date: from_date,
						to_date: to_date
					},
					success: function (data) {
						$('#order_table').html(data);
					}
				});
			} else {
				alert("Please Select Date");
			}
		});
	});

</script>
