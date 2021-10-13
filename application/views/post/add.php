<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Post Add</h3>
            </div>
            <?php echo form_open('post/add'); ?>
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
									$selected = ($user['id'] == $this->input->post('user_id')) ? ' selected="selected"' : "";

									echo '<option value="'.$user['id'].'" '.$selected.'>'.$user['name'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="post_type_id" class="control-label">Post Type</label>
						<div class="form-group">
							<select name="post_type_id" class="form-control">
								<option value="">select post_type</option>
								<?php 
								foreach($all_post_types as $post_type)
								{
									$selected = ($post_type['id'] == $this->input->post('post_type_id')) ? ' selected="selected"' : "";

									echo '<option value="'.$post_type['id'].'" '.$selected.'>'.$post_type['name'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="post_image" class="control-label"><span class="text-danger">*</span>Post Image</label>
						<div class="form-group">
							<input type="file" name="post_image" value="<?php echo $this->input->post('post_image'); ?>" class="form-control" id="post_image" />
							<span class="text-danger"><?php echo form_error('post_image');?></span>
						</div>
					</div>
					<!--<div class="col-md-6">
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
					</div>-->
					<div class="col-md-6">
						<label for="description" class="control-label"><span class="text-danger">*</span>Description</label>
						<div class="form-group">
							<textarea name="description" class="form-control" id="description"><?php echo $this->input->post('description'); ?></textarea>
							<span class="text-danger"><?php echo form_error('description');?></span>
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
