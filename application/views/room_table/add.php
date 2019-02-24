<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Room Table Add</h3>
            </div>
            <?php echo form_open('room_table/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="room_number" class="control-label">ROOM NUMBER</label>
						<div class="form-group">
							<input type="text" name="room_number" value="<?php echo $this->input->post('room_number'); ?>" class="form-control" id="room_number" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="floor_rid" class="control-label">FLOOR RID</label>
						<div class="form-group">
							<input type="text" name="floor_rid" value="<?php echo $this->input->post('floor_rid'); ?>" class="form-control" id="floor_rid" />
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
