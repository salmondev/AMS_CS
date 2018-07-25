<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Building Table Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('building_table/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>BUILDING RID</th>
						<th>BUILDING LAT</th>
						<th>BUILDING LONG</th>
						<th>BUILDING NAME</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($building_table as $b){ ?>
                    <tr>
						<td><?php echo $b['BUILDING_RID']; ?></td>
						<td><?php echo $b['BUILDING_LAT']; ?></td>
						<td><?php echo $b['BUILDING_LONG']; ?></td>
						<td><?php echo $b['BUILDING_NAME']; ?></td>
						<td>
                            <a href="<?php echo site_url('building_table/edit/'.$b['BUILDING_RID']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('building_table/remove/'.$b['BUILDING_RID']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
