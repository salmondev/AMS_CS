<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Map Table Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('map_table/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>MAP RID</th>
						<th>MAP IMG</th>
						<th>MAP STATUS</th>
						<th>MAP NAME</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($map_table as $m){ ?>
                    <tr>
						<td><?php echo $m['MAP_RID']; ?></td>
						<td><?php echo $m['MAP_IMG']; ?></td>
						<td><?php echo $m['MAP_STATUS']; ?></td>
						<td><?php echo $m['MAP_NAME']; ?></td>
						<td>
                            <a href="<?php echo site_url('map_table/edit/'.$m['MAP_RID']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('map_table/remove/'.$m['MAP_RID']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
