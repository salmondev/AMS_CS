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
						<td><?php echo $h['history_rid']; ?></td>
						<td><?php echo $h['history_owner_uid']; ?></td>
						<td><?php echo $h['history_building_lat']; ?></td>
						<td><?php echo $h['history_building_long']; ?></td>
						<td><?php echo $h['history_floor']; ?></td>
						<td><?php echo $h['history_room']; ?></td>
						<td><?php echo $h['history_hour']; ?></td>
						<td><?php echo $h['history_minute']; ?></td>
						<td><?php echo $h['history_day']; ?></td>
						<td><?php echo $h['history_month']; ?></td>
						<td><?php echo $h['history_year']; ?></td>
						<td><?php echo $h['history_pos_x']; ?></td>
						<td><?php echo $h['history_pos_y']; ?></td>
						<td><?php echo $h['map_rid']; ?></td>
						<td><?php echo $h['history_item_uid']; ?></td>
						<td><?php echo $h['history_status_name']; ?></td>
						<td><?php echo $h['history_building_name']; ?></td>
						<td>
                            <a href="<?php echo site_url('history_table/edit/'.$h['history_rid']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('history_table/remove/'.$h['history_rid']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
