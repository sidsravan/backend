<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Album Add</h3>
            </div>
            <?php echo form_open('album/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="user_id" class="control-label"><span class="text-danger">*</span>User</label>
						<div class="form-group">
							<select name="user_id" class="form-control">
								<option value="">select user</option>
								<?php 
								foreach($all_users as $user)
								{
									$selected = ($user['id'] == $this->input->post('user_id')) ? ' selected="selected"' : "";

									echo '<option value="'.$user['id'].'" '.$selected.'>'.$user['name'].'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('user_id');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="post_id" class="control-label"><span class="text-danger">*</span>Post Id</label>
						<div class="form-group">
							<select name="post_id" class="form-control">
								<option value="">select post</option>
								<?php 
								foreach($posts as $post)
								{
									$selected = ($post['id'] == $this->input->post('post_id')) ? ' selected="selected"' : "";

									echo '<option value="'.$post['id'].'" '.$selected.'>'.$post['description'].'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('post_id');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="name" class="control-label"><span class="text-danger">*</span>Name</label>
						<div class="form-group">
							<select name="album_id" class="form-control">
								<option value="">select post</option>
								<?php 
								foreach($album_names as $aname)
								{
									$selected = ($aname['id'] == $this->input->post('album_id')) ? ' selected="selected"' : "";

									echo '<option value="'.$aname['id'].'" '.$selected.'>'.$aname['name'].'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('album_id');?></span>
						</div>
						
					</div>
					<div class="col-md-6">
						<label for="cdate" class="control-label">Cdate</label>
						<div class="form-group">
							<input type="text" name="cdate" value="<?php echo $this->input->post('cdate'); ?>" class="has-datetimepicker form-control" id="cdate" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="mdate" class="control-label">Mdate</label>
						<div class="form-group">
							<input type="text" name="mdate" value="<?php echo $this->input->post('mdate'); ?>" class="has-datetimepicker form-control" id="mdate" />
						</div>
					</div>
				</div>
			</div>
          	<div class="box-footer">
            	<button type="submit" class="btn btn-success">
            		<i class="fa fa-check"></i> Save
            	</button>
          	</div>
            <?php echo form_close(); ?>
      	</div>
    </div>
</div>
