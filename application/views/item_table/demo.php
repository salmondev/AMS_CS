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

				$myDate =  date("y/m/d",strtotime(str_replace('/','-',$item4)));
				
                $query = "INSERT into ASSET (ASSETID,REFERID,ASSETNAME,RECEIVEDATE,SPEC,UNITNAME) values('$item1','$item2','$item3','$myDate','$item5','$item6')";
								
								$query2 = "UPDATE into ASSET (ASSETID,REFERID,ASSETNAME,RECEIVEDATE,SPEC,UNITNAME) values('$item1','$item2','$item3','$item4','$item5','$item6')";
				
				
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
	
	<!--//////////////////// EXPORT ////////////////////////////////////////////-->

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
					<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal1">
						IMPORT CSV
					</button>

					</br>
					</br>
					<p id="xportxlsx" class="xport"><input type="submit" value="EXPORT EXCEL" class="btn btn-info btn-lg" onclick="doit('xlsx');"></p>
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


<script type="text/javascript">
	function doit(type, fn, dl) {
		var elt = document.getElementById('example2');
		var wb = XLSX.utils.table_to_book(elt, {
			sheet: "Sheet JS"
		});
		return dl ?
			XLSX.write(wb, {
				bookType: type,
				bookSST: true,
				type: 'base64'
			}) :
			XLSX.writeFile(wb, fn || ('Database_Item.' + (type || 'xlsx')));
	}


	function tableau(pid, iid, fmt, ofile) {
		if (typeof Downloadify !== 'undefined') Downloadify.create(pid, {
			swf: 'downloadify.swf',
			downloadImage: 'download.png',
			width: 100,
			height: 30,
			filename: ofile,
			data: function () {
				return doit(fmt, ofile, true);
			},
			transparent: false,
			append: false,
			dataType: 'base64',
			onComplete: function () {
				alert('Your File Has Been Saved!');
			},
			onCancel: function () {
				alert('You have cancelled the saving of this file.');
			},
			onError: function () {
				alert('You must put something in the File Contents or there will be nothing to save!');
			}
		});
	}
	tableau('xlsxbtn', 'xportxlsx', 'xlsx', 'table_item.xlsx');

</script>

<script>
	document.getElementById("delete-btn").addEventListener("click", function (event) {
		swal({
				title: "Are you sure?",
				text: "You will not be able to recover this imaginary file!",
				icon: "warning",
				buttons: {
					cancel: {
						visible: true,
						text: "No, cancel plx!",
						closeModal: false,
					},
					confirm: {
						text: "Yes, delete it!",
						className: "doit",
						closeModal: false,
					},
				},
			})
			//attach to the promise returned by swal()
			.then((willDelete) => {
				if (willDelete) {
					swal("Deleted!", "Your imaginary file has been deleted.", "success")
					//another promise and another promise fulfilled response
					<?php echo site_url('tb_item/remove/'.$t['id']); ?>
				} else {
					swal("Cancelled", "Your imaginary file is safe :)", "error");
				}
			});
	});

////////////////////////////////////////////////////

$(document).ready(function() {
    $('#example2').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    } );
} );
</script>
