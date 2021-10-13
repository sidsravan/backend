<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Hashtag Edit</h3>
            </div>
			<?php echo form_open('hashtag/edit/'.$hashtag['id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="user_id" class="control-label">User</label>
						<div class="form-group">
							<select name="user_id" class="form-control">
								<option value="">select user</option>
								<?php 
								foreach($all_users as $user)
								{
									$selected = ($user['id'] == $hashtag['user_id']) ? ' selected="selected"' : "";

									echo '<option value="'.$user['id'].'" '.$selected.'>'.$user['name'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="post_id" class="control-label">Post</label>
						<div class="form-group">
							<select name="post_id" class="form-control">
								<option value="">select post</option>
								<?php 
								foreach($all_posts as $post)
								{
									$selected = ($post['id'] == $hashtag['post_id']) ? ' selected="selected"' : "";

									echo '<option value="'.$post['id'].'" '.$selected.'>'.$post['post_image'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="name" class="control-label"><span class="text-danger">*</span>Name</label>
						<div class="form-group">
							<input type="text" name="name" value="<?php echo ($this->input->post('name') ? $this->input->post('name') : $hashtag['name']); ?>" class="form-control" id="name" />
							<span class="text-danger"><?php echo form_error('name');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="followers" class="control-label">Followers</label>
						<div class="form-group">
							<textarea name="followers" class="form-control" id="followers"><?php echo ($this->input->post('followers') ? $this->input->post('followers') : $hashtag['followers']); ?></textarea>
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
