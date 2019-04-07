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
$departmentidindex = array_search("DEPARTMENTID", $fieldnames);
$departmentnameindex = array_search("DEPARTMENTNAME", $fieldnames);


   while($data = fgetcsv($handle))
   {
		    
		$count = count($data);
		$wantedColumns = array($departmentidindex,$departmentnameindex);
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

				$item1 = mysqli_real_escape_string($connect, $data[$departmentidindex]);
				$item2 = mysqli_real_escape_string($connect, $data[$departmentnameindex]);

				//$myDate =  date("y/m/d",strtotime(str_replace('/','-',$item4)));
				
                $query = "INSERT into DEPARTMENT (DEPARTMENTID,DEPARTMENTNAME) values('$item1','$item2')";
								
								//$query2 = "UPDATE into DEPARTMENT (DAPARTMENTID,DEPARTMENTNAME) values('$item1','$item2'')";
				
				
				mysqli_query($connect, $query);

				//mysqli_query($connect, $query2);
			}
		}
				
   }
   fclose($handle);
   echo "<script>
   alert('Import Done');
   window.location.href='http://amsapp.net/index.php/department/index/index';
			  
   </script>";
  }
 }
}
?>

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
<div class="container box">
	<div class="table-responsive">
		<div class="row">
			<div class="col-md-12">
				<div class="box">
					<div class="box-header">

						<div class="box-title">
							<a href="<?php echo site_url('department/add'); ?>" class="btn btn-success btn-lg"><i class="fa fa-plus"
									style="margin:5px"></i>ADD DEPARTMENT</a>
							<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal1">
								IMPORT CSV
							</button>
						</div>
					</div>
					<div class="box-body">
						<table id="example2" class="table table-striped table-bordered">
							<thead>
								<tr>
									<th>DEPARTMENTID</th>
									<th>DEPARTMENTNAME</th>
									<th>Actions</th>
								</tr>
							</thead>
							<?php foreach($department as $D){ ?>
							<tr>
								<td><?php echo $D['DEPARTMENTID']; ?></td>
								<td><?php echo $D['DEPARTMENTNAME']; ?></td>
								<td>
									<a href="<?php echo site_url('department/edit/'.$D['DEPARTMENTID']); ?>"
										class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a>
									<a href="<?php echo site_url('department/remove/'.$D['DEPARTMENTID']); ?>"
										class="btn btn-danger btn-xs" onclick="return confirm('Confirm to delete record?')"><span
											class="fa fa-trash"></span> Delete</a>
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
