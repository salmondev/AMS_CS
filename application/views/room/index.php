<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
            	<div class="box-title">
                    <a href="<?php echo site_url('room/add'); ?>" class="btn btn-success btn-lg">ADD ROOM</a> 
                </div>
            </div>
            <div class="box-body">
                <table id="example2" class="table table-striped">
				<thead>
                    <tr>
						<th>ROOM RID</th>
						<th>FLOOR RID</th>
						<th>DEPARTMENTID</th>
						<th>ROOM ID</th>
						<th>Actions</th>
                    </tr>
					</thead>
                    <?php foreach($room as $R){ ?>
                    <tr>
						<td><?php echo $R['ROOM_RID']; ?></td>
						<td><?php echo $R['FLOOR_RID']; ?></td>
						<td><?php echo $R['DEPARTMENTID']; ?></td>
						<td><?php echo $R['ROOM_ID']; ?></td>
						<td>
                            <a href="<?php echo site_url('room/edit/'.$R['ROOM_RID']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('room/remove/'.$R['ROOM_RID']); ?>" class="btn btn-danger btn-xs" onclick="return confirm('Confirm to delete record?')"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
