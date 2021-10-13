<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">State Edit</h3>
            </div>
			<?php echo form_open('state/edit/'.$state['id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="country_id" class="control-label"><span class="text-danger">*</span>Country</label>
						<div class="form-group">
							<select name="country_id" class="form-control">
								<option value="">select country</option>
								<?php 
								foreach($all_countries as $country)
								{
									$selected = ($country['id'] == $state['country_id']) ? ' selected="selected"' : "";

									echo '<option value="'.$country['id'].'" '.$selected.'>'.$country['name'].'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('country_id');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="name" class="control-label"><span class="text-danger">*</span>Name</label>
						<div class="form-group">
							<input type="text" name="name" value="<?php echo ($this->input->post('name') ? $this->input->post('name') : $state['name']); ?>" class="form-control" id="name" />
							<span class="text-danger"><?php echo form_error('name');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="cdate" class="control-label">Cdate</label>
						<div class="form-group">
							<input type="text" name="cdate" value="<?php echo ($this->input->post('cdate') ? $this->input->post('cdate') : $state['cdate']); ?>" class="has-datetimepicker form-control" id="cdate" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="mdate" class="control-label">Mdate</label>
						<div class="form-group">
							<input type="text" name="mdate" value="<?php echo ($this->input->post('mdate') ? $this->input->post('mdate') : $state['mdate']); ?>" class="has-datetimepicker form-control" id="mdate" />
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