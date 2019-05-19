<?php 
 
 //importing dbDetails file 
 require_once 'dbDetails.php';

 function compress_image($source_url, $destination_url, $quality) {

	$info = getimagesize($source_url);

		if ($info['mime'] == 'image/jpeg')
				$image = imagecreatefromjpeg($source_url);

		elseif ($info['mime'] == 'image/gif')
				$image = imagecreatefromgif($source_url);

	   elseif ($info['mime'] == 'image/png')
				$image = imagecreatefrompng($source_url);

		imagejpeg($image, $destination_url, $quality);
	return $destination_url;
}
 
 //this is our upload folder 
 $upload_path = 'uploads/';
 
 //Getting the server ip 
 //$server_ip = gethostname();
 $server_ip = "amsapp.net/";
 
 //creating the upload url 
 $upload_url = 'http://'.$server_ip.$upload_path; 
 
 //response array 
 $response = array(); 
 
 
 if($_SERVER['REQUEST_METHOD']=='POST'){
 
 //checking the required parameters from the request 
 if(isset($_FILES['image'])){
 
 //connecting to the database 
 $con = mysqli_connect(HOST,USER,PASS,DB) or die('Unable to Connect...');
 
 //getting name from the request 
 //$name = $_POST['name'];
 
 //getting file info from the request 
 $fileinfo = pathinfo($_FILES['image']['name']);
 //$filename = basename($fileinfo);
 
 //getting the file extension 
 $filename = $fileinfo['filename'];
 $extension = $fileinfo['extension'];
 
 //file url to store in the database 
 $file_url = $upload_url . $filename . '.' . $extension;
 
 $file_path = compress_image($_FILES["file"]["tmp_name"], $file_url, 10);
 
 //file path to upload in the server 
 //$file_path = $upload_path . $filename . '.'. $extension; 
 
 
 //trying to save the file in the directory 
 try{
 //saving the file 
 move_uploaded_file($_FILES['image']['tmp_name'],$file_path);
 $sql = "INSERT INTO `amsappne_nfc`.`HISTORY_ASSET_RECENT1` (`HISTORY_IMAGE_PATH`) VALUES ('$file_url');";
 //$sql = "UPDATE HISTORY_ASSET_RECENT1 SET HISTORY_IMAGE_PATH='$file_path' WHERE HISTORY_ASSETID='$filename'";
 
 //adding the path and name to database 
 if(mysqli_query($con,$sql)){
 
 //filling response array with values 
 $response['error'] = false; 
 $response['HISTORY_IMAGE_PATH'] = $file_url; 
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
 $con = mysqli_connect(HOST,USER,PASS,DB) or die('Unable to Connect...');
 $sql = "SELECT max(HISTORY_ASSETID) as HISTORY_ASSETID FROM HISTORY_ASSET_RECENT1";
 $result = mysqli_fetch_array(mysqli_query($con,$sql));
 
 mysqli_close($con);
 if($result['HISTORY_ASSETID']==null)
 return 1; 
 else 
 return ++$result['HISTORY_ASSETID']; 
 }

 
