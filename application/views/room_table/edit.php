<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Room Table Edit</h3>
            </div>
			<?php echo form_open('room_table/edit/'.$room_table['room_rid']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="room_number" class="control-label">ROOM NUMBER</label>
						<div class="form-group">
							<input type="text" name="room_number" value="<?php echo ($this->input->post('room_number') ? $this->input->post('room_number') : $room_table['room_number']); ?>" class="form-control" id="room_number" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="floor_rid" class="control-label">FLOOR RID</label>
						<div class="form-group">
							<input type="text" name="floor_rid" value="<?php echo ($this->input->post('floor_rid') ? $this->input->post('floor_rid') : $room_table['floor_rid']); ?>" class="form-control" id="floor_rid" />
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
