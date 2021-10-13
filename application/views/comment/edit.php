<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Comment Edit</h3>
            </div>
			<?php echo form_open('comment/edit/'.$comment['id']); ?>
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
									$selected = ($user['id'] == $comment['user_id']) ? ' selected="selected"' : "";

									echo '<option value="'.$user['id'].'" '.$selected.'>'.$user['name'].'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('user_id');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="post_id" class="control-label">Post Id</label>
						<div class="form-group">
							<input type="text" name="post_id" value="<?php echo ($this->input->post('post_id') ? $this->input->post('post_id') : $comment['post_id']); ?>" class="form-control" id="post_id" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="parent_id" class="control-label">Parent Id</label>
						<div class="form-group">
							<input type="text" name="parent_id" value="<?php echo ($this->input->post('parent_id') ? $this->input->post('parent_id') : $comment['parent_id']); ?>" class="form-control" id="parent_id" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="comment_image" class="control-label"><span class="text-danger">*</span>Comment Image</label>
						<div class="form-group">
							<input type="text" name="comment_image" value="<?php echo ($this->input->post('comment_image') ? $this->input->post('comment_image') : $comment['comment_image']); ?>" class="form-control" id="comment_image" />
							<span class="text-danger"><?php echo form_error('comment_image');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="cdate" class="control-label">Cdate</label>
						<div class="form-group">
							<input type="text" name="cdate" value="<?php echo ($this->input->post('cdate') ? $this->input->post('cdate') : $comment['cdate']); ?>" class="has-datetimepicker form-control" id="cdate" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="mdate" class="control-label">Mdate</label>
						<div class="form-group">
							<input type="text" name="mdate" value="<?php echo ($this->input->post('mdate') ? $this->input->post('mdate') : $comment['mdate']); ?>" class="has-datetimepicker form-control" id="mdate" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="comment_text" class="control-label"><span class="text-danger">*</span>Comment Text</label>
						<div class="form-group">
							<textarea name="comment_text" class="form-control" id="comment_text"><?php echo ($this->input->post('comment_text') ? $this->input->post('comment_text') : $comment['comment_text']); ?></textarea>
							<span class="text-danger"><?php echo form_error('comment_text');?></span>
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