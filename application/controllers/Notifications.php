<?php
	class Notifications extends CI_Controller{
		function __construct()
		{
			parent::__construct();
			$this->auth_res = basic_auth_check();
		}
		
		function get_notifications(){
			$this->auth_res;
			$json_res='';
			$arr_res = array();
			$arr_res['status'] = 0;
			$arr_res['msg'] = $this->auth_res;
			if(strtolower($this->auth_res) == 'success'){
				$user_id = $this->input->post('user_id');
				$db_data = $this->All_model->get_data("SELECT u.name, CONCAT('@',u.handle_name) as handle_name,u.profile_image,u.cdate
														FROM
															notifications n,
															users u
														where 
															n.user_id = u.id
														order by n.id DESC");
				$arr_res['status'] = 1;
				$arr_res['data'] = $db_data;
			}
			if(empty($arr_res['data'])){
				$arr_res['status'] = 0;
				$arr_res['msg'] = 'No Records found';
				$arr_res['data'] = '';
			}
			echo json_encode($arr_res);
		}
	}	 
?>
