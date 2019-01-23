<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">User Add</h3>
            </div>
            <?php echo form_open('user/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="REFERID" class="control-label">Refer</label>
						<div class="form-group">
							<select name="REFERID" class="form-control">
								<option value="">select refer</option>
								<?php 
								foreach($all_refer as $refer)
								{
									$selected = ($refer['REFERID'] == $this->input->post('REFERID')) ? ' selected="selected"' : "";

									echo '<option value="'.$refer['REFERID'].'" '.$selected.'>'.$refer['REFERID'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="USER_USERNAME" class="control-label">USER USERNAME</label>
						<div class="form-group">
							<input type="text" name="USER_USERNAME" value="<?php echo $this->input->post('USER_USERNAME'); ?>" class="form-control" id="USER_USERNAME" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="USER_PASSWORD" class="control-label">USER PASSWORD</label>
						<div class="form-group">
							<input type="text" name="USER_PASSWORD" value="<?php echo $this->input->post('USER_PASSWORD'); ?>" class="form-control" id="USER_PASSWORD" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="AUTH" class="control-label">AUTH</label>
						<div class="form-group">
							<input type="text" name="AUTH" value="<?php echo $this->input->post('AUTH'); ?>" class="form-control" id="AUTH" />
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