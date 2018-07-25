<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Owner Table Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('owner_table/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>OWNER UID</th>
						<th>OWNER FNAME</th>
						<th>OWNER LNAME</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($owner_table as $o){ ?>
                    <tr>
						<td><?php echo $o['OWNER_UID']; ?></td>
						<td><?php echo $o['OWNER_FNAME']; ?></td>
						<td><?php echo $o['OWNER_LNAME']; ?></td>
						<td>
                            <a href="<?php echo site_url('owner_table/edit/'.$o['']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('owner_table/remove/'.$o['']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
