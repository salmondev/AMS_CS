<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
            <div class="box-title">
                    <a href="<?php echo site_url('owner_table/add'); ?>" class="btn btn-success btn-lg">ADD OWNER</a>
                    </br></br> 
                    <p id="xportxlsx" class="xport"><input type="submit" value="EXPORT" class="btn btn-primary" onclick="doit('xlsx');"></p>

                </div>
            </div>
            <div class="box-body">
                <table id="example2" class="table table-striped">
                <thead>
                    <tr>
						<th>OWNER UID</th>
						<th>OWNER FNAME</th>
						<th>OWNER LNAME</th>
						<th>Options</th>
                    </tr>
                    </thead>
                    <?php foreach($owner_table as $o){ ?>
                    <tr>
						<td><?php echo $o['OWNER_UID']; ?></td>
						<td><?php echo $o['OWNER_FNAME']; ?></td>
						<td><?php echo $o['OWNER_LNAME']; ?></td>
						<td>
                            <a href="<?php echo site_url('owner_table/edit/'.$o['OWNER_UID']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('owner_table/remove/'.$o['OWNER_UID']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
