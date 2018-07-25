<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Floor Table Add</h3>
            </div>
            <?php echo form_open('floor_table/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="FLOOR_NUMBER" class="control-label">FLOOR NUMBER</label>
						<div class="form-group">
							<input type="text" name="FLOOR_NUMBER" value="<?php echo $this->input->post('FLOOR_NUMBER'); ?>" class="form-control" id="FLOOR_NUMBER" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="BUILDING_RID" class="control-label">BUILDING RID</label>
						<div class="form-group">
							<input type="text" name="BUILDING_RID" value="<?php echo $this->input->post('BUILDING_RID'); ?>" class="form-control" id="BUILDING_RID" />
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