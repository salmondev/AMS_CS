<div class="row">
	<div class="col-md-12">
		<div class="box box-info">
			<div class="box-header with-border">
				<h3 class="box-title">Register</h3>
			</div>
			<?php echo form_open('user/add'); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="USER_USERNAME" class="control-label">รหัสบุคลากร</label>
						<div class="form-group">
							<input type="text" name="REFERID" value="<?php echo $this->input->post('REFERID'); ?>"
								class="form-control" id="REFERID" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="USER_USERNAME" class="control-label">Username (ชื่อผู้ใช้)<div style="color: red">
								*ภาษาอังกฤษเท่านั้น</div></label>
						<div class="form-group">
							<input type="text" name="USER_USERNAME"
								value="<?php echo $this->input->post('USER_USERNAME'); ?>" class="form-control"
								id="USER_USERNAME" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="USER_PASSWORD" class="control-label">Password (รหัสผ่าน)<div style="color: red">
								*ตัวเลขหรือภาษาอังกฤษเท่านั้น</div></label>
						<div class="form-group">
							<input type="password" name="USER_PASSWORD"
								value="<?php echo $this->input->post('USER_PASSWORD'); ?>" class="form-control"
								id="USER_PASSWORD" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="AUTH" class="control-label">AUTH</label>
						<!-- ////////////////////////////////////////////// -->
						<select name="AUTH" class="form-control" readonly="readonly">
							<!--<option value="">select AUTH</option>-->
							<option value="USER">USER</option>
							<?php 
/*
              $selected_val = ($auth['AUTH'] == $this->input->post('AUTH')) ? ' selected="selected"' : "";  // Storing Selected Value In Variable
              echo "You have selected :" .$selected_val;  // Displaying Selected Value
*/
								///////////////////////////////////////////////////
								foreach($all_auth as $auth)
								{
									$selected = ($auth['AUTH'] == $this->input->post('AUTH')) ? ' selected="selected"' : "";

									echo '<option value="'.$auth['AUTH'].'" '.$selected.'>'.$auth['AUTH'].'</option>';
								} 
								?>
						</select>

						<!-- ////////////////////////////////////////////// -->
					</div>
				</div>
			</div>
			<div class="box-footer">
				<button type="submit" class="btn btn-success">
					<i class="fa fa-save"></i> Save
				</button>
				<button type="button" onclick="goBack();" class="btn btn-danger">
					<i class="fa fa-times"></i> Back
				</button>
			</div>
			<?php echo form_close(); ?>
		</div>
	</div>
</div>

<script>
	document.getElementById("AUTH").value = "USER";

</script>
