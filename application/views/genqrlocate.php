<?php
if(isset($_POST['generate_text']))
{
 include('phpqrcode/qrlib.php');
 $text=$_POST['qr_text'];
 $department=$_POST['qr_department'];
 $building=$_POST['qr_building'];
 $buildingname=$_POST['qr_buildingname'];
 $room=$_POST['qr_room'];
 //$folder="images/";
 $tempPath = "images/";

 $fileName='qrlocate_'.$text.'.png';
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
 QRcode::png($text,$pngPath,'L',9,2);

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
//$newURL = "http://amsapp.net/index.php/asset/index3/sync";
//echo site_url('asset/index3/sync');
/*header('Location: '.$newURL);/*
header("Content-type: image/png");
echo '<img src="'.$pngPath.'" />'; */
}
?>

<form id="myForm" action="<?php echo site_url('qr/index2') ?>" method="post">
<?php
    
		echo '<input type="hidden" name="qrpic" value="'.$fileName.'">';
		echo '<input type="hidden" name="qrbarcode" value="'.$text.'">';
	    echo '<input type="hidden" name="qrdepart" value="'.$department.'">';
	    echo '<input type="hidden" name="qrbuild" value="'.$building.'">';
	    echo '<input type="hidden" name="qrbuildname" value="'.$buildingname.'">';
	    echo '<input type="hidden" name="qrroom" value="'.$room.'">';
?>
</form>
<script type="text/javascript">
    document.getElementById('myForm').submit();
</script>

