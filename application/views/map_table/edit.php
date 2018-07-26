<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Map Table Edit</h3>
            </div>
			<?php echo form_open('map_table/edit/'.$map_table['MAP_RID']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="MAP_IMG" class="control-label">MAP IMG</label>
						<div class="form-group">
							<input type="text" name="MAP_IMG" value="<?php echo ($this->input->post('MAP_IMG') ? $this->input->post('MAP_IMG') : $map_table['MAP_IMG']); ?>" class="form-control" id="MAP_IMG" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="MAP_STATUS" class="control-label">MAP STATUS</label>
						<div class="form-group">
							<input type="text" name="MAP_STATUS" value="<?php echo ($this->input->post('MAP_STATUS') ? $this->input->post('MAP_STATUS') : $map_table['MAP_STATUS']); ?>" class="form-control" id="MAP_STATUS" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="MAP_NAME" class="control-label">MAP NAME</label>
						<div class="form-group">
							<textarea name="MAP_NAME" class="form-control" id="MAP_NAME"><?php echo ($this->input->post('MAP_NAME') ? $this->input->post('MAP_NAME') : $map_table['MAP_NAME']); ?></textarea>
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