<?php
 
class State extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('State_model');
        $this->auth_res = basic_auth_check();
    } 
	function statelist(){
		$this->auth_res;
		$json_res=''; $arr_res = array();
		$arr_res['status'] = 0;
		$arr_res['msg'] = $this->auth_res;

		if(strtolower($this->auth_res) == 'success'){
			if(!empty($this->input->post('country_id'))){
				$data = $this->State_model->get_states_country($this->input->post('country_id'));
				if(!empty($data)){
					$arr_res = $data;
				}else{
					$arr_res['msg'] = 'No records found';
				}
			}else{
				$arr_res['msg'] = 'Country id not empty or Invalid';
			}
		}
		echo $json_res = json_encode($arr_res);
	}
    /*
     * Listing of states
     */
    function index()
    {
        $params['limit'] = RECORDS_PER_PAGE; 
        $params['offset'] = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;
        
        $config = $this->config->item('pagination');
        $config['base_url'] = site_url('state/index?');
        $config['total_rows'] = $this->State_model->get_all_states_count();
        $this->pagination->initialize($config);
		$params['search_val'] = '';
		if(!empty($this->input->post('search')) && $this->input->post('Search') == 'Submit'){
			$params['search_val'] = $this->input->post('search');
		}
        $data['states'] = $this->State_model->get_all_states($params);
        
        $data['_view'] = 'state/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new state
     */
    function add()
    {   
        $this->load->library('form_validation');

		$this->form_validation->set_rules('country_id','Country Id','required');
		$this->form_validation->set_rules('name','Name','required');
		
		if($this->form_validation->run())     
        {   
            $params = array(
				'country_id' => $this->input->post('country_id'),
				'name' => $this->input->post('name'),
				'cdate' => $this->input->post('cdate'),
				'mdate' => $this->input->post('mdate'),
            );
            
            $state_id = $this->State_model->add_state($params);
            redirect('state/index');
        }
        else
        {
			$this->load->model('Country_model');
			$data['all_countries'] = $this->Country_model->get_all_countries();
            
            $data['_view'] = 'state/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a state
     */
    function edit($id)
    {   
        // check if the state exists before trying to edit it
        $data['state'] = $this->State_model->get_state($id);
        
        if(isset($data['state']['id']))
        {
            $this->load->library('form_validation');

			$this->form_validation->set_rules('country_id','Country Id','required');
			$this->form_validation->set_rules('name','Name','required');
		
			if($this->form_validation->run())     
            {   
                $params = array(
					'country_id' => $this->input->post('country_id'),
					'name' => $this->input->post('name'),
					'cdate' => $this->input->post('cdate'),
					'mdate' => $this->input->post('mdate'),
                );

                $this->State_model->update_state($id,$params);            
                redirect('state/index');
            }
            else
            {
				$this->load->model('Country_model');
				$data['all_countries'] = $this->Country_model->get_all_countries();

                $data['_view'] = 'state/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The state you are trying to edit does not exist.');
    } 

    /*
     * Deleting state
     */
    function remove($id)
    {
        $state = $this->State_model->get_state($id);

        // check if the state exists before trying to delete it
        if(isset($state['id']))
        {
            $this->State_model->delete_state($id);
            redirect('state/index');
        }
        else
            show_error('The state you are trying to delete does not exist.');
    }
    
}
