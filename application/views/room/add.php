<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Room Add</h3>
            </div>
            <?php echo form_open('room/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="FLOOR_RID" class="control-label">Floor</label>
						<div class="form-group">
							<select name="FLOOR_RID" class="form-control">
								<option value="">select floor</option>
								<?php 
								foreach($all_floor as $floor)
								{
									$selected = ($floor['FLOOR_RID'] == $this->input->post('FLOOR_RID')) ? ' selected="selected"' : "";

									echo '<option value="'.$floor['FLOOR_RID'].'" '.$selected.'>'.$floor['FLOOR_RID'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="DEPARTMENTID" class="control-label">Department</label>
						<div class="form-group">
							<select name="DEPARTMENTID" class="form-control">
								<option value="">select department</option>
								<?php 
								foreach($all_department as $department)
								{
									$selected = ($department['DEPARTMENTID'] == $this->input->post('DEPARTMENTID')) ? ' selected="selected"' : "";

									echo '<option value="'.$department['DEPARTMENTID'].'" '.$selected.'>'.$department['DEPARTMENTID'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="ROOM_ID" class="control-label">ROOM ID</label>
						<div class="form-group">
							<input type="text" name="ROOM_ID" value="<?php echo $this->input->post('ROOM_ID'); ?>" class="form-control" id="ROOM_ID" />
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