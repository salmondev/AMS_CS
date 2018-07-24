<head>

</head>

<div class="row">
    <div class="col-md-12">
    <div class="box">
            <div class="box-header">
              <!-- <h3 class="box-title">Tb Item Listing</h3> -->
              <div class="box-title">
                    <a href="<?php echo site_url('tb_item/add'); ?>" class="btn btn-success btn-lg">ADD ITEM</a>
                    </br></br> 
                    <p><input id="exporter" type="submit" value="EXPORT" class="btn btn-primary" onclick="exporter();"></p>

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

<script>

</script>