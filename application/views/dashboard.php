<!DOCTYPE html>
<html>

<head>
	<link href="https://fonts.googleapis.com/css?family=Sarabun" rel="stylesheet">
</head>

<body>
	<div class="panel panel-primary">
		<div class="panel-heading">เครื่องมือ</div>
		<div class="panel-body">
			<!--<a href="?p=setting_card_status" class="btn btn-primary btn_main_wd"><i class="fa flaticon-tag20 fa-fw fa-6x"></i><br/><br/>สถานะการซ่อม/เคลม</a>-->
			<div class="row">
			<div class="col-lg-3 col-md-6">
					<div class="panel panel-default">
						<div class="panel-heading">
							<div class="row">
								<a href="<?php echo site_url('asset/index3/sync') ?>">
									<div class="col-xs-3"><i class="fa fa-qrcode fa-5x"></i></div>
									<div class="col-xs-9 text-right">
										<div>สร้าง QR Code พัสดุ/ครุภัณฑ์</div>
									</div>
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="panel panel-default">
						<div class="panel-heading">
							<div class="row">
								<a href="<?php echo site_url('search/index/search1') ?>">
									<div class="col-xs-3"><i class="fa fa-search fa-5x"></i></div>
									<div class="col-xs-9 text-right">
										<div>ค้นหาพัสดุ/ครุภัณฑ์</div>
									</div>
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="panel panel-default">
						<div class="panel-heading">
							<div class="row">
								<a href="<?php echo site_url('asset/index2/demo') ?>">
									<div class="col-xs-3"><i class="fa fa-list fa-5x"></i></div>
									<div class="col-xs-9 text-right">
										<div>รายการพัสดุ/ครุภัณฑ์</div>
									</div>
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="panel panel-primary">
						<div class="panel-heading">
							<div class="row">
								<div class="col-xs-3">
									<i class="fa fa-cubes fa-5x"></i>
								</div>
								<div class="col-xs-9 text-right">
									<div class="huge" style="font-size:200%; font-weight:bold">
										<?php echo $this->db->from("ASSET")->count_all_results();?>
									</div>
									<div>พัสดุ/ครุภัณฑ์ในระบบ</div>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="panel panel-primary">
		<div class="panel-heading">จัดการฐานข้อมูล</div>
		<div class="panel-body">
			<a href="<?php echo site_url('location/index/index') ?>" class="btn btn-primary btn_main_wd" style="margin-right:10px; margin-bottom:10px"><i
				 class="fa fa-map-marker fa-fw fa-5x"></i><br /><br />ข้อมูลสถานที่</a>
			
			<a href="<?php echo site_url('asset/index/index') ?>" class="btn btn-primary btn_main_wd" style="margin-right:10px; margin-bottom:10px"><i
				 class="fa fa-cubes fa-fw fa-5x"></i><br /><br />ข้อมูลพัสดุ/ครุภัณฑ์</a>
			<a href="<?php echo site_url('refer/index/index') ?>" class="btn btn-primary btn_main_wd" style="margin-right:10px; margin-bottom:10px"><i
				 class="fa fa-users fa-fw fa-5x"></i><br /><br />ข้อมูลผู้รับผิดชอบ</a>
			<a href="<?php echo site_url('user/index/index') ?>" class="btn btn-primary btn_main_wd" style="margin-right:10px; margin-bottom:10px"><i
				 class="fa fa-user-circle-o fa-fw fa-5x"></i><br /><br />ข้อมูลผู้ใช้ระบบ</a>
			
			<a href="<?php echo site_url('status/index/index') ?>" class="btn btn-primary btn_main_wd" style="margin-right:10px; margin-bottom:10px"><i
				 class="fa fa-toggle-on fa-fw fa-5x"></i><br /><br />ข้อมูลสถานะ</a>
			<a href="<?php echo site_url('department/index/index') ?>" class="btn btn-primary btn_main_wd" style="margin-right:10px; margin-bottom:10px"><i
				 class="fa fa-vcard fa-fw fa-5x"></i><br /><br />ข้อมูลหน่วยงาน</a>
			<a href="<?php echo site_url('history/index/index') ?>" class="btn btn-primary btn_main_wd" style="margin-right:10px; margin-bottom:10px"><i
				 class="fa fa-history fa-fw fa-5x"></i><br /><br />ข้อมูลประวัติ</a>
			<a href="<?php echo site_url('asset_verify/index/index') ?>" class="btn btn-primary btn_main_wd" style="margin-right:10px; margin-bottom:10px"><i
				 class="fa fa-check fa-fw fa-5x"></i><br /><br />ข้อมูลการตรวจสอบ</a>
				 <a href="<?php echo site_url('history_asset_recent/index/index') ?>" class="btn btn-primary btn_main_wd" style="margin-right:10px; margin-bottom:10px"><i
				 class="fa fa-refresh fa-fw fa-5x"></i><br /><br />ข้อมูลการตรวจสอบล่าสุด</a>
		</div>
	</div>
	<div class="panel panel-primary">
		<div class="panel-heading">
			ตั้งค่าระบบ
		</div>
		<div class="panel-body">
			<a href="<?php echo site_url('backupdb/index/backupdb') ?>" class="btn btn-danger btn_main_wd"><i class="fa fa-database fa-fw fa-4x"></i><br /><br />
				สำรอง/กู้คืนฐานข้อมูล</a>
		</div>
	</div>
</body>

</html>
