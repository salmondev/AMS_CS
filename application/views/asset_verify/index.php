<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                
            	<div class="box-title">
                    <a href="<?php echo site_url('asset_verify/add'); ?>" class="btn btn-success btn-lg">ADD</a> 
                </div>
            </div>
            <div class="box-body">
                <table id="example2" class="table table-striped">
				<thead>
                    <tr>
						<th>ASSET VERIFY RID</th>
						<th>ASSET VERIFY ID</th>
						<th>ASSET VERIFY STATUS ID</th>
						<th>ASSET VERIFY REFERID</th>
						<th>ASSET VERIFY BUILDING ID</th>
						<th>ASSET VERIFY FLOOR ID</th>
						<th>ASSET VERIFY ROOM ID</th>
						<th>ASSET VERIFY DAY</th>
						<th>ASSET VERIFY MONTH</th>
						<th>ASSET VERIFY YEAR</th>
						<th>ASSET VERIFY HOUR</th>
						<th>ASSET VERIFY MINUTE</th>
						<th>ASSET VERIFY USER ID</th>
						<th>ASSET VERIFY COMMITTEE ID</th>
						<th>Actions</th>
                    </tr>
					</thead>
                    <?php foreach($asset_verify as $A){ ?>
                    <tr>
						<td><?php echo $A['ASSET_VERIFY_RID']; ?></td>
						<td><?php echo $A['ASSET_VERIFY_ID']; ?></td>
						<td><?php echo $A['ASSET_VERIFY_STATUS_ID']; ?></td>
						<td><?php echo $A['ASSET_VERIFY_REFERID']; ?></td>
						<td><?php echo $A['ASSET_VERIFY_BUILDING_ID']; ?></td>
						<td><?php echo $A['ASSET_VERIFY_FLOOR_ID']; ?></td>
						<td><?php echo $A['ASSET_VERIFY_ROOM_ID']; ?></td>
						<td><?php echo $A['ASSET_VERIFY_DAY']; ?></td>
						<td><?php echo $A['ASSET_VERIFY_MONTH']; ?></td>
						<td><?php echo $A['ASSET_VERIFY_YEAR']; ?></td>
						<td><?php echo $A['ASSET_VERIFY_HOUR']; ?></td>
						<td><?php echo $A['ASSET_VERIFY_MINUTE']; ?></td>
						<td><?php echo $A['ASSET_VERIFY_USER_ID']; ?></td>
						<td><?php echo $A['ASSET_VERIFY_COMMITTEE_ID']; ?></td>
						<td>
                            <a href="<?php echo site_url('asset_verify/edit/'.$A['ASSET_VERIFY_RID']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('asset_verify/remove/'.$A['ASSET_VERIFY_RID']); ?>" class="btn btn-danger btn-xs" onclick="return confirm('Confirm to delete record?')"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
