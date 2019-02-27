<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Building Edit</h3>
            </div>
			<?php echo form_open('building/edit/'.$building['BUILDING_ID']); ?>
			<div class="box-body">
				<div class="row clearfix">
				<div class="col-md-6">
						<label for="BUILDING_ID" class="control-label">BUILDING ID</label>
						<div class="form-group">
							<input name="BUILDING_ID" value="<?php echo ($this->input->post('BUILDING_ID') ? $this->input->post('BUILDING_ID') : $building['BUILDING_ID']); ?>"
							 class="form-control" id="BUILDING_ID" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="BUILDING_NAME" class="control-label">BUILDING NAME</label>
						<div class="form-group">
							<textarea name="BUILDING_NAME" class="form-control" id="BUILDING_NAME"><?php echo ($this->input->post('BUILDING_NAME') ? $this->input->post('BUILDING_NAME') : $building['BUILDING_NAME']); ?></textarea>
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
