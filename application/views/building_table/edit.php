<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Building Table Edit</h3>
            </div>
			<?php echo form_open('building_table/edit/'.$building_table['BUILDING_RID']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="BUILDING_LAT" class="control-label">BUILDING LAT</label>
						<div class="form-group">
							<input type="text" name="BUILDING_LAT" value="<?php echo ($this->input->post('BUILDING_LAT') ? $this->input->post('BUILDING_LAT') : $building_table['BUILDING_LAT']); ?>" class="form-control" id="BUILDING_LAT" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="BUILDING_LONG" class="control-label">BUILDING LONG</label>
						<div class="form-group">
							<input type="text" name="BUILDING_LONG" value="<?php echo ($this->input->post('BUILDING_LONG') ? $this->input->post('BUILDING_LONG') : $building_table['BUILDING_LONG']); ?>" class="form-control" id="BUILDING_LONG" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="BUILDING_NAME" class="control-label">BUILDING NAME</label>
						<div class="form-group">
							<textarea name="BUILDING_NAME" class="form-control" id="BUILDING_NAME"><?php echo ($this->input->post('BUILDING_NAME') ? $this->input->post('BUILDING_NAME') : $building_table['BUILDING_NAME']); ?></textarea>
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