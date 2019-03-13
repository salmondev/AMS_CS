<div class="row">
	<div class="col-md-12">
		<div class="box box-info">
			<div class="box-header with-border">
				<h3 class="box-title">Asset Edit</h3>
			</div>
			<?php echo form_open('asset/edit/'.$asset['ASSETID']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="ASSETID" class="control-label">ASSETID</label>
						<div class="form-group">
							<input name="ASSETID" value="<?php echo ($this->input->post('ASSETID') ? $this->input->post('ASSETID') : $asset['ASSETID']); ?>"
							 class="form-control" id="ASSETID" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="BARCODE" class="control-label">BARCODE</label>
						<div class="form-group">
							<input name="BARCODE" value="<?php echo ($this->input->post('BARCODE') ? $this->input->post('BARCODE') : $asset['BARCODE']); ?>"
							 class="form-control" id="BARCODE" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="REFERID" class="control-label">Refer</label>
						<div class="form-group">
							<select name="REFERID" class="form-control">
								<option value="">select refer</option>
								<?php 
								foreach($all_refer as $refer)
								{
									$selected = ($refer['REFERID'] == $asset['REFERID']) ? ' selected="selected"' : "";

									echo '<option value="'.$refer['REFERID'].'" '.$selected.'>'.$refer['REFERID'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="ASSETNAME" class="control-label">ASSETNAME</label>
						<div class="form-group">
							<input type="text" name="ASSETNAME" value="<?php echo ($this->input->post('ASSETNAME') ? $this->input->post('ASSETNAME') : $asset['ASSETNAME']); ?>"
							 class="form-control" id="ASSETNAME" />
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
							<textarea name="SPEC" class="form-control" id="SPEC"><?php echo ($this->input->post('SPEC') ? $this->input->post('SPEC') : $asset['SPEC']); ?></textarea>
						</div>
					</div>
					<div class="col-md-6">
						<label for="UNITNAME" class="control-label">UNITNAME</label>
						<div class="form-group">
							<textarea name="UNITNAME" class="form-control" id="UNITNAME"><?php echo ($this->input->post('UNITNAME') ? $this->input->post('UNITNAME') : $asset['UNITNAME']); ?></textarea>
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
