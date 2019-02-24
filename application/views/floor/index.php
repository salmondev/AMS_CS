<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
            	<div class="box-title">
                    <a href="<?php echo site_url('floor/add'); ?>" class="btn btn-success btn-lg">ADD FLOOR</a> 
                </div>
            </div>
            <div class="box-body">
                <table id="example2" class="table table-striped">
				<thead>
                    <tr>
						<th>FLOOR RID</th>
						<th>BUILDING ID</th>
						<th>FLOOR ID</th>
						<th>Actions</th>
                    </tr>
					</thead>
                    <?php foreach($floor as $F){ ?>
                    <tr>
						<td><?php echo $F['FLOOR_RID']; ?></td>
						<td><?php echo $F['BUILDING_ID']; ?></td>
						<td><?php echo $F['FLOOR_ID']; ?></td>
						<td>
                            <a href="<?php echo site_url('floor/edit/'.$F['FLOOR_RID']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('floor/remove/'.$F['FLOOR_RID']); ?>" class="btn btn-danger btn-xs" onclick="return confirm('Confirm to delete record?')"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
