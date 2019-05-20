<div class="row">
	<div class="col-md-12">
		<div class="box box-info">
			<div class="box-header with-border">
				<h3 class="box-title">Asset Add</h3>
			</div>
			<?php echo form_open('asset/add'); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="ASSETID" class="control-label">ASSETID</label>
						<div class="form-group">
							<textarea name="ASSETID" class="form-control" id="ASSETID"><?php echo $this->input->post('ASSETID'); ?></textarea>
						</div>
					</div>
					<div class="col-md-6">
						<label for="BARCODE" class="control-label">BARCODE</label>
						<div class="form-group">
							<textarea name="BARCODE" class="form-control" id="BARCODE"><?php echo $this->input->post('BARCODE'); ?></textarea>
						</div>
					</div>
					<div class="col-md-6">
						<label for="REFERIDITEM" class="control-label">Refer</label>
						<div class="form-group">
							<select name="REFERIDITEM" class="form-control">
								<option value="">select refer</option>
								<?php 
								foreach($all_refer as $refer)
								{
									$selected = ($refer['REFERID'] == $this->input->post('REFERIDITEM')) ? ' selected="selected"' : "";

									echo '<option value="'.$refer['REFERID'].'" '.$selected.'>'.$refer['REFERID'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="ASSETNAME" class="control-label">ASSETNAME</label>
						<div class="form-group">
							<input type="text" name="ASSETNAME" value="<?php echo $this->input->post('ASSETNAME'); ?>" class="form-control"
							 id="ASSETNAME" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="RECEIVEDATE" class="control-label">RECEIVEDATE</label>
						<div class="form-group">
							<input type="text" name="odate" value="<?php echo $this->input->post('odate'); ?>" class="form-control pull-right"
							 id="datepicker" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="SPEC" class="control-label">SPEC</label>
						<div class="form-group">
							<textarea name="SPEC" class="form-control" id="SPEC"><?php echo $this->input->post('SPEC'); ?></textarea>
						</div>
					</div>
					<div class="col-md-6">
						<label for="UNITNAME" class="control-label">UNITNAME</label>
						<div class="form-group">
							<textarea name="UNITNAME" class="form-control" id="UNITNAME"><?php echo $this->input->post('UNITNAME'); ?></textarea>
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
