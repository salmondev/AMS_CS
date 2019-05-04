<?php 
 //importing dbDetails file 
 require_once 'dbDetails.php';

function getImage($image){
    if(strpos($image,'png')){
        $im = imagecreatefrompng('images/'.$image);
        header('Conten-Type: image/png');
        imagepng($im);
    }else if(strpos($image,'jpeg')){
        $im = imagecreatefromjpeg('images/'.$image);
        header('Content-Type: image/jpeg');
        imagejpeg($im);
    }else if(strpos($image,'jpg')){
        $im = imagecreatefromjpeg('images/'.$image);
        header('Content-Type: image/jpeg');
        imagejpeg($im);
    }else{
        $im = imagecreatetruecolor(120, 20);
        $color_texto = imagecolorallocate($im, 233, 14, 91);
        imagestring($im, 1, 5, 5,  'ERROR', $color_texto);
        header('Conten-Type: image/vnd.wap.wbmp');
        imagewbmp($im);
    }
    imagedestroy($im);
}

$sql = "SELECT HISTORY_PHOTO FROM HISTORY_ASSET_RECENT";

$con = mysqli_connect(HOST,USER,PASS,DB) or die('Unable to Connect...');
	
		$res = mysqli_query($con,$sql);
	/*while($row = mysqli_fetch_array($res)){
		$url = $row['HISTORY_PHOTO'];
		getImage($url);
	}*/
	
	$json = array();

	if(mysql_num_rows($res)){
	while($row=mysql_fetch_assoc($res)){
	$json['HISTORY_ASSET_RECENT'][]=$row;
	}
	}
	
	
	mysql_close($con);
	echo json_encode($json); 
