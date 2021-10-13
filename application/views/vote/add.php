<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Vote Add</h3>
            </div>
            <?php echo form_open('vote/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="comment_based_id" class="control-label">Comment</label>
						<div class="form-group">
							<select name="comment_based_id" class="form-control">
								<option value="">select comment</option>
								<?php 
								foreach($all_comments as $comment)
								{
									$selected = ($comment['id'] == $this->input->post('comment_based_id')) ? ' selected="selected"' : "";

									echo '<option value="'.$comment['id'].'" '.$selected.'>'.$comment['comment_image'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="post_based_id" class="control-label">User</label>
						<div class="form-group">
							<select name="post_based_id" class="form-control">
								<option value="">select user</option>
								<?php 
								foreach($all_users as $user)
								{
									$selected = ($user['id'] == $this->input->post('post_based_id')) ? ' selected="selected"' : "";

									echo '<option value="'.$user['id'].'" '.$selected.'>'.$user['name'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="vote_type_id" class="control-label">Vote Type</label>
						<div class="form-group">
							<select name="vote_type_id" class="form-control">
								<option value="">select vote_type</option>
								<?php 
								foreach($all_vote_types as $vote_type)
								{
									$selected = ($vote_type['id'] == $this->input->post('vote_type_id')) ? ' selected="selected"' : "";

									echo '<option value="'.$vote_type['id'].'" '.$selected.'>'.$vote_type['name'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="value" class="control-label">Value</label>
						<div class="form-group">
							<input type="text" name="value" value="<?php echo $this->input->post('value'); ?>" class="form-control" id="value" />
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