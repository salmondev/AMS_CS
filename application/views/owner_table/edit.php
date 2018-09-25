<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Owner Table Edit</h3>
            </div>
			<?php echo form_open('owner_table/edit/'.$owner_table['']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="owner_uid" class="control-label">OWNER UID</label>
						<div class="form-group">
							<input type="text" name="owner_uid" value="<?php echo ($this->input->post('owner_uid') ? $this->input->post('owner_uid') : $owner_table['owner_uid']); ?>" class="form-control" id="owner_uid" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="owner_fname" class="control-label">OWNER FNAME</label>
						<div class="form-group">
							<input type="text" name="owner_fname" value="<?php echo ($this->input->post('owner_fname') ? $this->input->post('owner_fname') : $owner_table['owner_fname']); ?>" class="form-control" id="owner_fname" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="owner_lname" class="control-label">OWNER LNAME</label>
						<div class="form-group">
							<input type="text" name="owner_lname" value="<?php echo ($this->input->post('owner_lname') ? $this->input->post('owner_lname') : $owner_table['owner_lname']); ?>" class="form-control" id="owner_lname" />
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