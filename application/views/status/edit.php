<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Statu Edit</h3>
            </div>
			<?php echo form_open('status/edit/'.$status['STATUS_ID']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="STATUS_NAME" class="control-label">STATUS NAME</label>
						<div class="form-group">
							<textarea name="STATUS_NAME" class="form-control" id="STATUS_NAME"><?php echo ($this->input->post('STATUS_NAME') ? $this->input->post('STATUS_NAME') : $status['STATUS_NAME']); ?></textarea>
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
