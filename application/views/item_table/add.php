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
						<label for="ITEM_UID" class="control-label">ITEM UID</label>
						<div class="form-group">
							<textarea name="ITEM_UID" class="form-control" id="ITEM_UID"><?php echo $this->input->post('ITEM_UID'); ?></textarea>
						</div>
					</div>
					<div class="col-md-6">
						<label for="ITEM_SERIAL" class="control-label">ITEM SERIAL</label>
						<div class="form-group">
							<textarea name="ITEM_SERIAL" class="form-control" id="ITEM_SERIAL"><?php echo $this->input->post('ITEM_SERIAL'); ?></textarea>
						</div>
					</div>
					<div class="col-md-6">
						<label for="ITEM_NAME" class="control-label">ITEM NAME</label>
						<div class="form-group">
							<textarea name="ITEM_NAME" class="form-control" id="ITEM_NAME"><?php echo $this->input->post('ITEM_NAME'); ?></textarea>
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