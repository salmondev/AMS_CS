<div class="row">
    <div class="col-md-12">
        <div class="box">////////////
            <div class="box-header">
                <h3 class="box-title">Tb Item Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('tb_item/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>ID</th>
						<th>Name</th>
						<th>Date</th>
						<th>Detail</th>
						<th>Options</th>
                    </tr>
                    <?php foreach($tb_item as $t){ ?>
                    <tr>
						<td><?php echo $t['id']; ?></td>
						<td><?php echo $t['name']; ?></td>
						<td><?php echo $t['date']; ?></td>
						<td><?php echo $t['detail']; ?></td>
						<td>
                            <a href="<?php echo site_url('tb_item/edit/'.$t['id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('tb_item/remove/'.$t['id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
