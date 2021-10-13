<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">User Edit</h3>
            </div>
			<?php echo form_open('user/edit/'.$user['id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="user_type" class="control-label">User Type</label>
						<div class="form-group">
							<select name="user_type" class="form-control">
								<option value="">select</option>
								<?php 
								$user_type_values = array(
									'1'=>'Admin',
									'2'=>'Creator',
									'3'=>'User',
								);

								foreach($user_type_values as $value => $display_text)
								{
									$selected = ($value == $user['user_type']) ? ' selected="selected"' : "";

									echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="countries_id" class="control-label">Country</label>
						<div class="form-group">
							<select name="countries_id" class="form-control">
								<option value="">select country</option>
								<?php 
								foreach($all_countries as $country)
								{
									$selected = ($country['id'] == $user['countries_id']) ? ' selected="selected"' : "";

									echo '<option value="'.$country['id'].'" '.$selected.'>'.$country['name'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="state_id" class="control-label">State</label>
						<div class="form-group">
							<select name="state_id" class="form-control">
								<option value="">select state</option>
								<?php 
								foreach($all_states as $state)
								{
									$selected = ($state['id'] == $user['state_id']) ? ' selected="selected"' : "";

									echo '<option value="'.$state['id'].'" '.$selected.'>'.$state['name'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="city_id" class="control-label">City</label>
						<div class="form-group">
							<select name="city_id" class="form-control">
								<option value="">select city</option>
								<?php 
								foreach($all_cities as $city)
								{
									$selected = ($city['id'] == $user['city_id']) ? ' selected="selected"' : "";

									echo '<option value="'.$city['id'].'" '.$selected.'>'.$city['name'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="password" class="control-label">Password</label>
						<div class="form-group">
							<input type="text" name="password" value="<?php echo ($this->input->post('password') ? $this->input->post('password') : $user['password']); ?>" class="form-control" id="password" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="name" class="control-label"><span class="text-danger">*</span>Name</label>
						<div class="form-group">
							<input type="text" name="name" value="<?php echo ($this->input->post('name') ? $this->input->post('name') : $user['name']); ?>" class="form-control" id="name" />
							<span class="text-danger"><?php echo form_error('name');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="handle_name" class="control-label"><span class="text-danger">*</span>Handle Name</label>
						<div class="form-group">
							<input type="text" name="handle_name" value="<?php echo ($this->input->post('handle_name') ? $this->input->post('handle_name') : $user['handle_name']); ?>" class="form-control" id="handle_name" />
							<span class="text-danger"><?php echo form_error('handle_name');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="passcode" class="control-label">Passcode</label>
						<div class="form-group">
							<input type="text" name="passcode" value="<?php echo ($this->input->post('passcode') ? $this->input->post('passcode') : $user['passcode']); ?>" class="form-control" id="passcode" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="gender" class="control-label">Gender</label>
						<div class="form-group">
							<input type="text" name="gender" value="<?php echo ($this->input->post('gender') ? $this->input->post('gender') : $user['gender']); ?>" class="form-control" id="gender" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="profile_image" class="control-label">Profile Image</label>
						<div class="form-group">
							<input type="text" name="profile_image" value="<?php echo ($this->input->post('profile_image') ? $this->input->post('profile_image') : $user['profile_image']); ?>" class="form-control" id="profile_image" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="profile_state" class="control-label">Profile State</label>
						<div class="form-group">
							<input type="text" name="profile_state" value="<?php echo ($this->input->post('profile_state') ? $this->input->post('profile_state') : $user['profile_state']); ?>" class="form-control" id="profile_state" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="signup_with" class="control-label">Signup With</label>
						<div class="form-group">
							<input type="text" name="signup_with" value="<?php echo ($this->input->post('signup_with') ? $this->input->post('signup_with') : $user['signup_with']); ?>" class="form-control" id="signup_with" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="phone_number" class="control-label">Phone Number</label>
						<div class="form-group">
							<input type="text" name="phone_number" value="<?php echo ($this->input->post('phone_number') ? $this->input->post('phone_number') : $user['phone_number']); ?>" class="form-control" id="phone_number" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="email" class="control-label">Email</label>
						<div class="form-group">
							<input type="text" name="email" value="<?php echo ($this->input->post('email') ? $this->input->post('email') : $user['email']); ?>" class="form-control" id="email" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="otp" class="control-label">Otp</label>
						<div class="form-group">
							<input type="text" name="otp" value="<?php echo ($this->input->post('otp') ? $this->input->post('otp') : $user['otp']); ?>" class="form-control" id="otp" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="login_with" class="control-label">Login With</label>
						<div class="form-group">
							<input type="text" name="login_with" value="<?php echo ($this->input->post('login_with') ? $this->input->post('login_with') : $user['login_with']); ?>" class="form-control" id="login_with" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="date_of_birth" class="control-label">Date Of Birth</label>
						<div class="form-group">
							<input type="text" name="date_of_birth" value="<?php echo ($this->input->post('date_of_birth') ? $this->input->post('date_of_birth') : $user['date_of_birth']); ?>" class="form-control" id="date_of_birth" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="zipcode" class="control-label">Zipcode</label>
						<div class="form-group">
							<input type="text" name="zipcode" value="<?php echo ($this->input->post('zipcode') ? $this->input->post('zipcode') : $user['zipcode']); ?>" class="form-control" id="zipcode" />
						</div>
					</div>
					<!--<div class="col-md-6">
						<label for="cdate" class="control-label">Cdate</label>
						<div class="form-group">
							<input type="text" name="cdate" value="<?php echo ($this->input->post('cdate') ? $this->input->post('cdate') : $user['cdate']); ?>" class="has-datetimepicker form-control" id="cdate" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="mdate" class="control-label">Mdate</label>
						<div class="form-group">
							<input type="text" name="mdate" value="<?php echo ($this->input->post('mdate') ? $this->input->post('mdate') : $user['mdate']); ?>" class="has-datetimepicker form-control" id="mdate" />
						</div>
					</div>-->
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
