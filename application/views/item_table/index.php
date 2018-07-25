<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Item Table Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('item_table/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>ITEM UID</th>
						<th>ITEM SERIAL</th>
						<th>ITEM NAME</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($item_table as $i){ ?>
                    <tr>
						<td><?php echo $i['ITEM_UID']; ?></td>
						<td><?php echo $i['ITEM_SERIAL']; ?></td>
						<td><?php echo $i['ITEM_NAME']; ?></td>
						<td>
                            <a href="<?php echo site_url('item_table/edit/'.$i['']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('item_table/remove/'.$i['']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
