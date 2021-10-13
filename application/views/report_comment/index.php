<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Action Types Listing</h3>
            	<div class="box-tools">
					<?php echo form_open('vote_type/index'); ?>
						<input type="text" name="search" placeholder="Search"> 
						<input type="submit" name="Search" class="btn-warning searchl">
						<!--<a href="<?php echo site_url('vote_type/add'); ?>" class="btn btn-success btn-sm">Add</a> -->
                    <?php echo form_close(); ?>
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>ID</th>
						<th>User id</th>
						<th>Comment id</th>
						<th>Report</th>
						<th>Cdate</th>
						<th>Mdate</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($report_comment as $v){ ?>
                    <tr>
						<td><?php echo $v['id']; ?></td>
						<td><?php echo $v['user_id']; ?></td>
						<td><?php echo $v['comment_id']; ?></td>
						<td><?php echo $v['report_coment_text']; ?></td>
						<td><?php echo $v['cdate']; ?></td>
						<td><?php echo $v['mdate']; ?></td>
						<td>
                            <a href="<?php echo site_url('report_comment/edit/'.$v['id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('report_comment/remove/'.$v['id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
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
