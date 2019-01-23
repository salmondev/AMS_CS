<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
            	<div class="box-title">
                    <a href="<?php echo site_url('refer/add'); ?>" class="btn btn-success btn-lg">ADD</a> 
                </div>
            </div>
            <div class="box-body">
                <table id="example2" class="table table-striped">
				<thead>
                    <tr>
						<th>REFERID</th>
						<th>DEPARTMENTID</th>
						<th>REFERNAME</th>
						<th>Actions</th>
                    </tr>
					</thead>
                    <?php foreach($refer as $R){ ?>
                    <tr>
						<td><?php echo $R['REFERID']; ?></td>
						<td><?php echo $R['DEPARTMENTID']; ?></td>
						<td><?php echo $R['REFERNAME']; ?></td>
						<td>
                            <a href="<?php echo site_url('refer/edit/'.$R['REFERID']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('refer/remove/'.$R['REFERID']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
