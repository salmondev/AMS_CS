<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">History Table Add</h3>
            </div>
            <?php echo form_open('history_table/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="history_owner_uid" class="control-label">HISTORY OWNER UID</label>
						<div class="form-group">
							<input type="text" name="history_owner_uid" value="<?php echo $this->input->post('history_owner_uid'); ?>" class="form-control" id="history_owner_uid" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="history_building_lat" class="control-label">HISTORY BUILDING LAT</label>
						<div class="form-group">
							<input type="text" name="history_building_lat" value="<?php echo $this->input->post('history_building_lat'); ?>" class="form-control" id="history_building_lat" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="history_building_long" class="control-label">HISTORY BUILDING LONG</label>
						<div class="form-group">
							<input type="text" name="history_building_long" value="<?php echo $this->input->post('history_building_long'); ?>" class="form-control" id="history_building_long" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="history_floor" class="control-label">HISTORY FLOOR</label>
						<div class="form-group">
							<input type="text" name="history_floor" value="<?php echo $this->input->post('history_floor'); ?>" class="form-control" id="history_floor" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="history_room" class="control-label">HISTORY ROOM</label>
						<div class="form-group">
							<input type="text" name="history_room" value="<?php echo $this->input->post('history_room'); ?>" class="form-control" id="history_room" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="history_hour" class="control-label">HISTORY HOUR</label>
						<div class="form-group">
							<input type="text" name="history_hour" value="<?php echo $this->input->post('history_hour'); ?>" class="form-control" id="history_hour" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="history_minute" class="control-label">HISTORY MINUTE</label>
						<div class="form-group">
							<input type="text" name="history_minute" value="<?php echo $this->input->post('history_minute'); ?>" class="form-control" id="history_minute" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="history_day" class="control-label">HISTORY DAY</label>
						<div class="form-group">
							<input type="text" name="history_day" value="<?php echo $this->input->post('history_day'); ?>" class="form-control" id="history_day" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="history_month" class="control-label">HISTORY MONTH</label>
						<div class="form-group">
							<input type="text" name="history_month" value="<?php echo $this->input->post('history_month'); ?>" class="form-control" id="history_month" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="history_year" class="control-label">HISTORY YEAR</label>
						<div class="form-group">
							<input type="text" name="history_year" value="<?php echo $this->input->post('history_year'); ?>" class="form-control" id="history_year" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="history_pos_x" class="control-label">HISTORY POS X</label>
						<div class="form-group">
							<input type="text" name="history_pos_x" value="<?php echo $this->input->post('history_pos_x'); ?>" class="form-control" id="history_pos_x" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="history_pos_y" class="control-label">HISTORY POS Y</label>
						<div class="form-group">
							<input type="text" name="history_pos_y" value="<?php echo $this->input->post('history_pos_y'); ?>" class="form-control" id="history_pos_y" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="map_rid" class="control-label">MAP RID</label>
						<div class="form-group">
							<input type="text" name="map_rid" value="<?php echo $this->input->post('map_rid'); ?>" class="form-control" id="map_rid" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="history_item_uid" class="control-label">HISTORY ITEM UID</label>
						<div class="form-group">
							<textarea name="history_item_uid" class="form-control" id="history_item_uid"><?php echo $this->input->post('history_item_uid'); ?></textarea>
						</div>
					</div>
					<div class="col-md-6">
						<label for="history_status_name" class="control-label">HISTORY STATUS NAME</label>
						<div class="form-group">
							<textarea name="history_status_name" class="form-control" id="history_status_name"><?php echo $this->input->post('history_status_name'); ?></textarea>
						</div>
					</div>
					<div class="col-md-6">
						<label for="history_building_name" class="control-label">HISTORY BUILDING NAME</label>
						<div class="form-group">
							<textarea name="history_building_name" class="form-control" id="history_building_name"><?php echo $this->input->post('history_building_name'); ?></textarea>
						</div>
					</div>
				</div>
			</div>
          	<div class="box-footer">
            	<button type="submit" class="btn btn-success">
            		<i class="fa fa-check"></i> Save
            	</button>
				<button  type="button" onclick="goBack();"class="btn btn-danger">
            		<i class="fa fa-times"></i> Back
            	</button>
          	</div>
            <?php echo form_close(); ?>
      	</div>
    </div>
</div>
