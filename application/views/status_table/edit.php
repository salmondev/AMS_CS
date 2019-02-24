<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Status Table Edit</h3>
            </div>
			<?php echo form_open('status_table/edit/'.$status_table['status_rid']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="status_name" class="control-label">STATUS NAME</label>
						<div class="form-group">
							<textarea name="status_name" class="form-control" id="status_name"><?php echo ($this->input->post('status_name') ? $this->input->post('status_name') : $status_table['status_name']); ?></textarea>
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