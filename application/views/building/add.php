<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Building Add</h3>
            </div>
            <?php echo form_open('building/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
							<div class="col-md-6">
						<label for="BUILDING_ID" class="control-label">BUILDING ID</label>
						<div class="form-group">
							<textarea name="BUILDING_ID" class="form-control" id="BUILDING_ID"><?php echo $this->input->post('BUILDING_ID'); ?></textarea>
						</div>
					</div>
					<div class="col-md-6">
						<label for="BUILDING_NAME" class="control-label">BUILDING NAME</label>
						<div class="form-group">
							<textarea name="BUILDING_NAME" class="form-control" id="BUILDING_NAME"><?php echo $this->input->post('BUILDING_NAME'); ?></textarea>
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
