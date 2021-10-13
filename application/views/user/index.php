<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
				<div class="col-md-1">
					<h3 class="box-title">Users </h3>
            	</div>
				<div class="col-md-5">
					<?php echo form_open('user/index'); ?>
					<h3 class="box-title">Users type : </h3>
						<select name="user_filter" >
							<option value="">select </option>
							<option value="User">User </option>
							<option value="Creator">Creator </option>
						</select>
						<h3 class="box-title">login with : </h3>
						<select name="login_with" >
							<option value="">select </option>
							<option value="signup">Signup </option>
							<option value="gmail">Gmail </option>
							<option value="facebook">Facebook </option>
						</select>
					</div>
					<div class="col-md-6">
						<input type="text" name="search" placeholder="Users Search"> 
						<input type="submit" name="Search" class="btn-warning searchl">
						<a href="<?php echo site_url('user/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                    <?php echo form_close(); ?>
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>ID</th>
						<th>User Type</th>
						<th>Name</th>
						<th>Handle Name</th>
						<th>Password</th>
						<th>Passcode</th>
						<th>Gender</th>
						<th>Profile Image</th>
						<th>Signup With</th>
						<th>Phone Number</th>
						<th>Date Of Birth</th>
						<th>Cdate</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($users as $u){ ?>
                    <tr>
						<td><?php echo $u['id']; ?></td>
						<td><?php echo $u['user_type']; ?></td>
						<td><?php echo $u['name']; ?></td>
						<td><?php echo $u['handle_name']; ?></td>
						<td><?php echo $u['password']; ?></td>
						<td><?php echo $u['passcode']; ?></td>
						<td><?php echo $u['gender']; ?></td>
						<td><img src="<?php echo base_url().'/'.$u['profile_image']; ?>" width="10%" class="zoom"></td>
						<td><?php echo $u['signup_with']; ?></td>
						<td><?php echo $u['phone_number']; ?></td>
						<td><?php echo $u['date_of_birth']; ?></td>
						<td><?php echo $u['cdate']; ?></td>
						<td>
                            <a href="<?php echo site_url('user/edit/'.$u['id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('user/remove/'.$u['id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                <div class="pull-right">
                    <?php echo $this->pagination->create_links(); ?>                    
                </div>                
            </div>
        </div>
    </div>
</div>
<style>
.zoom {
  padding: 50px;
  transition: transform .2s; /* Animation */
  width: 200px;
  height: 200px;
  margin: 0 auto;
}

.zoom:hover {
  transform: scale(1.5); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
}
</style>
