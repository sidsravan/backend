<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Followers Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('follower/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>ID</th>
						<th>From Id</th>
						<th>Type</th>
						<th>To Id</th>
						<th>Cdate</th>
						<th>Mdate</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($followers as $f){ ?>
                    <tr>
						<td><?php echo $f['id']; ?></td>
						<td><?php echo $f['from_id']; ?></td>
						<td><?php echo $f['type']; ?></td>
						<td><?php echo $f['to_id']; ?></td>
						<td><?php echo $f['cdate']; ?></td>
						<td><?php echo $f['mdate']; ?></td>
						<td>
                            <a href="<?php echo site_url('follower/edit/'.$f['id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('follower/remove/'.$f['id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
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
