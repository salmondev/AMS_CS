<div class="container box">
	<div class="table-responsive">
		<div class="row">
			<div class="col-md-12">
				<div class="box">
					<div class="box-header">

						<div class="box-title">
							<a href="<?php echo site_url('history_asset_recent/add'); ?>"
								class="btn btn-success btn-lg"><i class="fa fa-plus" style="margin:5px"></i>ADD DATA</a>
							<a href="<?php echo site_url('history_asset_recent/index1/export_history'); ?>"
								target="_blank" class="btn btn-info btn-lg"><i class="fa fa-download"
									style="margin:5px"></i>EXPORT
								FILE</a>
						</div>
					</div>
					<div class="box-body">
						<table id="example2" class="table table-striped table-bordered">
							<thead>
								<tr>
									<th><p>HISTORY ASSETID</p> (รหัสครุภัณฑ์)</th>
									<th><p>HISTORY REFERID</p> (ผู้รับผิดชอบ)</th>
									<th><p>HISTORY BUILDING ID</p> (รหัสอาคาร)</th>
									<th><p>HISTORY FLOOR ID</p> (รหัสชั้น)</th>
									<th><p>HISTORY DAY</p> (วัน)</th>
									<th><p>HISTORY MONTH</p> (เดือน)</th>
									<th><p>HISTORY YEAR</p> (ปี)</th>
									<th><p>HISTORY HOUR</p> (ชั่วโมง)</th>
									<th><p>HISTORY MINUTE</p> (นาที</th>
									<th><p>HISTORY ASSET NAME</p> (ชื่อครุภัณฑ์)</th>
									<th><p>HISTORY RECEIVEDATE</p> (วันที่นำเข้า)</th>
									<th><p>HISTORY SPEC</p> (รายละเอียด)</th>
									<th><p>HISTORY UNITNAME</p> (หน่วย)</th>
									<th><p>HISTORY STATUS NAME</p> (สถานะ)</th>
									<th><p>HISTORY REFERNAME</p> (ชื่อผู้รับผิดชอบ)</th>
									<th><p>HISTORY BUILDING NAME</p> (ชื่ออาคาร)</th>
									<th><p>HISTORY ROOM ID</p> (รหัสห้อง)</th>
									<th><p>HISTORY USERNAME</p> (ชื่อผู้ตรวจสอบ)</th>
									<th><p>HISTORY NOTE</p> (บันทึกย่อ)</th>
									<th>Actions</th>
								</tr>
							</thead>

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
								<td><?php echo $H['HISTORY_NOTE']; ?></td>
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
