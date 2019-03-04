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
$referidindex = array_search("REFERID", $fieldnames);
$refernameindex = array_search("REFERNAME", $fieldnames);
$departmentidindex = array_search("DEPARTMENTID", $fieldnames);

   while($data = fgetcsv($handle))
   {
		    
		$count = count($data);
		$wantedColumns = array($referidindex,$refernameindex,$departmentidindex);
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

				$item1 = mysqli_real_escape_string($connect, $data[$referidindex]);
				$item2 = mysqli_real_escape_string($connect, $data[$refernameindex]);
				$item3 = mysqli_real_escape_string($connect, $data[$departmentidindex]);
                $query = "INSERT into REFER (REFERID,REFERNAME,DEPARTMENTID) values('$item1','$item2','$item3')";
				
				
				mysqli_query($connect, $query);
			}
		}
				
   }
   fclose($handle);
   echo "<script>
   alert('Import Done');
   window.location.href='http://amsapp.net/index.php/refer/index/index';
			  
   </script>";
  }
 }
}
?>

<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
            	<div class="box-title">
                    <a href="<?php echo site_url('refer/add'); ?>" class="btn btn-success btn-lg"><i class="fa fa-plus" style="margin:5px"></i>ADD REFER</a> 
					<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal1">
						IMPORT CSV
					</button>
                </div>
            </div>
            <div class="box-body">
                <table id="example2" class="table table-striped">
				<thead>
                    <tr>
						<th>REFERID</th>
						<th>DEPARTMENTID</th>
						<th>REFERNAME</th>
						<th>Actions</th>
                    </tr>
					</thead>
                    <?php foreach($refer as $R){ ?>
                    <tr>
						<td><?php echo $R['REFERID']; ?></td>
						<td><?php echo $R['DEPARTMENTID']; ?></td>
						<td><?php echo $R['REFERNAME']; ?></td>
						<td>
                            <a href="<?php echo site_url('refer/edit/'.$R['REFERID']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('refer/remove/'.$R['REFERID']); ?>" class="btn btn-danger btn-xs" onclick="return confirm('Confirm to delete record?')"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
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
