<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">History Asset Recent Edit</h3>
            </div>
			<?php echo form_open('history_asset_recent/edit/'.$history_asset_recent['HISTORY_ASSETID']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="HISTORY_REFERID" class="control-label">HISTORY REFERID</label>
						<div class="form-group">
							<input type="text" name="HISTORY_REFERID" value="<?php echo ($this->input->post('HISTORY_REFERID') ? $this->input->post('HISTORY_REFERID') : $history_asset_recent['HISTORY_REFERID']); ?>" class="form-control" id="HISTORY_REFERID" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="HISTORY_BUILDING_ID" class="control-label">HISTORY BUILDING ID</label>
						<div class="form-group">
							<input type="text" name="HISTORY_BUILDING_ID" value="<?php echo ($this->input->post('HISTORY_BUILDING_ID') ? $this->input->post('HISTORY_BUILDING_ID') : $history_asset_recent['HISTORY_BUILDING_ID']); ?>" class="form-control" id="HISTORY_BUILDING_ID" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="HISTORY_FLOOR_ID" class="control-label">HISTORY FLOOR ID</label>
						<div class="form-group">
							<input type="text" name="HISTORY_FLOOR_ID" value="<?php echo ($this->input->post('HISTORY_FLOOR_ID') ? $this->input->post('HISTORY_FLOOR_ID') : $history_asset_recent['HISTORY_FLOOR_ID']); ?>" class="form-control" id="HISTORY_FLOOR_ID" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="HISTORY_DAY" class="control-label">HISTORY DAY</label>
						<div class="form-group">
							<input type="text" name="HISTORY_DAY" value="<?php echo ($this->input->post('HISTORY_DAY') ? $this->input->post('HISTORY_DAY') : $history_asset_recent['HISTORY_DAY']); ?>" class="form-control" id="HISTORY_DAY" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="HISTORY_MONTH" class="control-label">HISTORY MONTH</label>
						<div class="form-group">
							<input type="text" name="HISTORY_MONTH" value="<?php echo ($this->input->post('HISTORY_MONTH') ? $this->input->post('HISTORY_MONTH') : $history_asset_recent['HISTORY_MONTH']); ?>" class="form-control" id="HISTORY_MONTH" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="HISTORY_YEAR" class="control-label">HISTORY YEAR</label>
						<div class="form-group">
							<input type="text" name="HISTORY_YEAR" value="<?php echo ($this->input->post('HISTORY_YEAR') ? $this->input->post('HISTORY_YEAR') : $history_asset_recent['HISTORY_YEAR']); ?>" class="form-control" id="HISTORY_YEAR" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="HISTORY_HOUR" class="control-label">HISTORY HOUR</label>
						<div class="form-group">
							<input type="text" name="HISTORY_HOUR" value="<?php echo ($this->input->post('HISTORY_HOUR') ? $this->input->post('HISTORY_HOUR') : $history_asset_recent['HISTORY_HOUR']); ?>" class="form-control" id="HISTORY_HOUR" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="HISTORY_MINUTE" class="control-label">HISTORY MINUTE</label>
						<div class="form-group">
							<input type="text" name="HISTORY_MINUTE" value="<?php echo ($this->input->post('HISTORY_MINUTE') ? $this->input->post('HISTORY_MINUTE') : $history_asset_recent['HISTORY_MINUTE']); ?>" class="form-control" id="HISTORY_MINUTE" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="HISTORY_ASSET_NAME" class="control-label">HISTORY ASSET NAME</label>
						<div class="form-group">
							<textarea name="HISTORY_ASSET_NAME" class="form-control" id="HISTORY_ASSET_NAME"><?php echo ($this->input->post('HISTORY_ASSET_NAME') ? $this->input->post('HISTORY_ASSET_NAME') : $history_asset_recent['HISTORY_ASSET_NAME']); ?></textarea>
						</div>
					</div>
					<div class="col-md-6">
						<label for="HISTORY_RECEIVEDATE" class="control-label">HISTORY RECEIVEDATE</label>
						<div class="form-group">
							<textarea name="HISTORY_RECEIVEDATE" class="form-control" id="HISTORY_RECEIVEDATE"><?php echo ($this->input->post('HISTORY_RECEIVEDATE') ? $this->input->post('HISTORY_RECEIVEDATE') : $history_asset_recent['HISTORY_RECEIVEDATE']); ?></textarea>
						</div>
					</div>
					<div class="col-md-6">
						<label for="HISTORY_SPEC" class="control-label">HISTORY SPEC</label>
						<div class="form-group">
							<textarea name="HISTORY_SPEC" class="form-control" id="HISTORY_SPEC"><?php echo ($this->input->post('HISTORY_SPEC') ? $this->input->post('HISTORY_SPEC') : $history_asset_recent['HISTORY_SPEC']); ?></textarea>
						</div>
					</div>
					<div class="col-md-6">
						<label for="HISTORY_UNITNAME" class="control-label">HISTORY UNITNAME</label>
						<div class="form-group">
							<textarea name="HISTORY_UNITNAME" class="form-control" id="HISTORY_UNITNAME"><?php echo ($this->input->post('HISTORY_UNITNAME') ? $this->input->post('HISTORY_UNITNAME') : $history_asset_recent['HISTORY_UNITNAME']); ?></textarea>
						</div>
					</div>
					<div class="col-md-6">
						<label for="HISTORY_STATUS_NAME" class="control-label">HISTORY STATUS NAME</label>
						<div class="form-group">
							<textarea name="HISTORY_STATUS_NAME" class="form-control" id="HISTORY_STATUS_NAME"><?php echo ($this->input->post('HISTORY_STATUS_NAME') ? $this->input->post('HISTORY_STATUS_NAME') : $history_asset_recent['HISTORY_STATUS_NAME']); ?></textarea>
						</div>
					</div>
					<div class="col-md-6">
						<label for="HISTORY_REFERNAME" class="control-label">HISTORY REFERNAME</label>
						<div class="form-group">
							<textarea name="HISTORY_REFERNAME" class="form-control" id="HISTORY_REFERNAME"><?php echo ($this->input->post('HISTORY_REFERNAME') ? $this->input->post('HISTORY_REFERNAME') : $history_asset_recent['HISTORY_REFERNAME']); ?></textarea>
						</div>
					</div>
					<div class="col-md-6">
						<label for="HISTORY_BUILDING_NAME" class="control-label">HISTORY BUILDING NAME</label>
						<div class="form-group">
							<textarea name="HISTORY_BUILDING_NAME" class="form-control" id="HISTORY_BUILDING_NAME"><?php echo ($this->input->post('HISTORY_BUILDING_NAME') ? $this->input->post('HISTORY_BUILDING_NAME') : $history_asset_recent['HISTORY_BUILDING_NAME']); ?></textarea>
						</div>
					</div>
					<div class="col-md-6">
						<label for="HISTORY_ROOM_ID" class="control-label">HISTORY ROOM ID</label>
						<div class="form-group">
							<textarea name="HISTORY_ROOM_ID" class="form-control" id="HISTORY_ROOM_ID"><?php echo ($this->input->post('HISTORY_ROOM_ID') ? $this->input->post('HISTORY_ROOM_ID') : $history_asset_recent['HISTORY_ROOM_ID']); ?></textarea>
						</div>
					</div>
					<div class="col-md-6">
						<label for="HISTORY_USERNAME" class="control-label">HISTORY USERNAME</label>
						<div class="form-group">
							<textarea name="HISTORY_USERNAME" class="form-control" id="HISTORY_USERNAME"><?php echo ($this->input->post('HISTORY_USERNAME') ? $this->input->post('HISTORY_USERNAME') : $history_asset_recent['HISTORY_USERNAME']); ?></textarea>
						</div>
					</div>
					<div class="col-md-6">
						<label for="HISTORY_NOTE" class="control-label">HISTORY NOTE</label>
						<div class="form-group">
							<textarea name="HISTORY_NOTE" class="form-control" id="HISTORY_NOTE"><?php echo ($this->input->post('HISTORY_NOTE') ? $this->input->post('HISTORY_NOTE') : $history_asset_recent['HISTORY_NOTE']); ?></textarea>
						</div>
					</div>
				</div>
			</div>
			<div class="box-footer">
            	<button type="submit" class="btn btn-success">
					<i class="fa fa-check"></i> Save
				</button>
	        </div>				
			<?php echo form_close(); ?>
		</div>
    </div>
</div>
