<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Status Table Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('status_table/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>STATUS RID</th>
						<th>STATUS NAME</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($status_table as $s){ ?>
                    <tr>
						<td><?php echo $s['STATUS_RID']; ?></td>
						<td><?php echo $s['STATUS_NAME']; ?></td>
						<td>
                            <a href="<?php echo site_url('status_table/edit/'.$s['STATUS_RID']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('status_table/remove/'.$s['STATUS_RID']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
