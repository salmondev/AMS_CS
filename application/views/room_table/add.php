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
						<label for="ROOM_NUMBER" class="control-label">ROOM NUMBER</label>
						<div class="form-group">
							<input type="text" name="ROOM_NUMBER" value="<?php echo $this->input->post('ROOM_NUMBER'); ?>" class="form-control" id="ROOM_NUMBER" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="FLOOR_RID" class="control-label">FLOOR RID</label>
						<div class="form-group">
							<input type="text" name="FLOOR_RID" value="<?php echo $this->input->post('FLOOR_RID'); ?>" class="form-control" id="FLOOR_RID" />
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