<?php

 
class Message extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model(array('Message_model','All_model'));
        $this->auth_res = basic_auth_check();
    } 

    function send(){
        $this->auth_res;
		$json_res='';
		$arr_res = array();
		$arr_res['status'] = 0;
		$arr_res['msg'] = $this->auth_res;
		if(strtolower($this->auth_res) == 'success'){
            if($this->input->post('user_id')
              && $this->input->post('to_user_id')
              && $this->input->post('msg')
            ){
                $insert_arr = array(
                    "user_id" => $this->input->post('user_id')
                    ,"to_id" => $this->input->post('to_user_id')
                    ,"msg" => $this->input->post('msg')
                );
                $insert_status = $this->db->insert('messages',$insert_arr);
                if($insert_status){
                    $arr_res['status'] = 1;
                    $arr_res['msg'] = 'Message added success';
                }
            }
        }
        echo json_encode($arr_res);
    }
    function messages_list(){
        $this->auth_res;
		$json_res='';
		$arr_res = array();
        $arr_res['status'] = 0;
        $arr_res['data'] = '';
		$arr_res['msg'] = $this->auth_res;
		if(strtolower($this->auth_res) == 'success'){
            if($this->input->post('user_id')
              && $this->input->post('to_user_id')
            ){
                $user_id = $this->input->post('user_id');
                $to_id = $this->input->post('to_user_id');
                $sql_query = "SELECT m.id,
                m.user_id,
                u.name,
                u.handle_name,
                u.profile_image,
                m.msg,
                m.to_id,
                u1.name as to_name,
                u1.handle_name as to_handle_name,
                u1.profile_image as to_profile_image,
                m.cdate
         FROM   messages AS m,
                users AS u,
                users AS u1
         WHERE  m.user_id IN ( '".$user_id."', '".$to_id."' )
                AND m.to_id IN( '".$user_id."', '".$to_id."' )
                AND m.user_id = u.id
                AND m.to_id = u1.id";
                $msg_data = $this->All_model->get_data($sql_query);
                if($msg_data){
                    $arr_res['status'] = 1;
                    $arr_res['msg'] = 'success';
                    $arr_res['data'] = $msg_data;
                }
            }
        }
        if(empty($arr_res['data']))
			$arr_res['msg'] = 'No records found';
        echo json_encode($arr_res);
    }
    /*
     * Listing of messages
     */
    function index()
    {
        $params['limit'] = RECORDS_PER_PAGE; 
        $params['offset'] = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;
        
        $config = $this->config->item('pagination');
        $config['base_url'] = site_url('message/index?');
        $config['total_rows'] = $this->Message_model->get_all_messages_count();
        $this->pagination->initialize($config);

        $data['messages'] = $this->Message_model->get_all_messages($params);
        
        $data['_view'] = 'message/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new message
     */
    function add()
    {   
        $this->load->library('form_validation');

		$this->form_validation->set_rules('user_id','User Id','required|integer');
		$this->form_validation->set_rules('to_id','To Id','required|integer');
		$this->form_validation->set_rules('accept_status','Accept Status','required|integer');
		$this->form_validation->set_rules('del_status','Del Status','required|integer');
		$this->form_validation->set_rules('cdate','Cdate','required');
		$this->form_validation->set_rules('mdate','Mdate','required');
		$this->form_validation->set_rules('msg','From Msg','required');
		$this->form_validation->set_rules('to_msg','To Msg','required');
		$this->form_validation->set_rules('block','Block','required');
		
		if($this->form_validation->run())     
        {   
            $params = array(
				'user_id' => $this->input->post('user_id'),
				'to_id' => $this->input->post('to_id'),
				'accept_status' => $this->input->post('accept_status'),
				'del_status' => $this->input->post('del_status'),
				'cdate' => $this->input->post('cdate'),
				'mdate' => $this->input->post('mdate'),
				'msg' => $this->input->post('msg'),
				'to_msg' => $this->input->post('to_msg'),
				'block' => $this->input->post('block'),
            );
            
            $message_id = $this->Message_model->add_message($params);
            redirect('message/index');
        }
        else
        {            
            $data['_view'] = 'message/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a message
     */
    function edit($id)
    {   
        // check if the message exists before trying to edit it
        $data['message'] = $this->Message_model->get_message($id);
        
        if(isset($data['message']['id']))
        {
            $this->load->library('form_validation');

			$this->form_validation->set_rules('user_id','User Id','required|integer');
			$this->form_validation->set_rules('to_id','To Id','required|integer');
			$this->form_validation->set_rules('accept_status','Accept Status','required|integer');
			$this->form_validation->set_rules('del_status','Del Status','required|integer');
			$this->form_validation->set_rules('cdate','Cdate','required');
			$this->form_validation->set_rules('mdate','Mdate','required');
			$this->form_validation->set_rules('msg','From Msg','required');
			$this->form_validation->set_rules('to_msg','To Msg','required');
			$this->form_validation->set_rules('block','Block','required');
		
			if($this->form_validation->run())     
            {   
                $params = array(
					'user_id' => $this->input->post('user_id'),
					'to_id' => $this->input->post('to_id'),
					'accept_status' => $this->input->post('accept_status'),
					'del_status' => $this->input->post('del_status'),
					'cdate' => $this->input->post('cdate'),
					'mdate' => $this->input->post('mdate'),
					'msg' => $this->input->post('msg'),
					'to_msg' => $this->input->post('to_msg'),
					'block' => $this->input->post('block'),
                );

                $this->Message_model->update_message($id,$params);            
                redirect('message/index');
            }
            else
            {
                $data['_view'] = 'message/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The message you are trying to edit does not exist.');
    } 

    /*
     * Deleting message
     */
    function remove($id)
    {
        $message = $this->Message_model->get_message($id);

        // check if the message exists before trying to delete it
        if(isset($message['id']))
        {
            $this->Message_model->delete_message($id);
            redirect('message/index');
        }
        else
            show_error('The message you are trying to delete does not exist.');
    }
    
}