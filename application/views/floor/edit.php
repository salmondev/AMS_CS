<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Floor Edit</h3>
            </div>
			<?php echo form_open('floor/edit/'.$floor['FLOOR_RID']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="BUILDING_ID" class="control-label">Building</label>
						<div class="form-group">
							<select name="BUILDING_ID" class="form-control">
								<option value="">select building</option>
								<?php 
								foreach($all_building as $building)
								{
									$selected = ($building['BUILDING_ID'] == $floor['BUILDING_ID']) ? ' selected="selected"' : "";

									echo '<option value="'.$building['BUILDING_ID'].'" '.$selected.'>'.$building['BUILDING_ID'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="FLOOR_ID" class="control-label">FLOOR ID</label>
						<div class="form-group">
							<input type="text" name="FLOOR_ID" value="<?php echo ($this->input->post('FLOOR_ID') ? $this->input->post('FLOOR_ID') : $floor['FLOOR_ID']); ?>" class="form-control" id="FLOOR_ID" />
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
