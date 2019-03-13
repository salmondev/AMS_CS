<?php 
if(isset($_POST['generate_text']))
{
 include('phpqrcode/qrlib.php'); 
 $text=$_POST['qr_text'];
 //$folder="images/";
 $tempPath = "images/";

 $fileName='qr_'.$text.'.png';
 //$file_path=$folder.$file_name;
 //QRcode::png($text,$file_path);
 //echo"<img src='base_url('images/qr.png')'>";
 //<?php echo base_url('dist/img/admin.png');
 //echo "<img src='images/qr.png' >";
 //$urlRelativeFilePath = $file_path.$file_name;
 // displaying 
 //echo '<img src="'.$file_path.'" />';
 
 $pngPath = $tempPath.$fileName;
 
 //To Display Code Without Storing
 QRcode::png($text,$pngPath,'L',12,2);

/*
 QRcode::png  (
	$text,
	$fileName,
    $outfile = true,
    $level = QR_ECLEVEL_L,
    $size = 12,
    $margin = 2,
    $saveandprint = false 
 );*/
/*
 QRcode::text 
(
	$text,
	$outfile = false,
	$level = QR_ECLEVEL_L,
	$size = 12,
	$margin = 2 
);*/
//echo '<img src="'.$pngPath.'" />'; 
}
?>

