<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Report User Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('report_user/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>ID</th>
						<th>User Id</th>
						<th>Report User Id</th>
						<th>Cdate</th>
						<th>Mdate</th>
						<th>Report Text</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($report_user as $r){ ?>
                    <tr>
						<td><?php echo $r['id']; ?></td>
						<td><?php echo $r['user_id']; ?></td>
						<td><?php echo $r['report_user_id']; ?></td>
						<td><?php echo $r['cdate']; ?></td>
						<td><?php echo $r['mdate']; ?></td>
						<td><?php echo $r['report_text']; ?></td>
						<td>
                            <a href="<?php echo site_url('report_user/edit/'.$r['id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('report_user/remove/'.$r['id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                <div class="pull-right">
                    <?php echo $this->pagination->create_links(); ?>                    
                </div>                
            </div>
        </div>
    </div>
</div>
