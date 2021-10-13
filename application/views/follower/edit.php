<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Follower Edit</h3>
            </div>
			<?php echo form_open('follower/edit/'.$follower['id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="from_id" class="control-label"><span class="text-danger">*</span>From Id</label>
						<div class="form-group">
							<input type="text" name="from_id" value="<?php echo ($this->input->post('from_id') ? $this->input->post('from_id') : $follower['from_id']); ?>" class="form-control" id="from_id" />
							<span class="text-danger"><?php echo form_error('from_id');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="type" class="control-label"><span class="text-danger">*</span>Type</label>
						<div class="form-group">
							<input type="text" name="type" value="<?php echo ($this->input->post('type') ? $this->input->post('type') : $follower['type']); ?>" class="form-control" id="type" />
							<span class="text-danger"><?php echo form_error('type');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="to_id" class="control-label"><span class="text-danger">*</span>To Id</label>
						<div class="form-group">
							<input type="text" name="to_id" value="<?php echo ($this->input->post('to_id') ? $this->input->post('to_id') : $follower['to_id']); ?>" class="form-control" id="to_id" />
							<span class="text-danger"><?php echo form_error('to_id');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="cdate" class="control-label"><span class="text-danger">*</span>Cdate</label>
						<div class="form-group">
							<input type="text" name="cdate" value="<?php echo ($this->input->post('cdate') ? $this->input->post('cdate') : $follower['cdate']); ?>" class="form-control" id="cdate" />
							<span class="text-danger"><?php echo form_error('cdate');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="mdate" class="control-label"><span class="text-danger">*</span>Mdate</label>
						<div class="form-group">
							<input type="text" name="mdate" value="<?php echo ($this->input->post('mdate') ? $this->input->post('mdate') : $follower['mdate']); ?>" class="form-control" id="mdate" />
							<span class="text-danger"><?php echo form_error('mdate');?></span>
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