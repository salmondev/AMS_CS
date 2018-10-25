<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
            <div class="box-title">
                    <a href="<?php echo site_url('building_table/add'); ?>" class="btn btn-success btn-lg">ADD ITEM</a>
                    </br></br> 
                    <p id="xportxlsx" class="xport"><input type="submit" value="EXPORT" class="btn btn-primary" onclick="doit('xlsx');"></p>

                </div>
            </div>
            <div class="box-body">
                <table id="example2" class="table table-striped">
                <thead>
                    <tr>
						<th>BUILDING RID</th>
						<th>BUILDING LAT</th>
						<th>BUILDING LONG</th>
						<th>BUILDING NAME</th>
						<th>Options</th>
                    </tr>
                    </thead>
                    <?php foreach($building_table as $b){ ?>
                    <tr>
						<td><?php echo $b['building_rid']; ?></td>
						<td><?php echo $b['building_lat']; ?></td>
						<td><?php echo $b['building_long']; ?></td>
						<td><?php echo $b['building_name']; ?></td>
						<td>
                            <a href="<?php echo site_url('building_table/edit/'.$b['building_rid']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('building_table/remove/'.$b['building_rid']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
