<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Asset Verify Edit</h3>
            </div>
			<?php echo form_open('asset_verify/edit/'.$asset_verify['ASSET_VERIFY_RID']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="ASSET_VERIFY_ID" class="control-label">ASSET VERIFY ID</label>
						<div class="form-group">
							<input type="text" name="ASSET_VERIFY_ID" value="<?php echo ($this->input->post('ASSET_VERIFY_ID') ? $this->input->post('ASSET_VERIFY_ID') : $asset_verify['ASSET_VERIFY_ID']); ?>" class="form-control" id="ASSET_VERIFY_ID" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="ASSET_VERIFY_STATUS_NAME" class="control-label">ASSET VERIFY STATUS NAME</label>
						<div class="form-group">
							<input type="text" name="ASSET_VERIFY_STATUS_NAME" value="<?php echo ($this->input->post('ASSET_VERIFY_STATUS_NAME') ? $this->input->post('ASSET_VERIFY_STATUS_NAME') : $asset_verify['ASSET_VERIFY_STATUS_NAME']); ?>" class="form-control" id="ASSET_VERIFY_STATUS_NAME" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="ASSET_VERIFY_REFERID" class="control-label">ASSET VERIFY REFERID</label>
						<div class="form-group">
							<input type="text" name="ASSET_VERIFY_REFERID" value="<?php echo ($this->input->post('ASSET_VERIFY_REFERID') ? $this->input->post('ASSET_VERIFY_REFERID') : $asset_verify['ASSET_VERIFY_REFERID']); ?>" class="form-control" id="ASSET_VERIFY_REFERID" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="ASSET_VERIFY_REFERNAME" class="control-label">ASSET VERIFY REFERNAME</label>
						<div class="form-group">
							<input type="text" name="ASSET_VERIFY_REFERNAME" value="<?php echo ($this->input->post('ASSET_VERIFY_REFERNAME') ? $this->input->post('ASSET_VERIFY_REFERNAME') : $asset_verify['ASSET_VERIFY_REFERNAME']); ?>" class="form-control" id="ASSET_VERIFY_REFERNAME" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="ASSET_VERIFY_BUILDING_ID" class="control-label">ASSET VERIFY BUILDING ID</label>
						<div class="form-group">
							<input type="text" name="ASSET_VERIFY_BUILDING_ID" value="<?php echo ($this->input->post('ASSET_VERIFY_BUILDING_ID') ? $this->input->post('ASSET_VERIFY_BUILDING_ID') : $asset_verify['ASSET_VERIFY_BUILDING_ID']); ?>" class="form-control" id="ASSET_VERIFY_BUILDING_ID" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="ASSET_VERIFY_BUILDING_NAME" class="control-label">ASSET VERIFY BUILDING NAME</label>
						<div class="form-group">
							<input type="text" name="ASSET_VERIFY_BUILDING_NAME" value="<?php echo ($this->input->post('ASSET_VERIFY_BUILDING_NAME') ? $this->input->post('ASSET_VERIFY_BUILDING_NAME') : $asset_verify['ASSET_VERIFY_BUILDING_NAME']); ?>" class="form-control" id="ASSET_VERIFY_BUILDING_NAME" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="ASSET_VERIFY_FLOOR_ID" class="control-label">ASSET VERIFY FLOOR ID</label>
						<div class="form-group">
							<input type="text" name="ASSET_VERIFY_FLOOR_ID" value="<?php echo ($this->input->post('ASSET_VERIFY_FLOOR_ID') ? $this->input->post('ASSET_VERIFY_FLOOR_ID') : $asset_verify['ASSET_VERIFY_FLOOR_ID']); ?>" class="form-control" id="ASSET_VERIFY_FLOOR_ID" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="ASSET_VERIFY_ROOM_ID" class="control-label">ASSET VERIFY ROOM ID</label>
						<div class="form-group">
							<input type="text" name="ASSET_VERIFY_ROOM_ID" value="<?php echo ($this->input->post('ASSET_VERIFY_ROOM_ID') ? $this->input->post('ASSET_VERIFY_ROOM_ID') : $asset_verify['ASSET_VERIFY_ROOM_ID']); ?>" class="form-control" id="ASSET_VERIFY_ROOM_ID" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="ASSET_VERIFY_DAY" class="control-label">ASSET VERIFY DAY</label>
						<div class="form-group">
							<input type="text" name="ASSET_VERIFY_DAY" value="<?php echo ($this->input->post('ASSET_VERIFY_DAY') ? $this->input->post('ASSET_VERIFY_DAY') : $asset_verify['ASSET_VERIFY_DAY']); ?>" class="form-control" id="ASSET_VERIFY_DAY" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="ASSET_VERIFY_MONTH" class="control-label">ASSET VERIFY MONTH</label>
						<div class="form-group">
							<input type="text" name="ASSET_VERIFY_MONTH" value="<?php echo ($this->input->post('ASSET_VERIFY_MONTH') ? $this->input->post('ASSET_VERIFY_MONTH') : $asset_verify['ASSET_VERIFY_MONTH']); ?>" class="form-control" id="ASSET_VERIFY_MONTH" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="ASSET_VERIFY_YEAR" class="control-label">ASSET VERIFY YEAR</label>
						<div class="form-group">
							<input type="text" name="ASSET_VERIFY_YEAR" value="<?php echo ($this->input->post('ASSET_VERIFY_YEAR') ? $this->input->post('ASSET_VERIFY_YEAR') : $asset_verify['ASSET_VERIFY_YEAR']); ?>" class="form-control" id="ASSET_VERIFY_YEAR" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="ASSET_VERIFY_HOUR" class="control-label">ASSET VERIFY HOUR</label>
						<div class="form-group">
							<input type="text" name="ASSET_VERIFY_HOUR" value="<?php echo ($this->input->post('ASSET_VERIFY_HOUR') ? $this->input->post('ASSET_VERIFY_HOUR') : $asset_verify['ASSET_VERIFY_HOUR']); ?>" class="form-control" id="ASSET_VERIFY_HOUR" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="ASSET_VERIFY_MINUTE" class="control-label">ASSET VERIFY MINUTE</label>
						<div class="form-group">
							<input type="text" name="ASSET_VERIFY_MINUTE" value="<?php echo ($this->input->post('ASSET_VERIFY_MINUTE') ? $this->input->post('ASSET_VERIFY_MINUTE') : $asset_verify['ASSET_VERIFY_MINUTE']); ?>" class="form-control" id="ASSET_VERIFY_MINUTE" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="ASSET_VERIFY_USER_ID" class="control-label">ASSET VERIFY USER ID</label>
						<div class="form-group">
							<input type="text" name="ASSET_VERIFY_USER_ID" value="<?php echo ($this->input->post('ASSET_VERIFY_USER_ID') ? $this->input->post('ASSET_VERIFY_USER_ID') : $asset_verify['ASSET_VERIFY_USER_ID']); ?>" class="form-control" id="ASSET_VERIFY_USER_ID" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="ASSET_VERIFY_COMMITTEE_ID" class="control-label">ASSET VERIFY COMMITTEE ID</label>
						<div class="form-group">
							<input type="text" name="ASSET_VERIFY_COMMITTEE_ID" value="<?php echo ($this->input->post('ASSET_VERIFY_COMMITTEE_ID') ? $this->input->post('ASSET_VERIFY_COMMITTEE_ID') : $asset_verify['ASSET_VERIFY_COMMITTEE_ID']); ?>" class="form-control" id="ASSET_VERIFY_COMMITTEE_ID" />
						</div>
					</div>
				</div>
			</div>
			<div class="box-footer">
			<button type="submit" class="btn btn-success">
            		<i class="fa fa-save"></i> Save
            	</button>
				<button  type="button" onclick="goBack();"class="btn btn-danger">
            		<i class="fa fa-times"></i> Back
            	</button>
	        </div>				
			<?php echo form_close(); ?>
		</div>
    </div>
</div>
