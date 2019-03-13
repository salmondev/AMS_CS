<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Location Edit</h3>
            </div>
			<?php echo form_open('location/edit/'.$location['LOCATION_ID']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="DEPARTMENTID" class="control-label">Department</label>
						<div class="form-group">
							<select name="DEPARTMENTID" class="form-control">
								<option value="">select department</option>
								<?php 
								foreach($all_department as $department)
								{
									$selected = ($department['DEPARTMENTID'] == $location['DEPARTMENTID']) ? ' selected="selected"' : "";

									echo '<option value="'.$department['DEPARTMENTID'].'" '.$selected.'>'.$department['DEPARTMENTID'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="LOCATION_BUILDING_ID" class="control-label">LOCATION BUILDING ID</label>
						<div class="form-group">
							<input type="text" name="LOCATION_BUILDING_ID" value="<?php echo ($this->input->post('LOCATION_BUILDING_ID') ? $this->input->post('LOCATION_BUILDING_ID') : $location['LOCATION_BUILDING_ID']); ?>" class="form-control" id="LOCATION_BUILDING_ID" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="LOCATION_BUILDING_NAME" class="control-label">LOCATION BUILDING NAME</label>
						<div class="form-group">
							<input type="text" name="LOCATION_BUILDING_NAME" value="<?php echo ($this->input->post('LOCATION_BUILDING_NAME') ? $this->input->post('LOCATION_BUILDING_NAME') : $location['LOCATION_BUILDING_NAME']); ?>" class="form-control" id="LOCATION_BUILDING_NAME" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="LOCATION_FLOOR_ID" class="control-label">LOCATION FLOOR ID</label>
						<div class="form-group">
							<input type="text" name="LOCATION_FLOOR_ID" value="<?php echo ($this->input->post('LOCATION_FLOOR_ID') ? $this->input->post('LOCATION_FLOOR_ID') : $location['LOCATION_FLOOR_ID']); ?>" class="form-control" id="LOCATION_FLOOR_ID" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="LOCATION_ROOM_ID" class="control-label">LOCATION ROOM ID</label>
						<div class="form-group">
							<textarea name="LOCATION_ROOM_ID" class="form-control" id="LOCATION_ROOM_ID"><?php echo ($this->input->post('LOCATION_ROOM_ID') ? $this->input->post('LOCATION_ROOM_ID') : $location['LOCATION_ROOM_ID']); ?></textarea>
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
