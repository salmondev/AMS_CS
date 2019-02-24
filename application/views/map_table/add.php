<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Map Table Add</h3>
            </div>
            <?php echo form_open('map_table/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="map_img" class="control-label">MAP IMG</label>
						<div class="form-group">
							<input type="text" name="map_img" value="<?php echo $this->input->post('map_img'); ?>" class="form-control" id="map_img" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="map_status" class="control-label">MAP STATUS</label>
						<div class="form-group">
							<input type="text" name="map_status" value="<?php echo $this->input->post('map_status'); ?>" class="form-control" id="map_status" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="map_name" class="control-label">MAP NAME</label>
						<div class="form-group">
							<textarea name="map_name" class="form-control" id="map_name"><?php echo $this->input->post('map_name'); ?></textarea>
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
