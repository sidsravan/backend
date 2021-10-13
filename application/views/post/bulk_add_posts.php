<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
				<div class="col-md-3">
					<h3 class="box-title">Bulk Post Add</h3>
				</div>
				<div class="col-md-6">
				</div>
				<div class="col-md-3">
					<select name="no_of_posts" class="form-control" onchange="if (this.value) window.location.href=this.value, showcustomerid(this.value)">
						<option value="<?php echo site_url('post/bulk_add_posts/1');?>">1</option>
						<option value="<?php echo site_url('post/bulk_add_posts/2');?>">2</option>
						<option value="<?php echo site_url('post/bulk_add_posts/3');?>">3</option>
						<option value="<?php echo site_url('post/bulk_add_posts/4');?>">4</option>
						<option value="<?php echo site_url('post/bulk_add_posts/5');?>">5</option>
						<option value="<?php echo site_url('post/bulk_add_posts/6');?>">6</option>
						<option value="<?php echo site_url('post/bulk_add_posts/7');?>">7</option>
						<option value="<?php echo site_url('post/bulk_add_posts/8');?>">8</option>
						<option value="<?php echo site_url('post/bulk_add_posts/9');?>">9</option>
						<option value="<?php echo site_url('post/bulk_add_posts/10');?>">10</option>
					</select>
              	</div>
            </div>
            <?php echo form_open_multipart('post/bulk_add_posts'); ?>
          	<div class="box-body">
				<?php 
				
					if ($this->uri->segment(3) == FALSE)
					{
						$gval = 1;
					}
					else
					{
						$gval = $this->uri->segment(3);
					}
					if($gval){ 
						
						for($i=1;$i<=$gval;$i++){
				?>
          		<div class="row clearfix">
					<div class="col-md-4">
						<label for="post_type_id" class="control-label">Post Type</label>
						<div class="form-group">
							<select name="post_type_id[]" class="form-control">
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
					<div class="col-md-4">
						<label for="post_image" class="control-label"><span class="text-danger">*</span>Post Image</label>
						<div class="form-group">
							<input type="file" name="post_image[]" value="<?php echo $this->input->post('post_image'); ?>" class="form-control" id="post_image" />
							<span class="text-danger"><?php echo form_error('post_image');?></span>
						</div>
					</div>
					<div class="col-md-4">
						<label for="description" class="control-label"><span class="text-danger">*</span>Description</label>
						<div class="form-group">
							<textarea name="description[]" class="form-control" id="description"><?php echo $this->input->post('description'); ?></textarea>
							<span class="text-danger"><?php echo form_error('description');?></span>
						</div>
					</div>
				</div>
				<?php
					}} ?>
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



