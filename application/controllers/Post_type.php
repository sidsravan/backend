<?php
 
class Post_type extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Post_type_model');
        $this->auth_res = basic_auth_check();
    } 

	function ptypelist(){
		$this->auth_res;
		$json_res='';
		$arr_res = array();
		$arr_res['status'] = 0;
		$arr_res['msg'] = $this->auth_res;
		if(strtolower($this->auth_res) == 'success'){
			$data = $this->All_model->get_data('SELECT id,name,cdate FROM post_types order by id desc');
			if(!empty($data)){
				$arr_res = $data;
			}
		}
		echo $json_res = json_encode($arr_res);
	}

    /*
     * Listing of post_types
     */
    function index()
    {
        $params['limit'] = RECORDS_PER_PAGE; 
        $params['offset'] = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;
        
        $config = $this->config->item('pagination');
        $config['base_url'] = site_url('post_type/index?');
        $config['total_rows'] = $this->Post_type_model->get_all_post_types_count();
        $this->pagination->initialize($config);
		$params['search_val'] = '';
		if(!empty($this->input->post('search')) && $this->input->post('Search') == 'Submit'){
			$params['search_val'] = $this->input->post('search');
		}
        $data['post_types'] = $this->Post_type_model->get_all_post_types($params);
        
        $data['_view'] = 'post_type/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new post_type
     */
    function add()
    {   
        $this->load->library('form_validation');

		$this->form_validation->set_rules('name','Name','required');
		
		if($this->form_validation->run())     
        {   
            $params = array(
				'name' => $this->input->post('name'),
				'cdate' => $this->input->post('cdate'),
				'mdate' => $this->input->post('mdate'),
            );
            
            $post_type_id = $this->Post_type_model->add_post_type($params);
            redirect('post_type/index');
        }
        else
        {            
            $data['_view'] = 'post_type/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a post_type
     */
    function edit($id)
    {   
        // check if the post_type exists before trying to edit it
        $data['post_type'] = $this->Post_type_model->get_post_type($id);
        
        if(isset($data['post_type']['id']))
        {
            $this->load->library('form_validation');

			$this->form_validation->set_rules('name','Name','required');
		
			if($this->form_validation->run())     
            {   
                $params = array(
					'name' => $this->input->post('name'),
					'cdate' => $this->input->post('cdate'),
					'mdate' => $this->input->post('mdate'),
                );

                $this->Post_type_model->update_post_type($id,$params);            
                redirect('post_type/index');
            }
            else
            {
                $data['_view'] = 'post_type/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The post_type you are trying to edit does not exist.');
    } 

    /*
     * Deleting post_type
     */
    function remove($id)
    {
        $post_type = $this->Post_type_model->get_post_type($id);

        // check if the post_type exists before trying to delete it
        if(isset($post_type['id']))
        {
            $this->Post_type_model->delete_post_type($id);
            redirect('post_type/index');
        }
        else
            show_error('The post_type you are trying to delete does not exist.');
    }
    
}
