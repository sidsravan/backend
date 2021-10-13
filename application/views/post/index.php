<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Posts Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('post/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>ID</th>
						<th>User Id</th>
						<th>Post Type Id</th>
						<th>Post Image</th>
						<th>Cdate</th>
						<th>Description</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($posts as $p){ ?>
                    <tr>
						<td><?php echo $p['id']; ?></td>
						<td><?php echo $p['handle_name']; ?></td>
						<td><?php echo $p['name']; ?></td>
						<td><?php echo $p['post_image']; ?></td>
						<td><?php echo $p['cdate']; ?></td>
						<td><?php echo $p['post_description']; ?></td>
						<td>
                            <a href="<?php echo site_url('post/edit/'.$p['id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('post/remove/'.$p['id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
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
