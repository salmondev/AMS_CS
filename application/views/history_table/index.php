<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
			<div class="box-title">
                    <a href="<?php echo site_url('history_table/add'); ?>" class="btn btn-success btn-lg">ADD ITEM</a>
                    </br></br> 
                    <p id="xportxlsx" class="xport"><input type="submit" value="EXPORT" class="btn btn-primary" onclick="doit('xlsx');"></p>

                </div>
            </div>
            <div class="box-body">
                <table id="example2" class="table table-striped">
				<thead>
                    <tr>
						<th>HISTORY RID</th>
						<th>HISTORY OWNER UID</th>
						<th>HISTORY BUILDING LAT</th>
						<th>HISTORY BUILDING LONG</th>
						<th>HISTORY FLOOR</th>
						<th>HISTORY ROOM</th>
						<th>HISTORY HOUR</th>
						<th>HISTORY MINUTE</th>
						<th>HISTORY DAY</th>
						<th>HISTORY MONTH</th>
						<th>HISTORY YEAR</th>
						<th>HISTORY POS X</th>
						<th>HISTORY POS Y</th>
						<th>MAP RID</th>
						<th>HISTORY ITEM UID</th>
						<th>HISTORY STATUS NAME</th>
						<th>HISTORY BUILDING NAME</th>
						<th>Options</th>
                    </tr>
					</thead>
                    <?php foreach($history_table as $h){ ?>
                    <tr>
						<td><?php echo $h['HISTORY_RID']; ?></td>
						<td><?php echo $h['HISTORY_OWNER_UID']; ?></td>
						<td><?php echo $h['HISTORY_BUILDING_LAT']; ?></td>
						<td><?php echo $h['HISTORY_BUILDING_LONG']; ?></td>
						<td><?php echo $h['HISTORY_FLOOR']; ?></td>
						<td><?php echo $h['HISTORY_ROOM']; ?></td>
						<td><?php echo $h['HISTORY_HOUR']; ?></td>
						<td><?php echo $h['HISTORY_MINUTE']; ?></td>
						<td><?php echo $h['HISTORY_DAY']; ?></td>
						<td><?php echo $h['HISTORY_MONTH']; ?></td>
						<td><?php echo $h['HISTORY_YEAR']; ?></td>
						<td><?php echo $h['HISTORY_POS_X']; ?></td>
						<td><?php echo $h['HISTORY_POS_Y']; ?></td>
						<td><?php echo $h['MAP_RID']; ?></td>
						<td><?php echo $h['HISTORY_ITEM_UID']; ?></td>
						<td><?php echo $h['HISTORY_STATUS_NAME']; ?></td>
						<td><?php echo $h['HISTORY_BUILDING_NAME']; ?></td>
						<td>
                            <a href="<?php echo site_url('history_table/edit/'.$h['HISTORY_RID']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('history_table/remove/'.$h['HISTORY_RID']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
