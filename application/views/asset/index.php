<?php  
$connect = mysqli_connect("localhost", "amsappne_nfcdb", "AMSnfcapp1", "amsappne_nfc");
mysqli_set_charset($connect,'utf8');


if(isset($_POST["submit"]))
{
 if($_FILES['file']['name'])
 {
  $filename = explode(".", $_FILES['file']['name']);
  if($filename[1] == 'csv')
  {
	 $handle = fopen($_FILES['file']['tmp_name'], "r");
	 
	 //Finding the position of fieldnames from Row 1
$fieldnames = fgetcsv($handle);
$assetidindex = array_search("ASSETID", $fieldnames);
$barcodeindex = array_search("BARCODE", $fieldnames);
$referiditemindex = array_search("REFERIDITEM", $fieldnames);
$assetnameindex = array_search("ASSETNAME", $fieldnames);
$receivedateindex = array_search("RECEIVEDATE", $fieldnames);
$specindex = array_search("SPEC", $fieldnames);
$unitnameindex = array_search("UNITNAME", $fieldnames);

   while($data = fgetcsv($handle))
   {
		    
		$count = count($data);
		$wantedColumns = array($assetidindex,$barcodeindex,$referiditemindex,$assetnameindex,$receivedateindex,$specindex,$unitnameindex);
		for ($i=0; $i < $count ; $i++) { 
			if (in_array($i,$wantedColumns))
			{
				//echo $content[$i]."\t";
			
			   /*
				$item1 = mysqli_real_escape_string($connect, $data[0]);
				$item2 = mysqli_real_escape_string($connect, $data[1]);
				$item3 = mysqli_real_escape_string($connect, $data[2]);
				$item4 = mysqli_real_escape_string($connect, $data[3]);
				$item5 = mysqli_real_escape_string($connect, $data[4]);
				$item6 = mysqli_real_escape_string($connect, $data[5]);*/

				$item1 = mysqli_real_escape_string($connect, $data[$assetidindex]);
				$item2 = mysqli_real_escape_string($connect, $data[$barcodeindex]);
				$item3 = mysqli_real_escape_string($connect, $data[$referiditemindex]);
				$item4 = mysqli_real_escape_string($connect, $data[$assetnameindex]);
				$item5 = mysqli_real_escape_string($connect, $data[$receivedateindex]);
				$item6 = mysqli_real_escape_string($connect, $data[$specindex]);
				$item7 = mysqli_real_escape_string($connect, $data[$unitnameindex]);

				$myDate =  date("y/m/d",strtotime(str_replace('/','-',$item5)));
				
                $query = "INSERT into ASSET (ASSETID,BARCODE,REFERIDITEM,ASSETNAME,RECEIVEDATE,SPEC,UNITNAME) values('$item1','$item2','$item3','$item4','$myDate','$item6','$item7')";
								
								$query2 = "UPDATE into ASSET (ASSETID,BARCODE,REFERIDITEM,ASSETNAME,RECEIVEDATE,SPEC,UNITNAME) values('$item1','$item2','$item3','$item4','$myDate','$item6','$item7')";
				
				
				mysqli_query($connect, $query);

				mysqli_query($connect, $query2);
			}
		}
				
   }
   fclose($handle);
   echo "<script>
   alert('Import Done');
   window.location.href='http://amsapp.net/index.php/asset/index3/sync';
			  
   </script>";
  }
 }
}
?>

<head>

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<script type="text/javascript" src="https://unpkg.com/xlsx/dist/shim.min.js"></script>
	<script type="text/javascript" src="https://unpkg.com/xlsx/dist/xlsx.full.min.js"></script>

	<script type="text/javascript" src="https://unpkg.com/blob.js@1.0.1/Blob.js"></script>
	<script type="text/javascript" src="https://unpkg.com/file-saver@1.3.3/FileSaver.js"></script>

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

</head>
<div class="container box">
	<div class="table-responsive">
		<div class="row">
			<div class="col-md-12">
				<div class="box">
					<div class="box-header">
						<div class="box-title">
							<a href="<?php echo site_url('asset/add'); ?>" class="btn btn-success btn-lg"><i class="fa fa-plus"
									style="margin:5px"></i>ADD ASSET</a>
							<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal1">
								IMPORT CSV
							</button>
						</div>
					</div>
					<div class="box-body">
						<table id="example2" class="table table-striped table-bordered">
							<thead>
								<tr>
									<th>ASSETID</th>
									<th>BARCODE</th>
									<th>REFERIDITEM</th>
									<th>ASSETNAME</th>
									<th>RECEIVEDATE</th>
									<th>SPEC</th>
									<th>UNITNAME</th>
									<th>Options</th>
								</tr>
							</thead>
							<?php foreach($asset as $A){ ?>
							<tr>
								<td>
									<?php echo $A['ASSETID']; ?>
								</td>
								<td>
									<?php echo $A['BARCODE']; ?>
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
								<td>
									<a href="<?php echo site_url('asset/edit/'.$A['ASSETID']); ?>" class="btn btn-info btn-xs"><span
											class="fa fa-pencil"></span>
										Edit</a>
									<a href="<?php echo site_url('asset/remove/'.$A['ASSETID']); ?>" class="btn btn-danger btn-xs"
										onclick="return confirm('Confirm to delete record?')"><span class="fa fa-trash"></span>
										Delete</a>

								</td>
							</tr>
							<?php } ?>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- The Modal -->
<div class="modal" id="myModal1">
	<div class="modal-dialog">
		<div class="modal-content">

			<!-- Modal Header -->
			<div class="modal-header">
				<h4 class="modal-title">Import CSV</h4>
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>

			<!-- Modal body -->
			<div class="modal-body">
				<form method="post" enctype="multipart/form-data" accept-charset="utf-8">


					<input type="file" name="file" />
					<br />
					<input type="submit" name="submit" value="Import" class="btn btn-info" />

				</form>
			</div>

			<!-- Modal footer 
			<div class="modal-footer">
				<button type="button" class="btn btn-primary" id="btnPrint">Print</button>
			</div>-->

		</div>
	</div>
</div>
