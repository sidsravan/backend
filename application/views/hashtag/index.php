<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
               
            	<div class="col-md-2">
					 <h3 class="box-title">Hashtags Listing</h3>
				</div>
				<div class="col-md-4">
					<?php echo form_open('hashtag/index'); ?>
						<select name="blocked_filter" >
							<option value="">select </option>
							<option value="blocked">Blocked </option>
							<option value="un-blocked">Un Blocked </option>
						</select>
					</div>
					<div class="col-md-6">
						<input type="text" name="search" placeholder="Search"> 
						<input type="submit" name="Search" class="btn-warning searchl">
						<a href="<?php echo site_url('hashtag/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                    <?php echo form_close(); ?>
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>ID</th>
						<th>User Id</th>
						<th>Post Id</th>
						<th>Name</th>
						<th>Followers</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($hashtags as $h){ ?>
                    <tr>
						<td><?php echo $h['id']; ?></td>
						<td><?php echo $h['user_id']; ?></td>
						<td><?php echo $h['post_id']; ?></td>
						<td><?php echo $h['name']; ?></td>
						<td><?php echo $h['followers']; ?></td>
						<td>
                            <a href="<?php echo site_url('hashtag/edit/'.$h['id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('hashtag/remove/'.$h['id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                            <?php if($h['block']==0){ ?>
								<a href="<?php echo site_url('hashtag/block/'.$h['id']); ?>" class="btn btn-warning btn-xs"> Block</a>
                            <?php }else{ ?>
								<a href="<?php echo site_url('hashtag/unblock/'.$h['id']); ?>" class="btn btn-success btn-xs">Un Block</a>
							<?php } ?>
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
