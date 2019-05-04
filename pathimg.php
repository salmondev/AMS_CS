<?php 
	
	$con = mysqli_connect("localhost", "amsappne_nfcdb", "AMSnfcapp1", "amsappne_nfc");
    mysqli_set_charset($con,'utf8');
	
	//this is our upload folder 
	$upload_path = 'images/';
	
	//Getting the server ip 
	$server_ip = gethostbyname(gethostname());
	
	//creating the upload url 
	$upload_url = 'http://amsapp.net/'.$upload_path; 
	
	//response array 
	$response = array(); 
	
	
	if($_SERVER['REQUEST_METHOD']=='POST'){
		
		
		//checking the required parameters from the request 
		if(isset($_POST['name']) and isset($_FILES['image']['name'])){
			
			//connecting to the database 
			//$con = mysqli_connect(HOST,USER,PASS,DB) or die('Unable to Connect...');
			
			//getting name from the request 
			$name = $_POST['name'];
			
			//getting file info from the request 
			$fileinfo = pathinfo($_FILES['image']['name']);
			
			//getting the file extension 
			$extension = $fileinfo['extension'];
			
			//file url to store in the database 
			$file_url = $upload_url . getFileName() . '.' . $extension;
			
			//file path to upload in the server 
			$file_path = $upload_path . getFileName() . '.'. $extension; 
			
			//trying to save the file in the directory 
			try{
				//saving the file 
				move_uploaded_file($_FILES['image']['tmp_name'],$file_path);
				//$sql = "INSERT INTO `HISTORY_ASSET_RECENT` (`HISTORY_ASSETID`, `HISTORY_PHOTO`) VALUES (NULL, '$file_url');";
				$con = mysqli_connect("localhost", "amsappne_nfcdb", "AMSnfcapp1", "amsappne_nfc");
				$sql = "UPDATE HISTORY_ASSET_RECENT SET HISTORY_PHOTO='$file_path' WHERE HISTORY_ASSETID='$name'";
				
				
				//adding the path and name to database 
				if(mysqli_query($con,$sql)){
					
					//filling response array with values 
					$response['error'] = false; 
					$response['HISTORY_PHOTO'] = $file_url; 
					$response['HISTORY_ASSETID'] = $name;
				}
			//if some error occurred 
			}catch(Exception $e){
				$response['error']=true;
				$response['message']=$e->getMessage();
			}		
			//displaying the response 
			echo json_encode($response);
			
			//closing the connection 
			mysqli_close($con);
		}else{
			$response['error']=true;
			$response['message']='Please choose a file';
		}
	}
	
	/*
		We are generating the file name 
		so this method will return a file name for the image to be upload 
	*/
	function getFileName(){
		//$con = mysqli_connect(HOST,USER,PASS,DB) or die('Unable to Connect...');
		$con = mysqli_connect("localhost", "amsappne_nfcdb", "AMSnfcapp1", "amsappne_nfc");
		$sql = "SELECT max(HISTORY_ASSETID) as HISTORY_ASSETID FROM HISTORY_ASSET_RECENT";
		$result = mysqli_fetch_array(mysqli_query($con,$sql));
		
		mysqli_close($con);
		if($result['HISTORY_ASSETID']==null)
			return 1; 
		else 
			return ++$result['HISTORY_ASSETID']; 
	}
