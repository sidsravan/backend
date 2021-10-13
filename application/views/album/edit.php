<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Album Edit</h3>
            </div>
			<?php echo form_open('album/edit/'.$album['id']); ?>
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
									$selected = ($user['id'] == $album['user_id']) ? ' selected="selected"' : "";

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
							<input type="text" name="post_id" value="<?php echo ($this->input->post('post_id') ? $this->input->post('post_id') : $album['post_id']); ?>" class="form-control" id="post_id" />
							<span class="text-danger"><?php echo form_error('post_id');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="name" class="control-label"><span class="text-danger">*</span>Name</label>
						<div class="form-group">
							<input type="text" name="name" value="<?php echo ($this->input->post('name') ? $this->input->post('name') : $album['name']); ?>" class="form-control" id="name" />
							<span class="text-danger"><?php echo form_error('name');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="cdate" class="control-label">Cdate</label>
						<div class="form-group">
							<input type="text" name="cdate" value="<?php echo ($this->input->post('cdate') ? $this->input->post('cdate') : $album['cdate']); ?>" class="has-datetimepicker form-control" id="cdate" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="mdate" class="control-label">Mdate</label>
						<div class="form-group">
							<input type="text" name="mdate" value="<?php echo ($this->input->post('mdate') ? $this->input->post('mdate') : $album['mdate']); ?>" class="has-datetimepicker form-control" id="mdate" />
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