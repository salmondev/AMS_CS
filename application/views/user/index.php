<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
            	<div class="box-title">
                    <a href="<?php echo site_url('user/add'); ?>" class="btn btn-success btn-lg">ADD USER</a> 
                </div>
            </div>
            <div class="box-body">
                <table id="example2" class="table table-striped">
				<thead>
                    <tr>
						<th>USER ID</th>
						<th>REFERID</th>
						<th>USER USERNAME</th>
						<th>USER PASSWORD</th>
						<th>AUTH</th>
						<th>Actions</th>
                    </tr>
					</thead>
                    <?php foreach($user as $U){ ?>
                    <tr>
						<td><?php echo $U['USER_ID']; ?></td>
						<td><?php echo $U['REFERID']; ?></td>
						<td><?php echo $U['USER_USERNAME']; ?></td>
						<td><?php echo $U['USER_PASSWORD']; ?></td>
						<td><?php echo $U['AUTH']; ?></td>
						<td>
                            <a href="<?php echo site_url('user/edit/'.$U['USER_ID']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('user/remove/'.$U['USER_ID']); ?>" class="btn btn-danger btn-xs" onclick="return confirm('Confirm to delete record?')" ><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>


