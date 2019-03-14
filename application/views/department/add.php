<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Department Add</h3>
            </div>
            <?php echo form_open('department/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="DEPARTMENTNAME" class="control-label">DEPARTMENTNAME</label>
						<div class="form-group">
							<input type="text" name="DEPARTMENTNAME" value="<?php echo $this->input->post('DEPARTMENTNAME'); ?>" class="form-control" id="DEPARTMENTNAME" />
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
