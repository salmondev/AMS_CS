<?php  
$connect = mysqli_connect("localhost", "amsappne_nfcdb", "AMSnfcapp1", "amsappne_nfc");
if(isset($_POST["submit"]))
{
 if($_FILES['file']['name'])
 {
  $filename = explode(".", $_FILES['file']['name']);
  if($filename[1] == 'csv')
  {
   $handle = fopen($_FILES['file']['tmp_name'], "r");
   while($data = fgetcsv($handle))
   {
                $item1 = mysqli_real_escape_string($connect, $data[0]);  
				$item2 = mysqli_real_escape_string($connect, $data[1]);
				$item3 = mysqli_real_escape_string($connect, $data[2]);
				$item4 = mysqli_real_escape_string($connect, $data[3]);
                $query = "INSERT into ITEM_TABLE (item_uid,item_serial,item_name,item_password) values('$item1','$item2','$item3','$item4')";
                mysqli_query($connect, $query);
   }
   fclose($handle);
   echo "<script>
   alert('Import Done');
   window.location.href='http://amsapp.net/index.php/item_table/index3/sync';
			  
   </script>";
  }
 }
}
?>  

<head>

<script type="text/javascript" src="https://unpkg.com/xlsx/dist/shim.min.js"></script>
<script type="text/javascript" src="https://unpkg.com/xlsx/dist/xlsx.full.min.js"></script>

<script type="text/javascript" src="https://unpkg.com/blob.js@1.0.1/Blob.js"></script>
<script type="text/javascript" src="https://unpkg.com/file-saver@1.3.3/FileSaver.js"></script>
</head>


<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
            <div class="box-title">
<!--
			<form  method="post" enctype="multipart/form-data" >
                    <input name="file" type="file" ></br>
                    <input name="btnSubmit" type="submit" id="btnSubmit" value="IMPORT" class="btn btn-primary btn-lg">
            </form>
-->

<form method="post" enctype="multipart/form-data">
   
    
    <input type="file" name="file" />
    <br />
    <input type="submit" name="submit" value="Import" class="btn btn-info" />
   
  </form>

                   <!--<p id="syncx" class="syncdata"><input type="submit" value="IMPORT" class="btn btn-primary btn-lg" </p>-->
                </div>
            </div>
            <div class="box-body">
                <table id="example2" class="table table-striped">
                <thead>
                    <tr>
						<th>ITEM UID</th>
						<th>ITEM SERIAL</th>
						<th>ITEM NAME</th>
                    </tr>
                </thead>
                    <?php foreach($item_table as $i){ ?>
                    <tr>
						<td><?php echo $i['item_uid']; ?></td>
						<td><?php echo $i['item_serial']; ?></td>
						<td><?php echo $i['item_name']; ?></td>
						<td>
                            <a href="<?php echo site_url('ciqrcode/generate/'.$i['item_uid']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span>Generate QR Code</a> 
                        </td>
                    </tr>
                    <?php } ?>
                </table>
            </div>
        </div>
    </div>
</div>



