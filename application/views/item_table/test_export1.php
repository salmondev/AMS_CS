<!DOCTYPE html>
<html>

<head>
	<title>Webslesson Tutorial | Export Mysql Table Data to CSV file in PHP</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
	<br /><br />
	<div class="container">
    <div class="panel panel-default">
        <div class="panel-heading">
            ASSET list
            <a href="<?php echo site_url('asset/index6/function_export') ?>" class="btn btn-success pull-right">Export ASSET</a>
        </div>
        <div class="panel-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
					<th>ASSETID</th>
						<th>REFERIDITEM</th>
						<th>ASSETNAME</th>
						<th>RECEIVEDATE</th>
						<th>SPEC</th>
						<th>UNITNAME</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    //include database configuration file
                    include 'dbConfig.php';
                    
                    //get records from database
                    $query = $db->query("SELECT * FROM ASSET ORDER BY ASSETID DESC");
                    if($query->num_rows > 0){ 
                        while($row = $query->fetch_assoc()){ ?>                
                    <tr>
					<td>
						<?php echo $row['ASSETID']; ?>
					</td>
					<td>
						<?php echo $row['REFERIDITEM']; ?>
					</td>
					<td>
						<?php echo $row['ASSETNAME']; ?>
					</td>
					<td>
						<?php echo $row['RECEIVEDATE']; ?>
					</td>
					<td>
						<?php echo $row['SPEC']; ?>
					</td>
					<td>
						<?php echo $row['UNITNAME']; ?>
					</td>
					</tr>
                    <?php } }else{ ?>
                    <tr><td colspan="5">No ASSET(s) found.....</td></tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</body>

</html>
