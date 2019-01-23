<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Refer Add</h3>
            </div>
            <?php echo form_open('refer/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="DEPARTMENTID" class="control-label">Department</label>
						<div class="form-group">
							<select name="DEPARTMENTID" class="form-control">
								<option value="">select department</option>
								<?php 
								foreach($all_department as $department)
								{
									$selected = ($department['DEPARTMENTID'] == $this->input->post('DEPARTMENTID')) ? ' selected="selected"' : "";

									echo '<option value="'.$department['DEPARTMENTID'].'" '.$selected.'>'.$department['DEPARTMENTID'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="REFERNAME" class="control-label">REFERNAME</label>
						<div class="form-group">
							<input type="text" name="REFERNAME" value="<?php echo $this->input->post('REFERNAME'); ?>" class="form-control" id="REFERNAME" />
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