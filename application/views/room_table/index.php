<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Room Table Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('room_table/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>ROOM RID</th>
						<th>ROOM NUMBER</th>
						<th>FLOOR RID</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($room_table as $r){ ?>
                    <tr>
						<td><?php echo $r['ROOM_RID']; ?></td>
						<td><?php echo $r['ROOM_NUMBER']; ?></td>
						<td><?php echo $r['FLOOR_RID']; ?></td>
						<td>
                            <a href="<?php echo site_url('room_table/edit/'.$r['ROOM_RID']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('room_table/remove/'.$r['ROOM_RID']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
