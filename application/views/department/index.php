<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                
            	<div class="box-title">
                    <a href="<?php echo site_url('department/add'); ?>" class="btn btn-success btn-lg">ADD DEPARTMENT</a> 
                </div>
            </div>
            <div class="box-body">
                <table id="example2" class="table table-striped">
				<thead>
                    <tr>
						<th>DEPARTMENTID</th>
						<th>DEPARTMENTNAME</th>
						<th>Actions</th>
                    </tr>
					</thead>
                    <?php foreach($department as $D){ ?>
                    <tr>
						<td><?php echo $D['DEPARTMENTID']; ?></td>
						<td><?php echo $D['DEPARTMENTNAME']; ?></td>
						<td>
                            <a href="<?php echo site_url('department/edit/'.$D['DEPARTMENTID']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('department/remove/'.$D['DEPARTMENTID']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
