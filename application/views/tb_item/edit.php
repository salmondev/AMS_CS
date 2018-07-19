<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Tb Item Edit</h3>
            </div>
			<?php echo form_open('tb_item/edit/'.$tb_item['id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="name" class="control-label">Name</label>
						<div class="form-group">
							<input type="text" name="name" value="<?php echo ($this->input->post('name') ? $this->input->post('name') : $tb_item['name']); ?>" class="form-control" id="name" />
						</div>
					</div>
					

                    <div class="col-md-6">
						<label for="date" class="control-label">Date</label>
						<div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" name="date" value="<?php echo ($this->input->post('date') ? $this->input->post('date') : $tb_item['date']); ?>" class="form-control pull-right" id="datepicker">
                </div>
					</div>


					<div class="col-md-6">
						<label for="detail" class="control-label">Detail</label>
						<div class="form-group">
							<textarea name="detail" class="form-control" id="detail"><?php echo ($this->input->post('detail') ? $this->input->post('detail') : $tb_item['detail']); ?></textarea>
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