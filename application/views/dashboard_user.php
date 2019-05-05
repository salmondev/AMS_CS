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
								<a href="<?php echo site_url('search/index3/search1') ?>">
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
								<a href="<?php echo site_url('history_asset_recent/index1/export_history') ?>" target="_blank">
									<div class="col-xs-3"><i class="fa fa-refresh fa-5x"></i></div>
									<div class="col-xs-9 text-right">
										<div>ออกรายงานการตรวจสอบล่าสุด</div>
									</div>
								</a>
							</div>
						</div>
					</div>
				</div>
				<!--
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
				</div>-->
			</div>
		</div>
	</div>
	
</body>

</html>
