<?php
 
class Report_comment extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Report_comment_model');
    } 

    /*
     * Listing of Report_post
     */
    function index()
    {
        $params['limit'] = RECORDS_PER_PAGE; 
        $params['offset'] = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;
        
        $config = $this->config->item('pagination');
        $config['base_url'] = site_url('report_comment/index?');
        $config['total_rows'] = $this->Report_comment_model->get_all_report_comment_count();
        $this->pagination->initialize($config);
		$params['search_val'] = '';
		if(!empty($this->input->post('search')) && $this->input->post('Search') == 'Submit'){
			$params['search_val'] = $this->input->post('search');
		}
        $data['report_comment'] = $this->Report_comment_model->get_all_report_comment($params);
        
        $data['_view'] = 'report_comment/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new report_comment
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
            
            $report_comment_id = $this->Report_comment_model->add_report_comment($params);
            redirect('report_comment/index');
        }
        else
        {            
            $data['_view'] = 'report_comment/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a report_comment
     */
    function edit($id)
    {   
        // check if the vote_type exists before trying to edit it
        $data['vote_type'] = $this->Report_comment_model->get_vote_type($id);
        
        if(isset($data['vote_type']['id']))
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

                $this->Report_comment_model->update_vote_type($id,$params);            
                redirect('vote_type/index');
            }
            else
            {
                $data['_view'] = 'vote_type/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The vote_type you are trying to edit does not exist.');
    } 

    /*
     * Deleting vote_type
     */
    function remove($id)
    {
        $vote_type = $this->Report_comment_model->get_vote_type($id);

        // check if the vote_type exists before trying to delete it
        if(isset($vote_type['id']))
        {
            $this->Report_comment_model->delete_vote_type($id);
            redirect('vote_type/index');
        }
        else
            show_error('The vote_type you are trying to delete does not exist.');
    }
    
}
