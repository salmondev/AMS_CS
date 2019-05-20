<?php  
$connect = mysqli_connect("localhost", "amsappne_nfcdb", "AMSnfcapp1", "amsappne_nfc");
mysqli_set_charset($connect,'utf8');
/*
if(isset($_POST['SubmitButton']))
{*/
    $input = $_POST['inputText']; //get input text

    $sql = "SELECT * from HISTORY_ASSET_RECENT1 WHERE CONCAT(HISTORY_DAY,'/',HISTORY_MONTH,'/',HISTORY_YEAR) >= '$input'";
	$result = mysqli_query($connect,$sql);


    $found = mysqli_num_rows($result);
    $totalAsset = $this->db->from("ASSET")->count_all_results();
    $notfound = $totalAsset - $found;


    $active = "SELECT * FROM HISTORY_ASSET_RECENT1 WHERE CONCAT(HISTORY_DAY,'/',HISTORY_MONTH,'/',HISTORY_YEAR) >= '$input' AND HISTORY_STATUS_NAME='ใช้งาน'";

    $deteriorate = "SELECT * FROM HISTORY_ASSET_RECENT1 WHERE CONCAT(HISTORY_DAY,'/',HISTORY_MONTH,'/',HISTORY_YEAR) >= '$input' AND HISTORY_STATUS_NAME='เสื่อมสภาพ'";

    $broken = "SELECT * FROM HISTORY_ASSET_RECENT1 WHERE CONCAT(HISTORY_DAY,'/',HISTORY_MONTH,'/',HISTORY_YEAR) >= '$input' AND HISTORY_STATUS_NAME='ชำรุด'";

    $lost = "SELECT * FROM HISTORY_ASSET_RECENT1 WHERE CONCAT(HISTORY_DAY,'/',HISTORY_MONTH,'/',HISTORY_YEAR) >= '$input' AND HISTORY_STATUS_NAME='สูญหาย'";

    $active_res = mysqli_query($connect,$active);
    $deteriorate_res = mysqli_query($connect,$deteriorate);
    $broken_res = mysqli_query($connect,$broken);
    $lost_res = mysqli_query($connect,$lost);

    $active_total = mysqli_num_rows($active_res);
    $deteriorate_total = mysqli_num_rows($deteriorate_res);
    $broken_total = mysqli_num_rows($broken_res);
    $lost_total = mysqli_num_rows($lost_res);

    $message = "<b>ตรวจสอบตั้งแต่วันที่ : </b>".$input."
    </br>
    <b>จำนวนครุภัณฑ์ที่พบ : </b>".$found." ชิ้น
    </br>
    <b>จำนวนครุภัณฑ์ที่ไม่พบ : </b>".$notfound." ชิ้น</br>";
	
	
	/*
	while($row = mysqli_fetch_array($result)){
		echo $row['HISTORY_ASSET_NAME'];
		echo "&nbsp;";
		echo $row['HISTORY_ASSETID'];
		echo "</br>";
	}*/
//}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>HISTORY Recent</title>

    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css'>
    <link rel='stylesheet' href='https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css'>
    <link rel='stylesheet' href='https://cdn.datatables.net/buttons/1.2.2/css/buttons.bootstrap.min.css'>
    <link rel='stylesheet' href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css">

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.js"></script>

    <style>
        body {
            margin: 2em;
        }

        td:last-child {
            text-align: center;
        }
    </style>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Sarabun" rel="stylesheet">


</head>

<body style="font-family: 'Sarabun', sans-serif;">

    <h1>ข้อมูลการตรวจสอบครุภัณฑ์ล่าสุด</h1>
    </br>
    <div>
       <!-- <?php 
        echo $message; 
        
        ?>-->
        <p><b>รายงานการตรวจสอบครุภัณฑ์วันที่ : </b><?php echo $input; ?> </p>
        <div class="box">
	<table class="table table-bordered table-striped" style="width:20%;">
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
      <td colspan="1"><?php echo $active_total; ?>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>ชิ้น</b></td>
		</tr>
		<tr>
      <th scope="row">ครุภัณฑ์ที่มีสถานะ "เสื่อมสภาพ"</th>
      <td colspan="1"><?php echo $deteriorate_total; ?>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>ชิ้น</b></td>
    </tr>
		<tr>
      <th scope="row">ครุภัณฑ์ที่มีสถานะ "ชำรุด"</th>
      <td colspan="1"><?php echo $broken_total; ?>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>ชิ้น</b></td>
	</tr>
	<tr>
      <th scope="row">ครุภัณฑ์ที่มีสถานะ "สูญหาย"</th>
      <td colspan="1"><?php echo $lost_total; ?>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>ชิ้น</b></td>
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
    </div>
    <!--
	<a href="<?php echo site_url('history_asset_recent/index2/imgAsset') ?>" target="_blank" class="btn btn-info"><i
            class="fa fa-picture-o"></i>รูปภาพการตรวจสอบล่าสุด</a>-->
    <!--<p><b>ตรวจสอบตั้งแต่วันที่ :</b><?php $message; ?></p>-->
   <!-- <a href="<?php echo site_url('history_asset_recent/index5/total_result') ?>" class="btn btn-primary">สรุปผลการตรวจสอบ</a>-->

    <form target="_blank" action="<?php echo site_url('history_asset_recent/index5/total_result') ?>" method="post">

                <input type="hidden" name="found" value="<?php echo $found; ?>">
				<input type="hidden" name="not_scan" value="<?php echo $notfound; ?>">
				<input type="hidden" name="active" value="<?php echo $active_total; ?>">
				<input type="hidden" name="deteriorate" value="<?php echo $deteriorate_total; ?>">
                <input type="hidden" name="broken" value="<?php echo $broken_total; ?>">
                <input type="hidden" name="lost" value="<?php echo $lost_total; ?>">
                <input type="hidden" name="dater" value="<?php echo $input; ?>">

    <button type="submit" class="btn btn-primary"><i class="fa fa-file-text-o" aria-hidden="true"></i>&nbsp;สรุปผลการตรวจสอบ</button>

    </form>
    </br>
    <button class="btn btn-danger" onclick="goBack()"><i class="fa fa-arrow-left" style="margin:5px"></i>BACK</button>
    <script>
        function goBack() {
            window.history.back();
        }
    </script>
	</br>
	</br>
	</br>
    
    <div class="table-responsive">
        <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
            
            <thead>
                <tr>
                    <th>รหัสครุภัณฑ์</th>
                    <th>ชื่อครุภัณฑ์</th>
                    <th>วันที่นำเข้า</th>
                    <th>รายละเอียด</th>
                    <th>หน่วย</th>
                    <th>สถานะการใช้งาน</th>
                    <th>ชื่อผู้รับผิดชอบ</th>
                    <th>รหัสอาคาร</th>
                    <th>รหัสชั้น</th>
                    <th>รหัสห้อง</th>
                    <th>วันที่ตรวจสอบ</th>
                    <th>เดือนที่ตรวจสอบ</th>
                    <th>ปีที่ตรวจสอบ</th>
                    <th>ชั่วโมงที่ตรวจสอบ</th>
                    <th>นาทีที่ตรวจสอบ</th>
                    <th>ชื่อผู้ตรวจสอบ</th>
                </tr>
            </thead>
            <?php while($H = mysqli_fetch_array($result)){ ?>
            <tr>
                <td><?php echo $H['HISTORY_ASSETID']; ?></td>
                <td><?php echo $H['HISTORY_ASSET_NAME']; ?></td>
                <td><?php echo $H['HISTORY_RECEIVEDATE']; ?></td>
                <td><?php echo $H['HISTORY_SPEC']; ?></td>
                <td><?php echo $H['HISTORY_UNITNAME']; ?></td>
                <td><?php echo $H['HISTORY_STATUS_NAME']; ?></td>
                <td><?php echo $H['HISTORY_REFERNAME']; ?></td>
                <td><?php echo $H['HISTORY_BUILDING_ID']; ?></td>
                <td><?php echo $H['HISTORY_FLOOR_ID']; ?></td>
                <td><?php echo $H['HISTORY_ROOM_ID']; ?></td>
                <td><?php echo $H['HISTORY_DAY']; ?></td>
                <td><?php echo $H['HISTORY_MONTH']; ?></td>
                <td><?php echo $H['HISTORY_YEAR']; ?></td>
                <td><?php echo $H['HISTORY_HOUR']; ?></td>
                <td><?php echo $H['HISTORY_MINUTE']; ?></td>
                <td><?php echo $H['HISTORY_USERNAME']; ?></td>
            </tr>
            <?php } ?>
            
        </table>
    </div>

    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>
    <script src='https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js'></script>

    <script src='https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js'></script>
    <script src='https://cdn.datatables.net/buttons/1.2.2/js/buttons.colVis.min.js'></script>
    <script src='https://cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js'></script>
    <script src='https://cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js'></script>

    <script src='https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js'></script>

    <script src='https://cdn.datatables.net/buttons/1.2.2/js/buttons.bootstrap.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js'></script>

    <script src='https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js'></script>
    <script src='https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js'></script>

    <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js'></script>

    <script>
        var text = <?php $message; ?>
        $(document).ready(function () {

            //Only needed for the filename of export files.
            //Normally set in the title tag of your page.
            document.title = 'การตรวจสอบพัสดุครุภัณฑ์ล่าสุด';
            // DataTable initialisation
            $('#example').DataTable({
                "dom": '<"dt-buttons"Bf><"clear">lirtp',
                "paging": true,
                "autoWidth": true,
                "columnDefs": [{
                    "orderable": false,
                    "targets": 5
                }],
                "buttons": [
                    'colvis',
                    'copyHtml5',
                    'csvHtml5',
                    'excelHtml5',
                    {
                        extend: 'pdfHtml5',
                        orientation: 'landscape', //landscape give you more space
                        pageSize: 'A1', //A0 is the largest A5 smallest(A0,A1,A2,A3,legal,A4,A5,letter))
                        messageTop: 'HISTORY',
                        filename: 'HISTORY_PDF',
                        charset: 'utf-8',
                        bom: 'true'
                    },
                    {
                        extend: 'print',
                        customize: function (doc) {
                            $(doc.document.body).find('h1').css('font-size', '12pt');
                            $(doc.document.body).find('table').css('font-size', '10pt');
                            $(doc.document.body).css('font-size', '10px');
                        }
                    }
                ]
            });
        });
    </script>
</body>

</html>
