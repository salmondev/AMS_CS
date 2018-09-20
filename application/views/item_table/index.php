<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
            <div class="box-title">
                    <a href="<?php echo site_url('item_table/add'); ?>" class="btn btn-success btn-lg">ADD ITEM</a>
                    </br></br> 
                    <p id="xportxlsx" class="xport"><input type="submit" value="EXPORT" class="btn btn-primary" onclick="doit('xlsx');"></p>

                </div>
            </div>
            <div class="box-body">
                <table id="example2" class="table table-striped">
                <thead>
                    <tr>
						<th>ITEM UID</th>
						<th>ITEM SERIAL</th>
						<th>ITEM NAME</th>
						<th>Options</th>
                    </tr>
                    </thead>
                    <?php foreach($item_table as $i){ ?>
                    <tr>
						<td><?php echo $i['item_uid']; ?></td>
						<td><?php echo $i['item_serial']; ?></td>
						<td><?php echo $i['name']; ?></td>
						<td>
                            <a href="<?php echo site_url('item_table/edit/'.$i['item_uid']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('item_table/remove/'.$i['item_uid']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
