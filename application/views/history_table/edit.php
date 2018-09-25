<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">History Table Edit</h3>
            </div>
			<?php echo form_open('history_table/edit/'.$history_table['HISTORY_RID']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="HISTORY_owner_uid" class="control-label">HISTORY OWNER UID</label>
						<div class="form-group">
							<input type="text" name="HISTORY_owner_uid" value="<?php echo ($this->input->post('HISTORY_owner_uid') ? $this->input->post('HISTORY_owner_uid') : $history_table['HISTORY_owner_uid']); ?>" class="form-control" id="HISTORY_owner_uid" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="HISTORY_BUILDING_LAT" class="control-label">HISTORY BUILDING LAT</label>
						<div class="form-group">
							<input type="text" name="HISTORY_BUILDING_LAT" value="<?php echo ($this->input->post('HISTORY_BUILDING_LAT') ? $this->input->post('HISTORY_BUILDING_LAT') : $history_table['HISTORY_BUILDING_LAT']); ?>" class="form-control" id="HISTORY_BUILDING_LAT" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="HISTORY_BUILDING_LONG" class="control-label">HISTORY BUILDING LONG</label>
						<div class="form-group">
							<input type="text" name="HISTORY_BUILDING_LONG" value="<?php echo ($this->input->post('HISTORY_BUILDING_LONG') ? $this->input->post('HISTORY_BUILDING_LONG') : $history_table['HISTORY_BUILDING_LONG']); ?>" class="form-control" id="HISTORY_BUILDING_LONG" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="HISTORY_FLOOR" class="control-label">HISTORY FLOOR</label>
						<div class="form-group">
							<input type="text" name="HISTORY_FLOOR" value="<?php echo ($this->input->post('HISTORY_FLOOR') ? $this->input->post('HISTORY_FLOOR') : $history_table['HISTORY_FLOOR']); ?>" class="form-control" id="HISTORY_FLOOR" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="HISTORY_ROOM" class="control-label">HISTORY ROOM</label>
						<div class="form-group">
							<input type="text" name="HISTORY_ROOM" value="<?php echo ($this->input->post('HISTORY_ROOM') ? $this->input->post('HISTORY_ROOM') : $history_table['HISTORY_ROOM']); ?>" class="form-control" id="HISTORY_ROOM" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="HISTORY_HOUR" class="control-label">HISTORY HOUR</label>
						<div class="form-group">
							<input type="text" name="HISTORY_HOUR" value="<?php echo ($this->input->post('HISTORY_HOUR') ? $this->input->post('HISTORY_HOUR') : $history_table['HISTORY_HOUR']); ?>" class="form-control" id="HISTORY_HOUR" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="HISTORY_MINUTE" class="control-label">HISTORY MINUTE</label>
						<div class="form-group">
							<input type="text" name="HISTORY_MINUTE" value="<?php echo ($this->input->post('HISTORY_MINUTE') ? $this->input->post('HISTORY_MINUTE') : $history_table['HISTORY_MINUTE']); ?>" class="form-control" id="HISTORY_MINUTE" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="HISTORY_DAY" class="control-label">HISTORY DAY</label>
						<div class="form-group">
							<input type="text" name="HISTORY_DAY" value="<?php echo ($this->input->post('HISTORY_DAY') ? $this->input->post('HISTORY_DAY') : $history_table['HISTORY_DAY']); ?>" class="form-control" id="HISTORY_DAY" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="HISTORY_MONTH" class="control-label">HISTORY MONTH</label>
						<div class="form-group">
							<input type="text" name="HISTORY_MONTH" value="<?php echo ($this->input->post('HISTORY_MONTH') ? $this->input->post('HISTORY_MONTH') : $history_table['HISTORY_MONTH']); ?>" class="form-control" id="HISTORY_MONTH" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="HISTORY_YEAR" class="control-label">HISTORY YEAR</label>
						<div class="form-group">
							<input type="text" name="HISTORY_YEAR" value="<?php echo ($this->input->post('HISTORY_YEAR') ? $this->input->post('HISTORY_YEAR') : $history_table['HISTORY_YEAR']); ?>" class="form-control" id="HISTORY_YEAR" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="HISTORY_POS_X" class="control-label">HISTORY POS X</label>
						<div class="form-group">
							<input type="text" name="HISTORY_POS_X" value="<?php echo ($this->input->post('HISTORY_POS_X') ? $this->input->post('HISTORY_POS_X') : $history_table['HISTORY_POS_X']); ?>" class="form-control" id="HISTORY_POS_X" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="HISTORY_POS_Y" class="control-label">HISTORY POS Y</label>
						<div class="form-group">
							<input type="text" name="HISTORY_POS_Y" value="<?php echo ($this->input->post('HISTORY_POS_Y') ? $this->input->post('HISTORY_POS_Y') : $history_table['HISTORY_POS_Y']); ?>" class="form-control" id="HISTORY_POS_Y" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="MAP_RID" class="control-label">MAP RID</label>
						<div class="form-group">
							<input type="text" name="MAP_RID" value="<?php echo ($this->input->post('MAP_RID') ? $this->input->post('MAP_RID') : $history_table['MAP_RID']); ?>" class="form-control" id="MAP_RID" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="HISTORY_item_uid" class="control-label">HISTORY ITEM UID</label>
						<div class="form-group">
							<textarea name="HISTORY_item_uid" class="form-control" id="HISTORY_item_uid"><?php echo ($this->input->post('HISTORY_item_uid') ? $this->input->post('HISTORY_item_uid') : $history_table['HISTORY_item_uid']); ?></textarea>
						</div>
					</div>
					<div class="col-md-6">
						<label for="HISTORY_status_name" class="control-label">HISTORY STATUS NAME</label>
						<div class="form-group">
							<textarea name="HISTORY_status_name" class="form-control" id="HISTORY_status_name"><?php echo ($this->input->post('HISTORY_status_name') ? $this->input->post('HISTORY_status_name') : $history_table['HISTORY_status_name']); ?></textarea>
						</div>
					</div>
					<div class="col-md-6">
						<label for="HISTORY_BUILDING_NAME" class="control-label">HISTORY BUILDING NAME</label>
						<div class="form-group">
							<textarea name="HISTORY_BUILDING_NAME" class="form-control" id="HISTORY_BUILDING_NAME"><?php echo ($this->input->post('HISTORY_BUILDING_NAME') ? $this->input->post('HISTORY_BUILDING_NAME') : $history_table['HISTORY_BUILDING_NAME']); ?></textarea>
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