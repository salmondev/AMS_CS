<html>

<head>
	<title>สรุปผลการตรวจสอบ</title>



	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
		integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
		integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
	</script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
		integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
	</script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
		integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
	</script>

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css?family=Sarabun" rel="stylesheet">


	<style>

    .reporter{
		font-size: 24px;
		margin: 100px;
	}





	</style>
</head>

<body style="font-family: 'Sarabun', sans-serif;">

	<?php
$objConnect = mysqli_connect("localhost", "amsappne_nfcdb", "AMSnfcapp1", "amsappne_nfc");
//$objDB = mysqli_select_db($objConnect,"mydatabase");
//$connect = mysqli_connect("localhost", "root", "", "amsappne_nfc");
mysqli_set_charset($objConnect,'utf8');

$found = $_POST['found'];
//$totalAsset = $_POST['found'];
$notfound = $_POST['not_scan'];
$active = $_POST['active'];
$deteriorate = $_POST['deteriorate'];
$broken = $_POST['broken'];
$lost = $_POST['lost'];

$dater = $_POST['dater'];


mysqli_close($objConnect);
	?>



<div class="reporter">
<h1>สรุปผลการตรวจสอบครุภัณฑ์ล่าสุด</h1>
</br>
</br>

<p><b>รายงานการตรวจสอบครุภัณฑ์วันที่ : </b><?php echo $dater; ?> </p>
</br><!--
<p><b>จำนวนครุภัณฑ์ที่ทำการสำรวจ : </b><?php echo $found; ?>  <b>ชิ้น</b> </p>
<p><b>ครุภัณฑ์ที่มีสถานะ "ใช้งาน" : </b><?php echo $active; ?>  <b>ชิ้น</b> </p>
<p><b>ครุภัณฑ์ที่มีสถานะ "เสื่อมสภาพ" : </b><?php echo $deteriorate; ?>  <b>ชิ้น</b> </p>
<p><b>ครุภัณฑ์ที่มีสถานะ "ชำรุด" : </b><?php echo $broken; ?>  <b>ชิ้น</b> </p>
<p><b>ครุภัณฑ์ที่มีสถานะ "สูญหาย" : </b><?php echo $lost; ?>  <b>ชิ้น</b> </p>
</br>
<p><b>จำนวนครุภัณฑ์ที่ไม่ทำการสำรวจ : </b><?php echo $notfound; ?>  <b>ชิ้น</b> </p>
-->

<div class="box">
	<table class="table table-bordered table-striped">
  <thead>
    <tr>
      <th scope="col">รายละเอียด</th>
	  <th scope="col">จำนวน</th>
	  
    </tr>
  </thead>
  <tbody>
	<!--<tr>
      <th scope="row">รายงานการตรวจสอบครุภัณฑ์วันที่</th>
      <td colspan="1"><?php echo $dater; ?></td>
    </tr>-->
		<tr>
      <th scope="row">จำนวนครุภัณฑ์ที่ทำการสำรวจ</th>
      <td colspan="1"><?php echo $found; ?>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>ชิ้น</b></td>
    </tr>
		<tr>
      <th scope="row">ครุภัณฑ์ที่มีสถานะ "ใช้งาน"</th>
      <td colspan="1"><?php echo $active; ?>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>ชิ้น</b></td>
		</tr>
		<tr>
      <th scope="row">ครุภัณฑ์ที่มีสถานะ "เสื่อมสภาพ"</th>
      <td colspan="1"><?php echo $deteriorate; ?>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>ชิ้น</b></td>
    </tr>
		<tr>
      <th scope="row">ครุภัณฑ์ที่มีสถานะ "ชำรุด"</th>
      <td colspan="1"><?php echo $broken; ?>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>ชิ้น</b></td>
	</tr>
	<tr>
      <th scope="row">ครุภัณฑ์ที่มีสถานะ "สูญหาย"</th>
      <td colspan="1"><?php echo $lost; ?>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>ชิ้น</b></td>
	</tr>
	<tr>
      <th scope="row">จำนวนครุภัณฑ์ที่ไม่ทำการสำรวจ</th>
      <td colspan="1"><?php echo $notfound; ?>  &nbsp;&nbsp;<b>ชิ้น</b></td>
	</tr>
    </tr>
  </tbody>
</table>
</div>


</div>





























	<div class="pagebreak"> </div>

	<script>
		window.onload = function () {
			window.print();
		}
	</script>
</body>

</html>
