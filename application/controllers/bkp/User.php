<?php
 
class User extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model(array('User_model','All_model'));
        $this->auth_res = basic_auth_check();
	} 
	function master_password(){
		$this->auth_res;
		$json_res='';
		$arr_res = array();
		$arr_res['status'] = 0;
		$arr_res['data'] = '';
		$arr_res['msg'] = $this->auth_res;
		if(strtolower($this->auth_res) == 'success'){
			if(!empty($this->input->post('user_id')) 
				&& !empty($this->input->post('current_password'))
				&& !empty($this->input->post('master_password'))
				&& !empty($this->input->post('confirm_master_password'))
			){
				$master_password = trim($this->input->post('master_password'));
				$confirm_master_password = trim($this->input->post('confirm_master_password'));
				if($master_password == $confirm_master_password){
					$user_id = $this->input->post('user_id');
					$password = $this->input->post('current_password');
					$user_data = $this->All_model->get_data("select * from users WHERE id = '".$user_id."' and password ='".$password."' and del_status = '1'");
					if(!empty($user_data)){
						$this->db->query("UPDATE users SET master_password = '".$confirm_master_password."' WHERE id = $user_id");
						$arr_res['status'] = 1;
						$arr_res['msg'] = 'success';
						$arr_res['data'] = 'Master password created success.';
					}else{
						$arr_res['status'] = 0;
						$arr_res['msg'] = 'Current password did not matched.';
					}
				}else{
					$arr_res['status'] = 0;
					$arr_res['msg'] = 'Master password and Confirm master password did not matched.';
				}
			}
		}
		echo json_encode($arr_res);
	}
	function change_password(){
		$this->auth_res;
		$json_res='';
		$arr_res = array();
		$arr_res['status'] = 0;
		$arr_res['data'] = '';
		$arr_res['msg'] = $this->auth_res;
		if(strtolower($this->auth_res) == 'success'){
			if(!empty($this->input->post('user_id')) 
				&& !empty($this->input->post('current_password'))
				&& !empty($this->input->post('change_password'))
				&& !empty($this->input->post('confirm_change_password'))
			){
				$master_password = trim($this->input->post('change_password'));
				$confirm_master_password = trim($this->input->post('confirm_change_password'));
				if($master_password == $confirm_master_password){
					$user_id = $this->input->post('user_id');
					$password = $this->input->post('current_password');
					$user_data = $this->All_model->get_data("select * from users WHERE id = '".$user_id."' and password ='".$password."'");
					if(!empty($user_data)){
						$this->db->query("UPDATE users SET password = '".$confirm_master_password."' WHERE id = $user_id");
						$arr_res['status'] = 1;
						$arr_res['msg'] = 'success';
						$arr_res['data'] = 'Change password created success.';
					}else{
						$arr_res['status'] = 0;
						$arr_res['msg'] = 'Current password did not matched.';
					}
				}else{
					$arr_res['status'] = 0;
					$arr_res['msg'] = 'Change password and Confirm Change password did not matched.';
				}
			}
		}
		echo json_encode($arr_res);
	}
	function monetise_account(){
		$this->auth_res;
		$json_res='';
		$arr_res = array();
		$arr_res['status'] = 0;
		$arr_res['data'] = '';
		$arr_res['msg'] = $this->auth_res;
		if(strtolower($this->auth_res) == 'success'){
			if(!empty($this->input->post('user_id'))){
				$user_id = $this->input->post('user_id');
				$followers_data = $this->All_model->get_data("SELECT count(to_id) as tot_followers from followers where to_id in('".$user_id."') ");
				if($followers_data[0]['tot_followers'] > 999){
					$insert_arr = array(
						'user_id' => $user_id
					);
					$this->db->insert('monetise_account',$insert_arr);
					$arr_res['msg'] = 'You are monetise account request has been registered. my team members will contact you soon.';
				}else{
					$arr_res['msg'] = 'You are not reached to upgrade to your account.';
				}
			}
		}
		echo json_encode($arr_res);
	}
    function block_user(){
		$this->auth_res;
		$json_res='';
		$arr_res = array();
		$arr_res['status'] = 0;
		$arr_res['msg'] = $this->auth_res;
		if(strtolower($this->auth_res) == 'success'){
			if(!empty($this->input->post('user_id')) && !empty($this->input->post('blocked_user_id'))){
				$user_id = $this->input->post('user_id');
				$blocked_user_id = $this->input->post('blocked_user_id');
				$user_data = $this->All_model->get_data("select block_user_ids from users WHERE id = $user_id and del_status = '1' ");
				if(!empty($user_data)){
					$arr = explode(",",$user_data[0]['block_user_ids']);
					if (!in_array($blocked_user_id, $arr)) {
						$blocked_user_data = $user_data[0]['block_user_ids'].','.$blocked_user_id;
						$this->db->query("UPDATE users SET block_user_ids = '".$blocked_user_data."' WHERE id = $user_id");
						$arr_res['status'] = 1;
						$arr_res['msg'] = 'blocked success';
					}
				}
			}
		}
		echo json_encode($arr_res);	
	}
	
	function manage_block_list(){
		$this->auth_res;
		$json_res='';
		$arr_res = array();
		$arr_res['status'] = 0;
		$arr_res['msg'] = $this->auth_res;
		if(strtolower($this->auth_res) == 'success'){
			if(!empty($this->input->post('user_id'))){
				$user_id = $this->input->post('user_id');
				$user_data = $this->All_model->get_data("select block_user_ids from users WHERE id = $user_id and del_status = '1' ");
				if(!empty($user_data)){
					$arr = explode(",",$user_data[0]['block_user_ids']);
					$blocked_users = array_filter($arr);
					$block_users = implode(",",$blocked_users);
					if(!empty($block_users)){
						$blocked_user_data = $this->All_model->get_data("SELECT id,user_type,name,handle_name,profile_image from users where id in ($block_users) and del_status = 1 ");
						if(!empty($blocked_user_data)){
							$arr_res['status'] = 1;
							$arr_res['data'] = $blocked_user_data;
						}
					}
				}
			}else{
				$arr_res['msg'] = 'No records found';
			}
		}
		echo json_encode($arr_res);
	}
	
    function get_users(){
		$this->auth_res;
		$json_res='';
		$arr_res = array();
		$arr_res['status'] = 0;
		$arr_res['msg'] = $this->auth_res;
		if(strtolower($this->auth_res) == 'success'){
			if(!empty($this->input->post('user_type'))){
				$fromLimit=0; $toLimit=9;
				if($this->input->post('from') && $this->input->post('to')){
					$fromLimit = $this->input->post('from');
					$toLimit = $this->input->post('to');
				}
				$utype = ucfirst($this->input->post('user_type'));
				$user_id = $this->input->post('user_id');
				$search_con = '';
				if(!empty($this->input->post('search_val'))){
					$search_val = $this->input->post('search_val');
					$search_con = "AND u.name LIKE '%".$search_val."%' OR u.handle_name LIKE '%".$search_val."%' ";
				}
				//$db_data = $this->All_model->get_data("SELECT id,user_type,name,concat('@',handle_name) as handle_name,profile_image FROM users WHERE user_type = '".$utype."' ORDER BY id DESC LIMIT $fromLimit, $toLimit");
				$db_data = $this->All_model->get_data("SELECT u.id,
															   u.user_type,
															   u.name,
															   Concat('@', u.handle_name) AS handle_name,
															   u.profile_image,
															   f.from_id as to_id
														FROM   users u
															   LEFT JOIN followers f
																	  ON f.to_id = u.id
																		 AND f.from_id = '".$user_id."'
														WHERE  u.user_type = '".$utype."' and u.del_status = '1'
														$search_con
														ORDER  BY id DESC");
				if(!empty($db_data)){	
					$arr_res['status'] = 1;
					$arr_res['data'] = $db_data;
				}else{
					$arr_res['msg'] = 'No Records found';
				}
			}else{
				$arr_res['msg'] = 'Input parameter should not be empty';
			}
		}
		echo json_encode($arr_res);	
	}
    
	function upassword(){
		$this->auth_res;
		$json_res='';
		$arr_res = array();
		$arr_res['status'] = 0;
		$arr_res['msg'] = $this->auth_res;
		if(strtolower($this->auth_res) == 'success'){
			if(!empty($this->input->post('handle_name'))){
				$hname = trim(strtolower(str_replace(" ","",$this->input->post('handle_name'))));
				$check_unique = $this->User_model->check_val('users','handle_name',$hname);
				
				if($check_unique == 0){
					$data['msg'] = 'Handle name already exist please choose another one';
				}else{
					$passcode = mt_rand(100000, 999999);
					$arrInsrt =  array('name' =>$this->input->post('name'),'handle_name' => $hname, 'passcode'=>$passcode, 'user_type'=>'Creator');
					$this->db->insert('users', $arrInsrt);
					echo $this->db->last_query();
					$data['udata'] = $arrInsrt;
				}
			}
		}
		$data['_view'] = 'user/upassword';
        $this->load->view('layouts/main',$data);
	}
	function handlelist(){
		$this->auth_res;
		$json_res='';
		$arr_res = array();
		$arr_res['status'] = 0;
		$arr_res['msg'] = $this->auth_res;
		if(strtolower($this->auth_res) == 'success'){
			if(!empty($this->input->post('handle_name'))){
				$hname = trim(strtolower(str_replace(" ","",$this->input->post('handle_name'))));
				$passcode = mt_rand(100000, 999999);
				$chk_handle = "select * from users where handle_name = '".$hname."' and del_status = '1' order by id desc limit 1";
				$user_data = $this->All_model->get_data($chk_handle);
				if(!empty($user_data)){
					if($this->input->post('login_with') == 'gmail'
					   || $this->input->post('login_with') == 'facebook'
					   || $this->input->post('login_with') == 'twitter'
					){
						$arr_res = array('status' => 1,
							'session_id'=> $user_data[0]['id'],
							'name'=> $user_data[0]['name'],
							'handle_name'=> $user_data[0]['handle_name'],
							'passcode'=> $user_data[0]['passcode'],
							'user_type'=> $user_data[0]['user_type'],
							'login_with'=> $user_data[0]['login_with'],
							'profile_image'=> $user_data[0]['profile_image'],
							'signup'=> 1,
							'msg'=> 'success'
						);
					}else{
						
						$arr_res['signup'] = 0;
						$arr_res['msg'] = 'Handle name already exit.';
					}
				}else{
					if($this->input->post('login_with') == 'gmail'
					   || $this->input->post('login_with') == 'facebook'
					   || $this->input->post('login_with') == 'twitter'
					){
						
						$data = [
							'handle_name' => $hname,
							'name' => $this->input->post('name'),
							'passcode' => $passcode,
							'password' => $passcode,
							'user_type' => $this->input->post('user_type'),
							'login_with' => $this->input->post('login_with'),
							'profile_image' => $this->input->post('profile_image')
						];
						$this->db->insert('users', $data); 
						$user_id = $this->db->insert_id();	
						$user_data = $this->User_model->get_user($user_id);
						$arr_res = array('status' => 1,
										  'session_id'=> $user_data['id'],
										  'name'=> $user_data['name'],
										  'handle_name'=> $user_data['handle_name'],
										  'passcode'=> $user_data['passcode'],
										  'user_type'=> $user_data['user_type'],
										  'login_with'=> $user_data['login_with'],
										  'profile_image'=> $user_data['profile_image'],
										  'signup'=> 1,
										  'msg'=> 'success'
										 ); 
					}else{
						$arrUpdate = array('handle_name' => $this->input->post('handle_name'),'name'=>$this->input->post('name'));
						$this->db->where('id', $this->input->post('session_id'));
						$up_status = $this->db->update('users', $arrUpdate);
						$user_data = $this->User_model->get_user($this->input->post('session_id'));
						if(!empty($user_data['id'])){
							$arr_res = array('status' => 1,
										  'session_id'=> $user_data['id'],
										  'name'=> $user_data['name'],
										  'handle_name'=> $user_data['handle_name'],
										  'passcode'=> $user_data['passcode'],
										  'user_type'=> $user_data['user_type'],
										  'login_with'=> $user_data['login_with'],
										  'profile_image'=> $user_data['profile_image'],
										  'signup'=> 1,
										  'msg'=> 'success'
										 ); 
						}else{
							$arr_res['signup'] = 0;
							$arr_res['msg'] = 'Invalid session Id';
						}
					}
				}
			}else{
				$data = $this->User_model->handlelist();
				if(!empty($data)){
					$arr_res = $data;
				}
			}
		}
		echo $json_res = json_encode($arr_res);
	}

	function phone_email_sign_up(){
		$this->auth_res;
		$json_res='';
		$arr_res = array();
		$arr_res['status'] = 0;
		$arr_res['msg'] = $this->auth_res;
		$arr_res['otp'] = '';
		if(strtolower($this->auth_res) == 'success'){
			if(!empty($this->input->post('otp'))){
				$check_unique = $this->User_model->check_val('users','otp',$this->input->post('otp'));
				if($check_unique == 0){
					$arr_res['status'] = 1;
					$arr_res['otp'] = 'ValidOtp';
					$arr_res['msg'] = 'success';
					$arr_res['session_id'] = $this->input->post('session_id');
				}else{
					$check_unique = $this->User_model->check_val('users','id',$this->input->post('session_id'));
					if($check_unique == 0){
						$msg = 'fail';
					}else{
						$msg = 'Invalid session Id';
					}
					$arr_res['otp'] = $msg;
					$arr_res['msg'] = $msg;
					$arr_res['session_id'] = $this->input->post('session_id');
				}
			}else{
				$arr_res['msg'] = "Input params cannot be empty.";
				
				if(!empty($this->input->post('phone_number'))){
					$type = $this->input->post('type');
					if($type == 'email'){
						$type_column = 'email';
						$alert_string = 'Email';
					}else{
						$type_column = 'phone_number';
						$alert_string = 'Mobile number';
					}
					$check_unique = $this->User_model->check_val('users',$type_column,$this->input->post('phone_number'));
					if($check_unique>0){
						$phone_otp = mt_rand(100000, 999999);
						$data = [
							$type_column => $this->input->post('phone_number'),
							'user_type' => $this->input->post('user_type'),
							'login_with' => $this->input->post('login_with'),
							'otp' => $phone_otp
						];
						$this->db->insert('users', $data); 
						$user_id = $this->db->insert_id();	
						$arr_res['status'] = 1;
						$arr_res['otp'] = $phone_otp;
						$arr_res['session_id'] = $user_id;
						$arr_res['msg'] = "success";
					}else{
						$arr_res['msg'] =  $alert_string." already exist.";
					}
				}
			}
		}
		echo json_encode($arr_res);
	}
	function basicinfo(){
		$this->auth_res;
		$json_res='';
		$arr_res = array();
		$arr_res['status'] = 0;
		$arr_res['msg'] = $this->auth_res;
		if(strtolower($this->auth_res) == 'success'){
			$arr_res['msg'] = 'Please provide correct input params';
			if(!empty($this->input->post('user_id'))){
				$update_params = [
					'password' => $this->input->post('password'),
					'date_of_birth' => $this->input->post('date_of_birth'),
					'gender' => $this->input->post('gender'),
					'countries_id' => 101, 
					'state_id' => 2, 
					'city_id' => 266 
				];
				$this->User_model->update_user($this->input->post('user_id'),$update_params);  
				$arr_res['status'] = 1;
				$arr_res['msg'] = "Inserted Success";
			}
		}
		echo json_encode($arr_res);
	}
	function profile_img(){
		$this->auth_res;
		$json_res='';
		$arr_res = array();
		$arr_res['status'] = 0;
		$arr_res['msg'] = $this->auth_res;
		if(strtolower($this->auth_res) == 'success'){
			$arr_res['msg'] = 'Please provide correct input params';
			if(!empty($this->input->post('user_id'))){
				
				$update_params = $user_data = '';
				if(!empty($this->input->post('profile_image'))){
					$img_url = base64_to_image($this->input->post('profile_image'));
					$update_params = ['profile_image' => $img_url];
				}else if(!empty($this->input->post('name'))){
					$update_params = ['name' => $this->input->post('name')];
				}else if(!empty($this->input->post('handle_name'))){
					$check_unique = $this->User_model->check_val('users','handle_name',$this->input->post('handle_name'));
					if($check_unique == 0){
						$update_params = ''; 
					}else{
						$update_params = ['handle_name' => $this->input->post('handle_name')];
					}
				}
				if(!empty($update_params)){
					$this->User_model->update_user($this->input->post('user_id'),$update_params);  
					$user_data = $this->User_model->get_user($this->input->post('user_id'));
				}
				if(!empty($user_data['id'])){
					$arr_res = array('status' => 1,
								  'session_id'=> $user_data['id'],
								  'name'=> $user_data['name'],
								  'handle_name'=> $user_data['handle_name'],
								  'passcode'=> $user_data['passcode'],
								  'user_type'=> $user_data['user_type'],
								  'login_with'=> $user_data['login_with'],
								  'profile_image'=> $user_data['profile_image'],
								  'phone_number'=> $user_data['phone_number'],
								  'msg'=> 'success'
								 ); 
				}else{
					$arr_res['msg'] = 'Invalid user Id';
				}
				
				$arr_res['status'] = 1;
				$arr_res['msg'] = "Inserted Success";
			}
		}
		echo json_encode($arr_res);
	}
	function upgrade_account(){
		$this->auth_res;
		$json_res='';
		$arr_res = array();
		$arr_res['status'] = 0;
		$arr_res['msg'] = $this->auth_res;
		if(strtolower($this->auth_res) == 'success'){
			$arr_res['msg'] = 'Please provide correct input params';
			log_message('info', 'upgrade_account-Request--> ' . var_export($_POST,true));
			if(!empty($this->input->post('user_id'))){
				$user_id = $this->input->post('user_id');
				$insert_arr = array("user_id"=>$user_id);
				$this->db->insert('upgrade_account', $insert_arr); 
				$lastQry = $this->db->last_query();
				log_message('info', 'upgrade_account-Response--> ' . var_export($lastQry,true));
				$arr_res['status'] = 1;
				$arr_res['msg'] = "Thanks for choosing your intrest. my team members will contact you soon.";
			}
		}
		echo json_encode($arr_res);
	}
	function report_user(){
		$this->auth_res;
		$json_res='';
		$arr_res = array();
		$arr_res['status'] = 0;
		$arr_res['msg'] = $this->auth_res;
		if(strtolower($this->auth_res) == 'success'){
			$arr_res['msg'] = 'Please provide correct input params';
			if(!empty($this->input->post('user_id')) 
				&& !empty($this->input->post('reported_user_id'))
				&& !empty($this->input->post('report_text'))
			){
				$user_id = $this->input->post('user_id');
				$insert_arr = array("user_id"=>$user_id
									,"report_user_id" => $this->input->post('reported_user_id')
									,"report_text" => $this->input->post('report_text')
									);
				$this->db->insert('report_user', $insert_arr); 
				$lastQry = $this->db->last_query();
				$arr_res['status'] = 1;
				$arr_res['msg'] = "Your report we recived. our team will check.";
			}
		}
		echo json_encode($arr_res);
	}
	function logincheck(){
		$this->auth_res;
		$json_res='';
		$arr_res = array();
		$arr_res['status'] = 0;
		$arr_res['signup'] = 0;
		$arr_res['msg'] = $this->auth_res;
		if(strtolower($this->auth_res) == 'success'){
			$arr_res['msg'] = 'Please provide correct input params';
			if(!empty($this->input->post('handle_name'))){
				$hname = trim(strtolower(str_replace(" ","",$this->input->post('handle_name'))));
				$cond = array('handle_name'=>$hname);
				$sql_query = "select id as session_id,name,handle_name,user_type,login_with,profile_image,passcode,password from users where handle_name = '".$hname."' and del_status = '1' "; 
				$udata = $this->User_model->get_data($sql_query);
				if(!empty($udata) && $udata[0]['session_id']){
					$passcode = $this->input->post('passcode');
					$user_data = $udata[0];
					if ($user_data['user_type'] == 'Creator'
						&& $user_data['handle_name'] == $hname
						&& $user_data['passcode'] == $passcode
					){
						$user_data['status'] =1;
						$user_data['signup'] =0; // 0 = creator
						$user_data['msg'] ='success';
						$arr_res = $user_data;
					}else if($user_data['user_type'] == 'User'
						&& $user_data['handle_name'] == $hname
						&& $user_data['password'] == $passcode)
					{
						$user_data['status'] =1;
						$user_data['signup'] =1; // 1 = user
						$user_data['msg'] ='success';
						$arr_res = $user_data;
					}else{
						$arr_res['msg'] = 'Invalid login credentials.';
					}
				}else{
					$arr_res['msg'] = 'Invalid handle name';
				}
				//echo '<pre>'; print_r($udata); exit;
			}
		}
		echo json_encode($arr_res);
	}



    /*
     * Listing of users
     */
    function index()
    {
        $params['limit'] = RECORDS_PER_PAGE; 
        $params['offset'] = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;
        
        $config = $this->config->item('pagination');
        $config['base_url'] = site_url('user/index?');
        $config['total_rows'] = $this->User_model->get_all_users_count();
        $this->pagination->initialize($config);
		$params['search_val'] = '';
		if(!empty($this->input->post('search')) && $this->input->post('Search') == 'Submit'){
			$params['search_val'] = $this->input->post('search');
		}
        $data['users'] = $this->User_model->get_all_users($params);
        
        $data['_view'] = 'user/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new user
     */
    function add()
    {   
        $this->load->library('form_validation');

		$this->form_validation->set_rules('name','Name','required');
		$this->form_validation->set_rules('handle_name','Handle Name','required');
		
		if($this->form_validation->run())     
        {
			//echo '<pre>'; print_r($this->input->post()); exit;   
            $params = array(
				'user_type' => $this->input->post('user_type'),
				'countries_id' => $this->input->post('countries_id'),
				'state_id' => $this->input->post('state_id'),
				'city_id' => $this->input->post('city_id'),
				'password' => $this->input->post('password'),
				'name' => $this->input->post('name'),
				'handle_name' => $this->input->post('handle_name'),
				'passcode' => $this->input->post('passcode'),
				'gender' => $this->input->post('gender'),
				'profile_image' => $this->input->post('profile_image'),
				'profile_state' => $this->input->post('profile_state'),
				'signup_with' => $this->input->post('signup_with'),
				'phone_number' => $this->input->post('phone_number'),
				'email' => $this->input->post('email'),
				'otp' => $this->input->post('otp'),
				'login_with' => $this->input->post('login_with'),
				'date_of_birth' => $this->input->post('date_of_birth'),
				'zipcode' => $this->input->post('zipcode'),
				'cdate' => $this->input->post('cdate'),
				'mdate' => $this->input->post('mdate'),
            );
            
            $user_id = $this->User_model->add_user($params);
            redirect('user/index');
        }
        else
        {
			$this->load->model('Country_model');
			$data['all_countries'] = $this->Country_model->get_all_countries();

			$this->load->model('State_model');
			$data['all_states'] = $this->State_model->get_all_states();

			$this->load->model('City_model');
			$data['all_cities'] = $this->City_model->get_all_cities();
            
            $data['_view'] = 'user/add';
            $this->load->view('layouts/main',$data);
        }
    }  
    function login()
    {   
		if(!empty($this->input->post('username')) && !empty($this->input->post('password'))){
			$uname = $this->input->post('username');
			$password = $this->input->post('password');
			$utype = 'Admin';
			$login_data = $this->All_model->get_data('SELECT * FROM users WHERE handle_name = "'.$uname.'" AND PASSWORD ="'.$password.'" AND user_type ="'.$utype.'" and del_status = "1" ');
			if($login_data){
				$arr_session = array(
									'id' => $login_data[0]['id']
									,'user_type' => $login_data[0]['user_type']
									,'name' => $login_data[0]['name']
									,'handle_name' => $login_data[0]['handle_name']
									,'profile_image' => $login_data[0]['profile_image']
									,'phone_number' => $login_data[0]['phone_number']
									,'email' => $login_data[0]['email']
								);
				$this->session->set_userdata($arr_session);
				$this->session->set_flashdata('success', 'login success');
				redirect('user/index');
			}else{
				$this->session->set_flashdata('error', 'Invalid username and password.please try again.');
			}
		}
        $data['_view'] = 'user/login';
        $this->load->view('layouts/main',$data);
    }  
	
	function delete_account()
    {   
		$this->auth_res;
		$json_res='';
		$arr_res = array();
		$arr_res['status'] = 0;
		$arr_res['data'] = 0;
		$arr_res['msg'] = $this->auth_res;
		if(strtolower($this->auth_res) == 'success'){
			if(!empty($this->input->post('user_id'))){
				$user_id = $this->input->post('user_id');
				$pass_con = $master_pass_con = '';
				if(!empty($this->input->post('delete_password'))){
					$del_pass = $this->input->post('delete_password');
					$pass_con = "AND password = '".$del_pass."' ";
				}
				if(!empty($this->input->post('delete_master_password'))){
					$del_master_pass = $this->input->post('delete_master_password');
					$master_pass_con = "AND master_password = '".$del_master_pass."' ";
				}
				$user_data = $this->All_model->get_data("SELECT * FROM users WHERE id = '".$user_id."' $pass_con $master_pass_con and del_status = '1' ");
				if($user_data){
					$master_password_status = 1;
					if($user_data[0]['master_password'] == 0 
						|| $user_data[0]['master_password'] == null 
						|| empty($user_data[0]['master_password']))
					{
						$master_password_status = 0;
					}
					$final_arr[] = array(
										'user_id'=>$user_data[0]['id']
										,'name'=>$user_data[0]['name']
										,'handle_name'=>$user_data[0]['handle_name']
										,'profile_image'=>$user_data[0]['profile_image']
										,'password'=>$user_data[0]['password']
										,'master_password_status'=>$master_password_status
										,'master_password'=>$user_data[0]['master_password']
									  );
					$arr_res['status'] = 1;
					$arr_res['data'] = $final_arr;
					
					if(!empty($this->input->post('delete_password'))){	
						$this->db->query("UPDATE users SET del_status = '0' WHERE id = $user_id");
					}
				}else{
					$arr_res['status'] = 0;
					$arr_res['msg'] = 'Invalid User details or Password did not match.';
				}
			}
		}
		echo json_encode($arr_res);
    }
    
	function logout(){
		$arr_session = array('id','user_type','name','handle_name','profile_image','phone_number','email');
		$this->session->unset_userdata($arr_session);
		$this->session->set_flashdata('success', 'Successfully loged out.');
		redirect('user/login');
	}
	
    /*
     * Editing a user
     */
    function edit($id)
    {   
        // check if the user exists before trying to edit it
        $data['user'] = $this->User_model->get_user($id);
        
        if(isset($data['user']['id']))
        {
            $this->load->library('form_validation');

			$this->form_validation->set_rules('name','Name','required');
			$this->form_validation->set_rules('handle_name','Handle Name','required');
		
			if($this->form_validation->run())     
            {   
                $params = array(
					'user_type' => $this->input->post('user_type'),
					'countries_id' => $this->input->post('countries_id'),
					'state_id' => $this->input->post('state_id'),
					'city_id' => $this->input->post('city_id'),
					'password' => $this->input->post('password'),
					'name' => $this->input->post('name'),
					'handle_name' => $this->input->post('handle_name'),
					'passcode' => $this->input->post('passcode'),
					'gender' => $this->input->post('gender'),
					'profile_image' => $this->input->post('profile_image'),
					'profile_state' => $this->input->post('profile_state'),
					'signup_with' => $this->input->post('signup_with'),
					'phone_number' => $this->input->post('phone_number'),
					'email' => $this->input->post('email'),
					'otp' => $this->input->post('otp'),
					'login_with' => $this->input->post('login_with'),
					'date_of_birth' => $this->input->post('date_of_birth'),
					'zipcode' => $this->input->post('zipcode'),
					'cdate' => $this->input->post('cdate'),
					'mdate' => $this->input->post('mdate'),
                );

                $this->User_model->update_user($id,$params);            
                redirect('user/index');
            }
            else
            {
				$this->load->model('Country_model');
				$data['all_countries'] = $this->Country_model->get_all_countries();

				$this->load->model('State_model');
				$data['all_states'] = $this->State_model->get_all_states();

				$this->load->model('City_model');
				$data['all_cities'] = $this->City_model->get_all_cities();

                $data['_view'] = 'user/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The user you are trying to edit does not exist.');
    } 

    /*
     * Deleting user
     */
    function remove($id)
    {
        $user = $this->User_model->get_user($id);

        // check if the user exists before trying to delete it
        if(isset($user['id']))
        {
            $this->User_model->delete_user($id);
            redirect('user/index');
        }
        else
            show_error('The user you are trying to delete does not exist.');
    }
    
}
