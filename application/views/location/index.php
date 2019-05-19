<div class="container box">
	<div class="table-responsive">
		<div class="row">
			<div class="col-md-12">
				<div class="box">
					<div class="box-header">
						<div class="box-title">
							<a href="<?php echo site_url('location/add'); ?>" class="btn btn-success btn-lg"><i
									class="fa fa-plus" style="margin:5px"></i>ADD LOCATION</a>
						</div>
					</div>
					<div class="box-body">
						<table id="example2" class="table table-striped table-bordered">
							<thead>
								<tr>
									<th><p>LOCATION ID</p>(รหัสสถานที่)</th>
									<th><p>LOCATION BARCODE</p>  (รหัสบาร์โค้ดสถานที่)</th>
									<th><p>DEPARTMENTID</p> (รหัสหน่วยงาน)</th>
									<th><p>LOCATION BUILDING ID</p> (รหัสอาคาร)</th>
									<th><p>LOCATION BUILDING NAME</p> (ชื่ออาคาร)</th>
									<th><p>LOCATION FLOOR ID</p> (รหัสชั้น)</th>
									<th><p>LOCATION ROOM ID</p> (รหัสห้อง)</th>
									<th>Actions</th>
								</tr>
							</thead>
							<?php foreach($location as $L){ ?>
							<tr>
								<td><?php echo $L['LOCATION_ID']; ?></td>
								<td><?php echo $L['LOCATION_BARCODE']; ?></td>
								<td><?php echo $L['DEPARTMENTID']; ?></td>
								<td><?php echo $L['LOCATION_BUILDING_ID']; ?></td>
								<td><?php echo $L['LOCATION_BUILDING_NAME']; ?></td>
								<td><?php echo $L['LOCATION_FLOOR_ID']; ?></td>
								<td><?php echo $L['LOCATION_ROOM_ID']; ?></td>
								<td>
									<a href="<?php echo site_url('location/edit/'.$L['LOCATION_ID']); ?>"
										class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a>
									<a href="<?php echo site_url('location/remove/'.$L['LOCATION_ID']); ?>"
										class="btn btn-danger btn-xs"
										onclick="return confirm('Confirm to delete record?')"><span
											class="fa fa-trash"></span> Delete</a>
								</td>
							</tr>
							<?php } ?>
						</table>

					</div>
				</div>
			</div>
		</div>
	</div>
</div>
