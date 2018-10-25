<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Building Table Add</h3>
            </div>
            <?php echo form_open('building_table/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="building_lat" class="control-label">BUILDING LAT</label>
						<div class="form-group">
							<input type="text" name="building_lat" value="<?php echo $this->input->post('building_lat'); ?>" class="form-control" id="building_lat" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="building_long" class="control-label">BUILDING LONG</label>
						<div class="form-group">
							<input type="text" name="building_long" value="<?php echo $this->input->post('building_long'); ?>" class="form-control" id="building_long" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="building_name" class="control-label">BUILDING NAME</label>
						<div class="form-group">
							<textarea name="building_name" class="form-control" id="building_name"><?php echo $this->input->post('building_name'); ?></textarea>
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
