

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<!--//////////////////// EXPORT ////////////////////////////////////////////-->
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.4/css/buttons.dataTables.min.css">

    

<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.4/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.4/js/buttons.flash.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.4/js/buttons.html5.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.4/js/buttons.print.min.js"></script>

<!--////////////////////////////////////////////////////////////////////////-->


</head>
<body>

<table id="example" class="table table-striped">
				<thead>
					<tr>
						<th>ASSETID</th>
						<th>REFERIDITEM</th>
						<th>ASSETNAME</th>
						<th>RECEIVEDATE</th>
						<th>SPEC</th>
						<th>UNITNAME</th>
					</tr>
				</thead>
				<?php foreach($asset as $A){ ?>
				<tr>
					<td>
						<?php echo $A['ASSETID']; ?>
					</td>
					<td>
						<?php echo $A['REFERIDITEM']; ?>
					</td>
					<td>
						<?php echo $A['ASSETNAME']; ?>
					</td>
					<td>
						<?php echo $A['RECEIVEDATE']; ?>
					</td>
					<td>
						<?php echo $A['SPEC']; ?>
					</td>
					<td>
						<?php echo $A['UNITNAME']; ?>
					</td>
				</tr>
				<?php } ?>
			</table>
<!-- ///////////////////////////////////////////////////////////////////// -->

</body>


<script type="text/javascript">

////////////////////////////////////////////////////

$(document).ready(function() {
$('#example').DataTable( {
	dom: 'Bfrtip',
	buttons: [
		'copy', 'csv', 'excel' , 'pdf' , 'print'
            
	]
} );
} );
</script>
