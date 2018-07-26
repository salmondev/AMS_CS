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
                <table id="example2" class="table table-striped">
                <thead>
                    <tr>
						<th>ROOM RID</th>
						<th>ROOM NUMBER</th>
						<th>FLOOR RID</th>
						<th>Actions</th>
                    </tr>
                    </thead>
                    <?php foreach($room_table as $r){ ?>
                    <tr>
						<td><?php echo $r['ROOM_RID']; ?></td>
						<td><?php echo $r['ROOM_NUMBER']; ?></td>
						<td><?php echo $r['FLOOR_RID']; ?></td>
						<td>
                            <a href="<?php echo site_url('room_table/edit/'.$r['ROOM_RID']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('room_table/remove/'.$r['ROOM_RID']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
