<div class="container box">
	<div class="table-responsive">
		<div class="row">
			<div class="col-md-12">
				<div class="box">
					<div class="box-header">

						<div class="box-title">
							<a href="<?php echo site_url('history_asset_recent/add'); ?>"
								class="btn btn-success btn-lg"><i class="fa fa-plus" style="margin:5px"></i>ADD DATA</a>
							<a href="<?php echo site_url('history_asset_recent/index1/export_history'); ?>" target="_blank"
								class="btn btn-info btn-lg"><i class="fa fa-download" style="margin:5px"></i>EXPORT
								FILE</a>

						</div>
					</div>
					<div class="box-body">
						<table class="table table-striped table-bordered">
							<tr>
								<th>HISTORY ASSETID</th>
								<th>HISTORY REFERID</th>
								<th>HISTORY BUILDING ID</th>
								<th>HISTORY FLOOR ID</th>
								<th>HISTORY DAY</th>
								<th>HISTORY MONTH</th>
								<th>HISTORY YEAR</th>
								<th>HISTORY HOUR</th>
								<th>HISTORY MINUTE</th>
								<th>HISTORY ASSET NAME</th>
								<th>HISTORY RECEIVEDATE</th>
								<th>HISTORY SPEC</th>
								<th>HISTORY UNITNAME</th>
								<th>HISTORY STATUS NAME</th>
								<th>HISTORY REFERNAME</th>
								<th>HISTORY BUILDING NAME</th>
								<th>HISTORY ROOM ID</th>
								<th>HISTORY USERNAME</th>
								<th>Actions</th>
							</tr>
							<?php foreach($history_asset_recent as $H){ ?>
							<tr>
								<td><?php echo $H['HISTORY_ASSETID']; ?></td>
								<td><?php echo $H['HISTORY_REFERID']; ?></td>
								<td><?php echo $H['HISTORY_BUILDING_ID']; ?></td>
								<td><?php echo $H['HISTORY_FLOOR_ID']; ?></td>
								<td><?php echo $H['HISTORY_DAY']; ?></td>
								<td><?php echo $H['HISTORY_MONTH']; ?></td>
								<td><?php echo $H['HISTORY_YEAR']; ?></td>
								<td><?php echo $H['HISTORY_HOUR']; ?></td>
								<td><?php echo $H['HISTORY_MINUTE']; ?></td>
								<td><?php echo $H['HISTORY_ASSET_NAME']; ?></td>
								<td><?php echo $H['HISTORY_RECEIVEDATE']; ?></td>
								<td><?php echo $H['HISTORY_SPEC']; ?></td>
								<td><?php echo $H['HISTORY_UNITNAME']; ?></td>
								<td><?php echo $H['HISTORY_STATUS_NAME']; ?></td>
								<td><?php echo $H['HISTORY_REFERNAME']; ?></td>
								<td><?php echo $H['HISTORY_BUILDING_NAME']; ?></td>
								<td><?php echo $H['HISTORY_ROOM_ID']; ?></td>
								<td><?php echo $H['HISTORY_USERNAME']; ?></td>
								<td>
									<a href="<?php echo site_url('history_asset_recent/edit/'.$H['HISTORY_ASSETID']); ?>"
										class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a>
									<a href="<?php echo site_url('history_asset_recent/remove/'.$H['HISTORY_ASSETID']); ?>"
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
