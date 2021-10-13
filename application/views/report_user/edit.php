<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Report User Edit</h3>
            </div>
			<?php echo form_open('report_user/edit/'.$report_user['id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="user_id" class="control-label"><span class="text-danger">*</span>User Id</label>
						<div class="form-group">
							<input type="text" name="user_id" value="<?php echo ($this->input->post('user_id') ? $this->input->post('user_id') : $report_user['user_id']); ?>" class="form-control" id="user_id" />
							<span class="text-danger"><?php echo form_error('user_id');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="report_user_id" class="control-label"><span class="text-danger">*</span>Report User Id</label>
						<div class="form-group">
							<input type="text" name="report_user_id" value="<?php echo ($this->input->post('report_user_id') ? $this->input->post('report_user_id') : $report_user['report_user_id']); ?>" class="form-control" id="report_user_id" />
							<span class="text-danger"><?php echo form_error('report_user_id');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="cdate" class="control-label"><span class="text-danger">*</span>Cdate</label>
						<div class="form-group">
							<input type="text" name="cdate" value="<?php echo ($this->input->post('cdate') ? $this->input->post('cdate') : $report_user['cdate']); ?>" class="form-control" id="cdate" />
							<span class="text-danger"><?php echo form_error('cdate');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="mdate" class="control-label"><span class="text-danger">*</span>Mdate</label>
						<div class="form-group">
							<input type="text" name="mdate" value="<?php echo ($this->input->post('mdate') ? $this->input->post('mdate') : $report_user['mdate']); ?>" class="form-control" id="mdate" />
							<span class="text-danger"><?php echo form_error('mdate');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="report_text" class="control-label"><span class="text-danger">*</span>Report Text</label>
						<div class="form-group">
							<textarea name="report_text" class="form-control" id="report_text"><?php echo ($this->input->post('report_text') ? $this->input->post('report_text') : $report_user['report_text']); ?></textarea>
							<span class="text-danger"><?php echo form_error('report_text');?></span>
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