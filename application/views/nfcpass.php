<?php

        if(isset($_POST['btnSubmit']))
        {
			$path = 'http://amsapp.net/docs/';
	        $DATA = $_POST['nfcpass'];
			//$name = "NFC_".time();
			$name = "NFC_";
	        $filename = $name.".txt";
	        $myfile = fopen($filename, "w") or die("Unable to open file!");
	        $txt = $DATA;
	        fwrite($myfile, $txt);
	        fclose($myfile);
	        $NFC_PATH = $path.$filename;
            //move_uploaded_file($filename,$path);
			rename("NFC_.txt","docs/NFC_.txt");
			
			redirect('http://amsapp.net/dashboard/index/dashboard');
		}
//date ("d F Y H:i:s.", filemtime('http://amsapp.net/docs/NFC_.txt'));
?>


<div class="row">
	<div class="col-md-12">
		<div class="box box-info">
			<div class="box-header with-border">
				<h1 class="box-title">NFC Password Setup</h1></br></br>
				รหัสผ่านปัจจุบันของ NFC : <b><?php readfile('http://amsapp.net/docs/NFC_.txt')?></b></br></br>
				เปลี่ยนรหัส NFC ครั้งสุดท้ายเมื่อ : <b><?php 
				$filen = 'docs/NFC_.txt';
				echo date ("d F Y H:i:s.", filemtime($filen));
				/*$path = 'http://amsapp.net/docs/NFC_.txt?v=2';
				$path = preg_replace('/\?v=[\d]+$/', '', $path);
				$fileN = 'http://amsapp.net/docs/NFC_.txt';
				$filetime = filemtime($path); 
				echo $filetime;*/
				/*$filen = 'NFC_.txt';
				echo date ("F d Y H:i:s.", filemtime($filen));*/
                /*if (file_exists($filen)) {
                    echo date ("F d Y H:i:s.", filemtime($filen));
                }*/
				?></b></br></br>
			</div>
			<form action="" method="post">
				<div class="box-body">
					<div class="row clearfix">
						<div class="col-md-6">
							<label for="nfcpass" class="control-label">NEW NFC PASSWORD</br>
								<div style="color: red;">* 4 ตัวอักษรเท่านั้น</div>
							</label>
							<div class="form-group">
								<input type="text" name="nfcpass" value="" class="form-control" id="nfcpass" required
									maxlength="4" />
							</div>
						</div>
					</div>
				</div>
		</div>
		<div class="box-footer">
			<button type="submit" class="btn btn-success" name="btnSubmit">
				<i class="fa fa-save"></i> Save
			</button>
			<button type="button" onclick="goBack();" class="btn btn-danger">
				<i class="fa fa-times"></i> Back
			</button>
		</div>
		</form>
	</div>
</div>
</div>
