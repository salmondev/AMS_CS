<?php
$connect = mysqli_connect("localhost", "amsappne_nfcdb", "AMSnfcapp1", "amsappne_nfc");
mysqli_set_charset($connect,'utf8');

     // File name
     $filename = $_FILES['imagefiles']['name'];
 
     // Valid extension
     $valid_ext = array('png','jpeg','jpg');

     // Location
     $location = "images/".$filename;
     $reduced_location = "images/reduced/".$filename;

     // file extension
     $file_extension = pathinfo($location, PATHINFO_EXTENSION);
     $file_extension = strtolower($file_extension);

     // Check extension
     if(in_array($file_extension,$valid_ext)){ 
 
       // Upload file
       if(move_uploaded_file($_FILES['imagefiles']['tmp_name'],$location)){

         // Compress Image
				 compressImage($_FILES['imagefiles']['type'],$location,$reduced_location,10);
				 
				 $sql = "INSERT INTO HISTORY_IMAGE (HISTORY_IMAGE_PATH) VALUES ('$reduced_location')"; 
				 mysqli_query($sql,$connect);

         echo "Successfully Uploaded";
       }

     }
   

   // Compress image
   function compressImage($type,$source, $destination, $quality) {

     $info = getimagesize($source);

     if ($type == 'image/jpeg') 
       $image = imagecreatefromjpeg($source);

     elseif ($type == 'image/gif') 
       $image = imagecreatefromgif($source);

     elseif ($type == 'image/png') 
       $image = imagecreatefrompng($source);

     imagejpeg($image, $destination, $quality);

   }

   
/*
$target_path1 = "uploads/";
    /* Add the original filename to our target path. Result is "uploads/filename.extension" */
   /* $target_path1 = $target_path1 . basename($_FILES['imagefiles']['name']);

    $filefinal = compress_image($_FILES["imagefiles"]["tmp_name"], $target_path1, 50);

    if (move_uploaded_file($_FILES['imagefiles']['tmp_name'], $filefinal)) {
        echo "The file " . basename($_FILES['imagefiles']['name']) . " has been uploaded.";
    } else {
        echo "There was an error uploading the file, please try again!";
        echo "filename: " . basename($_FILES['imagefiles']['name']);
        echo "target_path: " . $target_path1;
    }*/
    ?>
<html>
    	<head>
        		<title> image</title>
    	</head>
    	<body>

	
		
            	    	               
			<form action="" name="myform" id="myform" method="post" enctype="multipart/form-data">
				<ul>
			            	<li>
						<label>Upload:</label>
			        <input type="file" name="file[]" id="file" multiple/>
					</li>
					<li>
						<input type="submit" name="submit" id="submit" class="submit btn-success"/>
					</li>
				</ul>
			</form>
	</body>
</html>

<?php
if(isset($_POST['submit']))
{
	for($i=0;i<count($_FILES["file"]["tmp_name"]);$i++)
	{
		$filetmp = $_FILES["file"]["tmp_name"][$i];
		$filename = $_FILES["file"]["name"][$i];
		$filetype= $_FILES["file"]["type"][$i];
		$filepath = "photo/".$filename;
		
		move_uploaded_file($filetmp,$filepath);

		$sql = "INSERT INTO HISTORY_IMAGE (HISTORY_IMAGE_PATH) VALUES ('$reduced_location')"; 
		 mysqli_query($sql,$connect);
	}
}
?>
