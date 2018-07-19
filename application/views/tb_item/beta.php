<div class="box">
            <div class="box-header">
              <h3 class="box-title">Tb Item Listing</h3>
              <div class="box-tools">
                    <a href="<?php echo site_url('tb_item/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Date</th>
                  <th>Detail</th>
                  <th>Actions</th>
                </tr>
                </thead>

                
                <?php foreach($tb_item as $t){ ?>
                    <tr>
						<td><?php echo $t['id']; ?></td>
						<td><?php echo $t['name']; ?></td>
						<td><?php echo $t['date']; ?></td>
						<td><?php echo $t['detail']; ?></td>
						<td>
                            <a href="<?php echo site_url('tb_item/edit/'.$t['id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('tb_item/remove/'.$t['id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
<!-- ************************************************************************ -->

                <tfoot>
                <tr>
                <th>ID</th>
                  <th>Name</th>
                  <th>Date</th>
                  <th>Detail</th>
                  <th>Actions</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        