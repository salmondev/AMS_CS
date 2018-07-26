<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
            <div class="box-title">
                    <a href="<?php echo site_url('tb_item/add'); ?>" class="btn btn-success btn-lg">ADD ITEM</a>
                    </br></br> 
                    <p id="xportxlsx" class="xport"><input type="submit" value="EXPORT" class="btn btn-primary" onclick="doit('xlsx');"></p>

                </div>
            </div>
            <div class="box-body">
                <table id="example2"class="table table-striped">
                <thead>
                    <tr>
						<th>MAP RID</th>
						<th>MAP IMG</th>
						<th>MAP STATUS</th>
						<th>MAP NAME</th>
						<th>Actions</th>
                    </tr>
                    </thead>
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
