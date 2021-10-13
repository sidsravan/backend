<?php
 
class Followers extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Followers_model');
        $this->auth_res = basic_auth_check();
    } 

	function following(){
		$this->auth_res;
		$json_res='';
		$arr_res = array();
		$arr_res['status'] = 0;
		$arr_res['msg'] = $this->auth_res;
		$arr_res['data'] = '';
		if(strtolower($this->auth_res) == 'success'){
			if(!empty($this->input->post('user_id'))
				&& !empty($this->input->post('type'))
				&& !empty($this->input->post('to_id'))
			){
				$update_status = $ins_status = '';
				$user_id = $this->input->post('user_id');
				$to_id = $this->input->post('to_id');
				$user_data = $this->All_model->get_data("SELECT public_private from users where id = '".$to_id."'");
				//echo '<pre>'; print_r($user_data); exit;
				// public_private  1= public , 0= private
				if($user_data[0]['public_private'] == 1 && strtolower($this->input->post('type')) != 'hash'){
					$arrInsert = array(
						"from_id"=>$this->input->post('user_id'),
						"type"=>$this->input->post('type'),
						"to_id"=>$this->input->post('to_id')
					);
					$ins_status = $this->db->insert('followers',$arrInsert);
				}else if(strtolower($this->input->post('type')) == 'hash'){
					$arrInsert = array(
						"from_id"=>$this->input->post('user_id'),
						"type"=>$this->input->post('type'),
						"to_id"=>$this->input->post('to_id')
					);
					$ins_status = $this->db->insert('followers',$arrInsert);
				}else{
					$update_status = $this->db->query("UPDATE users SET following_request = '".$user_id."' WHERE id = '".$to_id."'");
				}
				
				if($ins_status){
					$arr_res['status'] = 1;
					$arr_res['to_id'] =$this->input->post('to_id');
					$arr_res['msg'] = 'Your following successfully added';
				}
				if($update_status){
					$arr_res['status'] = 1;
					$arr_res['to_id'] =0;
					$arr_res['msg'] = 'Following user under private mode.we sent your request to following user.';
				}
			}
		}
		if($arr_res['status']==0){
			$arr_res['status'] = 0;
			$arr_res['msg'] = 'No Records found';
		}
		echo json_encode($arr_res);
	}
   
    
}
