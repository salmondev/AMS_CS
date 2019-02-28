<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">History Add</h3>
            </div>
            <?php echo form_open('history/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="HISTORY_ASSETID" class="control-label">HISTORY ASSETID</label>
						<div class="form-group">
							<input type="text" name="HISTORY_ASSETID" value="<?php echo $this->input->post('HISTORY_ASSETID'); ?>" class="form-control" id="HISTORY_ASSETID" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="HISTORY_STATUS_ID" class="control-label">HISTORY STATUS ID</label>
						<div class="form-group">
							<input type="text" name="HISTORY_STATUS_ID" value="<?php echo $this->input->post('HISTORY_STATUS_ID'); ?>" class="form-control" id="HISTORY_STATUS_ID" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="HISTORY_REFERID" class="control-label">HISTORY REFERID</label>
						<div class="form-group">
							<input type="text" name="HISTORY_REFERID" value="<?php echo $this->input->post('HISTORY_REFERID'); ?>" class="form-control" id="HISTORY_REFERID" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="HISTORY_BUILDING_ID" class="control-label">HISTORY BUILDING ID</label>
						<div class="form-group">
							<input type="text" name="HISTORY_BUILDING_ID" value="<?php echo $this->input->post('HISTORY_BUILDING_ID'); ?>" class="form-control" id="HISTORY_BUILDING_ID" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="HISTORY_FLOOR_ID" class="control-label">HISTORY FLOOR ID</label>
						<div class="form-group">
							<input type="text" name="HISTORY_FLOOR_ID" value="<?php echo $this->input->post('HISTORY_FLOOR_ID'); ?>" class="form-control" id="HISTORY_FLOOR_ID" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="HISTORY_ROOM_ID" class="control-label">HISTORY ROOM ID</label>
						<div class="form-group">
							<input type="text" name="HISTORY_ROOM_ID" value="<?php echo $this->input->post('HISTORY_ROOM_ID'); ?>" class="form-control" id="HISTORY_ROOM_ID" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="HISTORY_DAY" class="control-label">HISTORY DAY</label>
						<div class="form-group">
							<input type="text" name="HISTORY_DAY" value="<?php echo $this->input->post('HISTORY_DAY'); ?>" class="form-control" id="HISTORY_DAY" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="HISTORY_MONTH" class="control-label">HISTORY MONTH</label>
						<div class="form-group">
							<input type="text" name="HISTORY_MONTH" value="<?php echo $this->input->post('HISTORY_MONTH'); ?>" class="form-control" id="HISTORY_MONTH" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="HISTORY_YEAR" class="control-label">HISTORY YEAR</label>
						<div class="form-group">
							<input type="text" name="HISTORY_YEAR" value="<?php echo $this->input->post('HISTORY_YEAR'); ?>" class="form-control" id="HISTORY_YEAR" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="HISTORY_HOUR" class="control-label">HISTORY HOUR</label>
						<div class="form-group">
							<input type="text" name="HISTORY_HOUR" value="<?php echo $this->input->post('HISTORY_HOUR'); ?>" class="form-control" id="HISTORY_HOUR" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="HISTORYMINUTE" class="control-label">HISTORYMINUTE</label>
						<div class="form-group">
							<input type="text" name="HISTORYMINUTE" value="<?php echo $this->input->post('HISTORYMINUTE'); ?>" class="form-control" id="HISTORYMINUTE" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="HISTORY_USERNAME" class="control-label">HISTORY USERNAME</label>
						<div class="form-group">
							<input type="text" name="HISTORY_USERNAME" value="<?php echo $this->input->post('HISTORY_USERNAME'); ?>" class="form-control" id="HISTORY_USERNAME" />
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
