<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">User Edit</h3>
            </div>
			<?php echo form_open('user/edit/'.$user['USER_ID']); ?>
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
									$selected = ($refer['REFERID'] == $user['REFERID']) ? ' selected="selected"' : "";

									echo '<option value="'.$refer['REFERID'].'" '.$selected.'>'.$refer['REFERID'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="USER_USERNAME" class="control-label">USER USERNAME</label>
						<div class="form-group">
							<input type="text" name="USER_USERNAME" value="<?php echo ($this->input->post('USER_USERNAME') ? $this->input->post('USER_USERNAME') : $user['USER_USERNAME']); ?>" class="form-control" id="USER_USERNAME" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="USER_PASSWORD" class="control-label">USER PASSWORD</label>
						<div class="form-group">
							<input type="text" name="USER_PASSWORD" value="<?php echo ($this->input->post('USER_PASSWORD') ? $this->input->post('USER_PASSWORD') : $user['USER_PASSWORD']); ?>" class="form-control" id="USER_PASSWORD" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="AUTH" class="control-label">AUTH</label>
						<div class="form-group">
							<input type="text" name="AUTH" value="<?php echo ($this->input->post('AUTH') ? $this->input->post('AUTH') : $user['AUTH']); ?>" class="form-control" id="AUTH" />
						</div>
					</div>
				</div>
			</div>
			<div class="box-footer">
			<button type="submit" class="btn btn-success">
            		<i class="fa fa-save"></i> Save
            	</button>
				<button  type="button" onclick="goBack();"class="btn btn-danger">
            		<i class="fa fa-times"></i> Back
            	</button>
	        </div>				
			<?php echo form_close(); ?>
		</div>
    </div>
</div>
