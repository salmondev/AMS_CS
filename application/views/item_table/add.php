<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Item Table Add</h3>
            </div>
            <?php echo form_open('item_table/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="item_uid" class="control-label">ITEM UID</label>
						<div class="form-group">
							<textarea name="item_uid" class="form-control" id="item_uid"><?php echo $this->input->post('item_uid'); ?></textarea>
						</div>
					</div>
					<div class="col-md-6">
						<label for="item_serial" class="control-label">ITEM SERIAL</label>
						<div class="form-group">
							<textarea name="item_serial" class="form-control" id="item_serial"><?php echo $this->input->post('item_serial'); ?></textarea>
						</div>
					</div>
					<div class="col-md-6">
						<label for="item_name" class="control-label">ITEM NAME</label>
						<div class="form-group">
							<textarea name="item_name" class="form-control" id="item_name"><?php echo $this->input->post('item_name'); ?></textarea>
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