<div class="row">
	<div class="col-md-12">
		<div class="box">
			<div class="box-header">
				<div class="box-title">
					<a href="<?php echo site_url('asset/add'); ?>" class="btn btn-success btn-lg">ADD ASSET</a>
				</div>
			</div>
			<div class="box-body">
				<table id="example2" class="table table-striped">
					<thead>
						<tr>
							<th>ASSETID</th>
							<th>REFERID</th>
							<th>ASSETNAME</th>
							<th>RECEIVEDATE</th>
							<th>SPEC</th>
							<th>UNITNAME</th>
							<th>Options</th>
						</tr>
					</thead>
					<?php foreach($asset as $A){ ?>
					<tr>
						<td>
							<?php echo $A['ASSETID']; ?>
						</td>
						<td>
							<?php echo $A['REFERID']; ?>
						</td>
						<td>
							<?php echo $A['ASSETNAME']; ?>
						</td>
						<td>
							<?php echo $A['RECEIVEDATE']; ?>
						</td>
						<td>
							<?php echo $A['SPEC']; ?>
						</td>
						<td>
							<?php echo $A['UNITNAME']; ?>
						</td>
						<td>
							<a href="<?php echo site_url('asset/edit/'.$A['ASSETID']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span>
								Edit</a>
							<a href="<?php echo site_url('asset/remove/'.$A['ASSETID']); ?>" class="btn btn-danger btn-xs" onclick="return confirm('Confirm to delete record?')"><span class="fa fa-trash"></span>
								Delete</a>
						</td>
					</tr>
					<?php } ?>
				</table>
			</div>
		</div>
	</div>
</div>
