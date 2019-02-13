<?php if (!isset($_SESSION['user'])) {
    redirect('login');
} ?>

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
$referidindex = array_search("REFERID", $fieldnames);
$assetnameindex = array_search("ASSETNAME", $fieldnames);
$receivedateindex = array_search("RECEIVEDATE", $fieldnames);
$specindex = array_search("SPEC", $fieldnames);
$unitnameindex = array_search("UNITNAME", $fieldnames);

   while($data = fgetcsv($handle))
   {
		    
		$count = count($data);
		$wantedColumns = array($assetidindex,$referidindex,$assetnameindex,$receivedateindex,$specindex,$unitnameindex);
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
				$item2 = mysqli_real_escape_string($connect, $data[$referidindex]);
				$item3 = mysqli_real_escape_string($connect, $data[$assetnameindex]);
				$item4 = mysqli_real_escape_string($connect, $data[$receivedateindex]);
				$item5 = mysqli_real_escape_string($connect, $data[$specindex]);
				$item6 = mysqli_real_escape_string($connect, $data[$unitnameindex]);
				
                $query = "INSERT into ASSET (ASSETID,REFERID,ASSETNAME,RECEIVEDATE,SPEC,UNITNAME) values('$item1','$item2','$item3','$item4','$item5','$item6')";
				
				
				mysqli_query($connect, $query);
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

	<script src="<?php echo base_url('assets/js/qrcode.js');?>"></script>
	<script src="<?php echo base_url('assets/js/qrcode.min.js');?>"></script>
	<!--
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS"
	 crossorigin="anonymous">-->

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
	 crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut"
	 crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k"
	 crossorigin="anonymous"></script>

	<style>
		@media screen {
  #printSection {
      display: none;
  }
}

@media print {
  body * {
    visibility:hidden;
  }
  #printSection, #printSection * {
    visibility:visible;
  }
  #printSection {
    position:absolute;
    left:0;
    top:0;
  }
}

.modal {
background: rgba(0,0,0,0.5);
}

.show {
background: rgba(0, 0, 0, 0.22);
}

.modal-backdrop.in {
background: rgba(0, 0, 0, 0.5);
}

</style>
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



					<form method="post" enctype="multipart/form-data" accept-charset="utf-8">


						<input type="file" name="file" />
						<br />
						<input type="submit" name="submit" value="Import" class="btn btn-info" />

					</form> -->

					<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal1">
						IMPORT CSV
					</button>

					<!--<p id="syncx" class="syncdata"><input type="submit" value="IMPORT" class="btn btn-primary btn-lg" </p>-->
				</div>
			</div>
			<div class="box-body">
				<table id="example2" class="table table-striped">
					<thead>
						<tr>
							<th>ASSETID</th>
							<th>REFERID</th>
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

							<!--<input type="hidden" name="assetid" id="textQrcode" value="<?php echo $A['ASSETID']; ?>" />-->

						</td>
						<td>
							<?php echo $A['REFERID']; ?>
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
							<!--<a href="<?php echo site_url('ciqrcode/generate/'.$i['item_uid']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span>Generate
								QR Code</a> 
							<input type="hidden" name="assetid" id="textQrcode" value="<?php echo $A['ASSETID']; ?>" />-->


							<!-- Button to Open the Modal -->

							<input type="hidden" name="assetid" id="textQrcode" value="<?php echo $A['ASSETID']; ?>" />
							<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal" onclick="createQRcode()">
								Generate QR Code
							</button>
						</td>
					</tr>
					<?php } ?>
				</table>
			</div>
		</div>
	</div>
</div>

<!-- The Modal -->
<div class="modal" id="myModal">
	<div class="modal-dialog">
		<div class="modal-content">

			<!-- Modal Header -->
			<div class="modal-header">
				<h4 class="modal-title">QR Code</h4>
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>

			<!-- Modal body -->
			<div class="modal-body">
				<div id="showQRcode"></div>
			</div>

			<!-- Modal footer -->
			<div class="modal-footer justify-content-between">
				<div class="col-md-4 text-left"><button type="button" class="btn btn-primary move-left" id="btnPrint">Print</button></div>
				<div class="col-md-4"></div>
				<div class="col-md-4"><button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button></div>
			</div>

		</div>
	</div>
</div>

<!-- ///////////////////////////////////////////////////////////////////// -->

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


<script>
	///////////////////////////////////////////////////////////////////


	function createQRcode() {
		var textQrcode = document.getElementById('textQrcode');
		var showQRcode = document.getElementById('showQRcode');

		if (textQrcode.value.trim() !== '') {
			showQRcode.innerHTML = '';
			new QRCode(showQRcode, textQrcode.value);
			textQrcode.value = '';
		}
	}


	/////////////////////////////////////////////////////////////////

	document.getElementById("btnPrint").onclick = function () {
		printElement(document.getElementById("showQRcode"));
	}

	function printElement(elem) {
		var domClone = elem.cloneNode(true);

		var $printSection = document.getElementById("printSection");

		if (!$printSection) {
			var $printSection = document.createElement("div");
			$printSection.id = "printSection";
			document.body.appendChild($printSection);
		}

		$printSection.innerHTML = "";
		$printSection.appendChild(domClone);
		window.print();
	}

</script>
