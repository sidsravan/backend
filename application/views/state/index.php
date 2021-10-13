<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">States Listing</h3>
            	<div class="box-tools">
					<?php echo form_open('state/index'); ?>
						<input type="text" name="search" placeholder="Search"> 
						<input type="submit" name="Search" class="btn-warning searchl">
						<a href="<?php echo site_url('state/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                    <?php echo form_close(); ?>
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>ID</th>
						<th>Name</th>
						<th>Cdate</th>
						<th>Mdate</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($states as $s){ ?>
                    <tr>
						<td><?php echo $s['id']; ?></td>
						<td><?php echo $s['name']; ?></td>
						<td><?php echo $s['cdate']; ?></td>
						<td><?php echo $s['mdate']; ?></td>
						<td>
                            <a href="<?php echo site_url('state/edit/'.$s['id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('state/remove/'.$s['id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
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
