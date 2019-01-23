<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
            	<div class="box-title">
                    <a href="<?php echo site_url('building/add'); ?>" class="btn btn-success btn-lg">ADD BUILDING</a> 
                </div>
            </div>
            <div class="box-body">
                <table id="example2" class="table table-striped">
				<thead>
                    <tr>
						<th>BUILDING ID</th>
						<th>BUILDING NAME</th>
						<th>Actions</th>
                    </tr>
					</thead>
                    <?php foreach($building as $B){ ?>
                    <tr>
						<td><?php echo $B['BUILDING_ID']; ?></td>
						<td><?php echo $B['BUILDING_NAME']; ?></td>
						<td>
                            <a href="<?php echo site_url('building/edit/'.$B['BUILDING_ID']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('building/remove/'.$B['BUILDING_ID']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
