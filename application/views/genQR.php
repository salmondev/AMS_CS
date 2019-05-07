<?php

$connect = mysqli_connect("localhost", "amsappne_nfcdb", "AMSnfcapp1", "amsappne_nfc");
mysqli_set_charset($connect,'utf8');

if(isset($_POST['generate_text']))
{
 include('phpqrcode/qrlib.php'); 
 $text=$_POST['qr_text'];
 $refer=$_POST['qr_refer'];
 $assetname=$_POST['qr_assetname'];
 $receive=$_POST['qr_receive'];
 $spec=$_POST['qr_spec'];

 $tempPath = "images/";

 $fileName='qr_'.$text.'.png';

 $pngPath = $tempPath.$fileName;
 
 QRcode::png($text,$pngPath,'L',9,2);

}
$query = "UPDATE ASSET SET IMG_PATH='$pngPath' WHERE BARCODE='$text' ";
mysqli_query($connect, $query); 
?>

<form id="myForm" action="<?php echo site_url('qr/index') ?>" method="post">
<?php
    
		echo '<input type="hidden" name="qrpic" value="'.$fileName.'">';
		echo '<input type="hidden" name="qrname" value="'.$text.'">';
	    echo '<input type="hidden" name="qrrefer" value="'.$refer.'">';
	    echo '<input type="hidden" name="qrassetname" value="'.$assetname.'">';
	    echo '<input type="hidden" name="qrreceive" value="'.$receive.'">';
	    echo '<input type="hidden" name="qrspec" value="'.$spec.'">';
?>
</form>
<script type="text/javascript">
    document.getElementById('myForm').submit();
</script>

