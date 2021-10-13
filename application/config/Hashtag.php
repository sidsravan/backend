<?php
 
class Hashtag extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Hashtag_model');
        $this->auth_res = basic_auth_check();
    } 

	function hashtags(){
		$this->auth_res;
		$json_res='';
		$arr_res = array();
		$arr_res['status'] = 0;
		$arr_res['msg'] = $this->auth_res;
		if(strtolower($this->auth_res) == 'success'){
			//log_message('logfile', 'hashtags-Request' . var_export($_POST,true));
			$user_id = $this->input->post('user_id');
			if(!empty($this->input->post('search_val'))){
				$search_val = $this->input->post('search_val');
				$search_val = str_ireplace("#","",$search_val);
				//$db_data = $this->All_model->get_data("SELECT id,user_id,NAME, '3k memes' AS followers_count FROM hashtags WHERE NAME LIKE '%".$search_val."%' ORDER BY id DESC");
				
				
				$db_data = $this->All_model->get_data("SELECT h.id,
															   h.user_id,
															   h.name,
															   IFNULL((SELECT	COUNT(f1.to_id) FROM followers f1 WHERE f1.type = 'hash' AND f1.to_id = h.id GROUP BY f1.to_id),0) AS followers_count,
															   f.to_id,
															   IFNULL(f.to_id,0) as hashtag_status
															FROM   hashtags h
															LEFT JOIN followers f ON f.from_id = h.user_id
															AND f.type = 'hash'
														WHERE  h.name LIKE '%".$search_val."%'
														ORDER  BY h.id DESC ");
				$arr_res['status'] = 1;
				$arr_res['data'] = $db_data;
			}else{
				$fromLimit=0; $toLimit=9;
				if($this->input->post('from') && $this->input->post('to')){
					$fromLimit = trim(strtolower($this->input->post('from')));
					$toLimit = trim(strtolower($this->input->post('to')));
				}
				
				$db_data = $this->All_model->get_data("SELECT h.id,h.user_id,h.name,
														IFNULL((SELECT	COUNT(f1.to_id) FROM followers f1 WHERE f1.type = 'hash' AND f1.to_id = h.id GROUP BY f1.to_id),0) AS followers_count,
														f.to_id,
														IFNULL(f.to_id,0) as hashtag_status
														FROM
															hashtags h
														LEFT JOIN followers f ON
															f.from_id = h.user_id AND f.type = 'hash'
														GROUP BY h.id
														ORDER BY h.id DESC");
				$arr_res['status'] = 1;
				$arr_res['data'] = $db_data;
			}
		}
		if(empty($arr_res['data'])){
			$arr_res['status'] = 0;
			$arr_res['msg'] = 'No Records found';
			$arr_res['data'] = '';
		}
		echo json_encode($arr_res);
	}
    /*
     * Listing of hashtags
     */
    function index()
    {
        $params['limit'] = RECORDS_PER_PAGE; 
        $params['offset'] = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;
        
        $config = $this->config->item('pagination');
        $config['base_url'] = site_url('hashtag/index?');
        $config['total_rows'] = $this->Hashtag_model->get_all_hashtags_count();
        $this->pagination->initialize($config);
		$params['search_val'] = '';
		if(!empty($this->input->post('blocked_filter')) && $this->input->post('Search') == 'Submit'){
			$params['blocked_filter'] = $this->input->post('blocked_filter');
		}
		if(!empty($this->input->post('search')) && $this->input->post('Search') == 'Submit'){
			$params['search_val'] = $this->input->post('search');
		}
        $data['hashtags'] = $this->Hashtag_model->get_all_hashtags($params);
        
        $data['_view'] = 'hashtag/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new hashtag
     */
    function add()
    {   
        $this->load->library('form_validation');

		$this->form_validation->set_rules('name','Name','required');
		
		if($this->form_validation->run())     
        {   
            $params = array(
				'user_id' => $this->input->post('user_id'),
				'post_id' => $this->input->post('post_id'),
				'name' => $this->input->post('name'),
				'followers' => $this->input->post('followers'),
            );
            
            $hashtag_id = $this->Hashtag_model->add_hashtag($params);
            redirect('hashtag/index');
        }
        else
        {
			$this->load->model('User_model');
			$data['all_users'] = $this->User_model->get_all_users();

			$this->load->model('Post_model');
			$data['all_posts'] = $this->Post_model->get_all_posts();
            
            $data['_view'] = 'hashtag/add';
            $this->load->view('layouts/main',$data);
        }
    }  
	function block($id){
		if(!empty($id)){
			$this->db->query("UPDATE hashtags SET block = '1' WHERE id = '".$id."'");
			$this->session->set_flashdata('success', 'Successfully blocked');
			redirect('hashtag/index');
		}
	}
	function unblock($id){
		if(!empty($id)){
			$this->db->query("UPDATE hashtags SET block = '0' WHERE id = '".$id."'");
			$this->session->set_flashdata('success', 'Successfully un blocked');
			redirect('hashtag/index');
		}
	}
    /*
     * Editing a hashtag
     */
    function edit($id)
    {   
        // check if the hashtag exists before trying to edit it
        $data['hashtag'] = $this->Hashtag_model->get_hashtag($id);
        
        if(isset($data['hashtag']['id']))
        {
            $this->load->library('form_validation');

			$this->form_validation->set_rules('name','Name','required');
		
			if($this->form_validation->run())     
            {   
                $params = array(
					'user_id' => $this->input->post('user_id'),
					'post_id' => $this->input->post('post_id'),
					'name' => $this->input->post('name'),
					'followers' => $this->input->post('followers'),
                );
				//echo '<pre>';print_r($params); exit;
                $this->Hashtag_model->update_hashtag($id,$params);            
                redirect('hashtag/index');
            }
            else
            {
				$this->load->model('User_model');
				$data['all_users'] = $this->User_model->get_all_users();

				$this->load->model('Post_model');
				$data['all_posts'] = $this->Post_model->get_all_posts();

                $data['_view'] = 'hashtag/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The hashtag you are trying to edit does not exist.');
    } 

    /*
     * Deleting hashtag
     */
    function remove($id)
    {
        $hashtag = $this->Hashtag_model->get_hashtag($id);

        // check if the hashtag exists before trying to delete it
        if(isset($hashtag['id']))
        {
            $this->Hashtag_model->delete_hashtag($id);
            redirect('hashtag/index');
        }
        else
            show_error('The hashtag you are trying to delete does not exist.');
    }
    
}
