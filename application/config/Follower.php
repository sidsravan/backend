<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Follower extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Follower_model');
    } 

    /*
     * Listing of followers
     */
    function index()
    {
        $params['limit'] = RECORDS_PER_PAGE; 
        $params['offset'] = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;
        
        $config = $this->config->item('pagination');
        $config['base_url'] = site_url('follower/index?');
        $config['total_rows'] = $this->Follower_model->get_all_followers_count();
        $this->pagination->initialize($config);

        $data['followers'] = $this->Follower_model->get_all_followers($params);
        
        $data['_view'] = 'follower/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new follower
     */
    function add()
    {   
        $this->load->library('form_validation');

		$this->form_validation->set_rules('from_id','From Id','required|integer');
		$this->form_validation->set_rules('type','Type','required|max_length[50]');
		$this->form_validation->set_rules('to_id','To Id','required|integer');
		$this->form_validation->set_rules('cdate','Cdate','required');
		$this->form_validation->set_rules('mdate','Mdate','required');
		
		if($this->form_validation->run())     
        {   
            $params = array(
				'from_id' => $this->input->post('from_id'),
				'type' => $this->input->post('type'),
				'to_id' => $this->input->post('to_id'),
				'cdate' => $this->input->post('cdate'),
				'mdate' => $this->input->post('mdate'),
            );
            
            $follower_id = $this->Follower_model->add_follower($params);
            redirect('follower/index');
        }
        else
        {            
            $data['_view'] = 'follower/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a follower
     */
    function edit($id)
    {   
        // check if the follower exists before trying to edit it
        $data['follower'] = $this->Follower_model->get_follower($id);
        
        if(isset($data['follower']['id']))
        {
            $this->load->library('form_validation');

			$this->form_validation->set_rules('from_id','From Id','required|integer');
			$this->form_validation->set_rules('type','Type','required|max_length[50]');
			$this->form_validation->set_rules('to_id','To Id','required|integer');
			$this->form_validation->set_rules('cdate','Cdate','required');
			$this->form_validation->set_rules('mdate','Mdate','required');
		
			if($this->form_validation->run())     
            {   
                $params = array(
					'from_id' => $this->input->post('from_id'),
					'type' => $this->input->post('type'),
					'to_id' => $this->input->post('to_id'),
					'cdate' => $this->input->post('cdate'),
					'mdate' => $this->input->post('mdate'),
                );

                $this->Follower_model->update_follower($id,$params);            
                redirect('follower/index');
            }
            else
            {
                $data['_view'] = 'follower/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The follower you are trying to edit does not exist.');
    } 

    /*
     * Deleting follower
     */
    function remove($id)
    {
        $follower = $this->Follower_model->get_follower($id);

        // check if the follower exists before trying to delete it
        if(isset($follower['id']))
        {
            $this->Follower_model->delete_follower($id);
            redirect('follower/index');
        }
        else
            show_error('The follower you are trying to delete does not exist.');
    }
    
}
