<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Login</h3>
            </div>
            <?php echo form_open('user/login'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="row">
						<div class="col-md-3"></div>
						<div class="col-md-6">
							<label for="cdate" class="control-label">Username</label>
							<div class="form-group">
								<input type="text" name="username" value="<?php echo $this->input->post('username'); ?>" class="form-control" id="username" required/>
							</div>
						</div>
						<div class="col-md-3"></div>
					</div>
					
					<div class="row">
						<div class="col-md-3"></div>
						<div class="col-md-6">
							<label for="mdate" class="control-label">Password</label>
							<div class="form-group">
								<input type="text" name="password" value="<?php echo $this->input->post('password'); ?>" class="form-control" id="password" required/>
							</div>
						</div>
						<div class="col-md-3"></div>
				</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3"></div>
					<div class="col-md-6">
						<div class="box-footer text-right">
							<button type="submit" class="btn btn-success">
								<i class="fa fa-check"></i> Submit
							</button>
						</div>
					</div>
				<div class="col-md-3"></div>
          	</div>
            <?php echo form_close(); ?>
      	</div>
    </div>
</div>
