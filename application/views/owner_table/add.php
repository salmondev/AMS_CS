<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Owner Table Add</h3>
            </div>
            <?php echo form_open('owner_table/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="OWNER_UID" class="control-label">OWNER UID</label>
						<div class="form-group">
							<input type="text" name="OWNER_UID" value="<?php echo $this->input->post('OWNER_UID'); ?>" class="form-control" id="OWNER_UID" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="OWNER_FNAME" class="control-label">OWNER FNAME</label>
						<div class="form-group">
							<input type="text" name="OWNER_FNAME" value="<?php echo $this->input->post('OWNER_FNAME'); ?>" class="form-control" id="OWNER_FNAME" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="OWNER_LNAME" class="control-label">OWNER LNAME</label>
						<div class="form-group">
							<input type="text" name="OWNER_LNAME" value="<?php echo $this->input->post('OWNER_LNAME'); ?>" class="form-control" id="OWNER_LNAME" />
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