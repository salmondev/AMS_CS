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
   fgetcsv($handle);
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
			<form method="post" enctype="multipart/form-data">
   
    
    <input type="file" name="file" />
    <br />
    <input type="submit" name="submit" value="IMPORT CSV" class="btn btn-info btn-lg" />
   
  </form>
  
                    <br/><p id="xportxlsx" class="xport"><input type="submit" value="EXPORT EXCEL" class="btn btn-primary btn-lg" onclick="doit('xlsx');"></p>
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
                    </tr>
                    <?php } ?>
                </table>        
            </div>
        </div>
    </div>
</div>


<script type="text/javascript">

function doit(type, fn, dl) {
    var elt = document.getElementById('example2');
    var wb = XLSX.utils.table_to_book(elt, {sheet:"Sheet JS"});
    return dl ?
        XLSX.write(wb, {bookType:type, bookSST:true, type: 'base64'}) :
        XLSX.writeFile(wb, fn || ('Database_Item.' + (type || 'xlsx')));
}


function tableau(pid, iid, fmt, ofile) {
    if(typeof Downloadify !== 'undefined') Downloadify.create(pid,{
            swf: 'downloadify.swf',
            downloadImage: 'download.png',
            width: 100,
            height: 30,
            filename: ofile, data: function() { return doit(fmt, ofile, true); },
            transparent: false,
            append: false,
            dataType: 'base64',
            onComplete: function(){ alert('Your File Has Been Saved!'); },
            onCancel: function(){ alert('You have cancelled the saving of this file.'); },
            onError: function(){ alert('You must put something in the File Contents or there will be nothing to save!'); }
    });
}
tableau('xlsxbtn',  'xportxlsx',  'xlsx',  'table_item.xlsx');

</script>

<script>
            document.getElementById("delete-btn").addEventListener("click", function (event)
            {
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
        </script>
