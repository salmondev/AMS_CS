<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Tb Item Add</h3>
            </div>
            <?php echo form_open('tb_item/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="name" class="control-label">Name</label>
						<div class="form-group">
							<input type="text" name="name" value="<?php echo $this->input->post('name'); ?>" class="form-control" id="name" />
						</div>
					</div>
					
					<div class="col-md-6">
						<label for="date" class="control-label">Date</label>
						<div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" name="odate" value="<?php echo $this->input->post('odate'); ?>" class="form-control pull-right" id="datepicker">
                </div>
					</div>
					
					<div class="col-md-6">
						<label for="detail" class="control-label">Detail</label>
						<div class="form-group">
							<textarea name="detail" class="form-control" id="detail"><?php echo $this->input->post('detail'); ?></textarea>
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