<div class="container box">
	<div class="table-responsive">
		<div class="row">
			<div class="col-md-12">
				<div class="box">
					<div class="box-header">
						<div class="box-title">
							<a href="<?php echo site_url('status/add'); ?>" class="btn btn-success btn-lg"><i
									class="fa fa-plus" style="margin:5px"></i>ADD STATUS</a>
						</div>
					</div>
					<div class="box-body">
						<table id="example2" class="table table-striped table-bordered">
							<thead>
								<tr>
									<th><p>STATUS ID</p> (รหัสสถานะ)</th>
									<th><p>STATUS NAME</p> (ชื่อสถานะ)</th>
									<th>Actions</th>
								</tr>
							</thead>
							<?php foreach($status as $S){ ?>
							<tr>
								<td><?php echo $S['STATUS_ID']; ?></td>
								<td><?php echo $S['STATUS_NAME']; ?></td>
								<td>
									<a href="<?php echo site_url('status/edit/'.$S['STATUS_ID']); ?>"
										class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a>
									<a href="<?php echo site_url('status/remove/'.$S['STATUS_ID']); ?>"
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
