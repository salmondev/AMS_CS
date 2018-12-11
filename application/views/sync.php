<head>

<script type="text/javascript" src="https://unpkg.com/xlsx/dist/shim.min.js"></script>
<script type="text/javascript" src="https://unpkg.com/xlsx/dist/xlsx.full.min.js"></script>

<script type="text/javascript" src="https://unpkg.com/blob.js@1.0.1/Blob.js"></script>
<script type="text/javascript" src="https://unpkg.com/file-saver@1.3.3/FileSaver.js"></script>
</head>

<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
            <div class="box-title">
                   <p id="syncx" class="syncdata"><input type="submit" value="SYNC" class="btn btn-primary btn-lg" onclick="doit('sync');"></p>
                </div>
            </div>
            <div class="box-body">
                <table id="example2" class="table table-striped">
                <thead>
                    <tr>
						<th>ITEM UID</th>
						<th>ITEM SERIAL</th>
						<th>ITEM NAME</th>
						<th>ITEM AVAILABLE</th>
                    </tr>
                </thead>
                    <?php foreach($item_table as $i){ ?>
                    <tr>
						<td><?php echo $i['item_uid']; ?></td>
						<td><?php echo $i['item_serial']; ?></td>
						<td><?php echo $i['item_name']; ?></td>
						<td><?php echo $i['item_available']; ?></td>
                    </tr>
                    <?php } ?>
                </table>

								<table id="example3" class="table table-striped">
                <thead>
                    <tr>
						<th>ITEM UID</th>
						<th>ITEM SERIAL</th>
						<th>ITEM NAME</th>
						<th>ITEM AVAILABLE</th>
                    </tr>
                </thead>
                    <?php foreach($item_table as $i){ ?>
                    <tr>
						<td><?php echo $i['item_uid']; ?></td>
						<td><?php echo $i['item_serial']; ?></td>
						<td><?php echo $i['item_name']; ?></td>
						<td><?php echo $i['item_available']; ?></td>
                    </tr>
                    <?php } ?>
                </table>    

            </div>
        </div>
    </div>
</div>


<script >

function doit() {
    
}



</script>



