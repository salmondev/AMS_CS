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
              <!-- <h3 class="box-title">Tb Item Listing</h3> -->
              <div class="box-title">
                    <a href="<?php echo site_url('tb_item/add'); ?>" class="btn btn-success btn-lg">ADD ITEM</a>
                    </br></br> 
                    <p id="xportxlsx" class="xport"><input type="submit" value="EXPORT" class="btn btn-primary" onclick="doit('xlsx');"></p>

                </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Detail</th>
                  <th>Updated</th>
                  <th>Options</th>
                </tr>
                </thead>

                
                <?php foreach($tb_item as $t){ ?>
                    <tr>
						<td><?php echo $t['id']; ?></td>
						<td><?php echo $t['name']; ?></td>
						<td><?php echo $t['detail']; ?></td>
						<td><?php echo $t['odate']; ?></td>
						<td>
                            <a href="<?php echo site_url('tb_item/edit/'.$t['id']); ?>" class="btn btn-info btn-sm"><span class="fa fa-pencil"></span> Edit</a> 
                            <a onclick="sweet();" href="<?php echo site_url('tb_item/remove/'.$t['id']); ?>" class="btn btn-danger btn-sm"><span class="fa fa-trash"></span> Delete</a>
                            
 
                        </td>
                    </tr>
                    <?php } ?>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        
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
