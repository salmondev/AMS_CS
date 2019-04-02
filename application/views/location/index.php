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
									<th>LOCATION ID</th>
									<th>DEPARTMENTID</th>
									<th>LOCATION BUILDING ID</th>
									<th>LOCATION BUILDING NAME</th>
									<th>LOCATION FLOOR ID</th>
									<th>LOCATION ROOM ID</th>
									<th>Actions</th>
								</tr>
							</thead>
							<?php foreach($location as $L){ ?>
							<tr>
								<td><?php echo $L['LOCATION_ID']; ?></td>
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
