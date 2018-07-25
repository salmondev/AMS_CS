<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Floor Table Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('floor_table/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>FLOOR RID</th>
						<th>FLOOR NUMBER</th>
						<th>BUILDING RID</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($floor_table as $f){ ?>
                    <tr>
						<td><?php echo $f['FLOOR_RID']; ?></td>
						<td><?php echo $f['FLOOR_NUMBER']; ?></td>
						<td><?php echo $f['BUILDING_RID']; ?></td>
						<td>
                            <a href="<?php echo site_url('floor_table/edit/'.$f['FLOOR_RID']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('floor_table/remove/'.$f['FLOOR_RID']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
