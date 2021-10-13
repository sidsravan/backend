<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Creator Sign Up</h3>
            </div>
            <?php echo form_open('user/upassword'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="row">
						<?php if(!empty($msg)){ ?> 
							<div class="col-md-3"></div>
							<div class="col-md-6">
								<div class="alert alert-danger" role="alert">
									<?php echo $msg; ?>
								</div>
							</div>
							<div class="col-md-3"></div>
						<?php } ?>
						
					</div>
					
					<div class="row">
						<div class="col-md-3"></div>
						<div class="col-md-6">
							<label for="cdate" class="control-label">Name</label>
							<div class="form-group">
								<input type="text" name="name" value="<?php echo $this->input->post('name'); ?>" class="form-control" id="name" required/>
							</div>
						</div>
						<div class="col-md-3"></div>
					</div>
					
					<div class="row">
						<div class="col-md-3"></div>
						<div class="col-md-6">
							<label for="mdate" class="control-label">Handle Name</label>
							<div class="form-group">
								<input type="text" name="handle_name" value="<?php echo $this->input->post('handle_name'); ?>" class="form-control" id="handle_name" required/>
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
								<i class="fa fa-check"></i> GENERATE CODE
							</button>
						</div>
					</div>
				<div class="col-md-3"></div>
          	</div>
            <?php echo form_close(); ?>
            
            <?php if(!empty($udata)){ ?>
				<div class="row">
					<div class="col-md-3"></div>
						<div class="col-md-6 panel panel-primary">
						  <div class="panel-heading">Click this link : https://memefeed.app</div>
						  <div class="panel-body">
								<p>Hi <span class='text-primary text-bold'><?php echo $udata['name']; ?> </span>, We are happy to welcome you to MemeFeed.</p>
								
								<p>and signup as a creator by entering below details in the form.</p>

								<p>Your handle name : <span class='text-primary text-bold'> <?php echo $udata['handle_name']; ?></span> </p>

								<p>Your Passcode : <span class='text-primary text-bold'><?php echo $udata['passcode']; ?></span> </p>

								<p>Note : Never share these details with anyone </p>
						  </div>
						</div>
					<div class="col-md-3"></div>
				</div>
			<?php } ?>

      	</div>
    </div>
</div>
