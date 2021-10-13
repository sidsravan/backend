<?php
 
class City extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('City_model');
        $this->auth_res = basic_auth_check();
    } 
	function citylist(){
		$this->auth_res;
		$json_res=''; $arr_res = array();
		$arr_res['status'] = 0;
		$arr_res['msg'] = $this->auth_res;

		if(strtolower($this->auth_res) == 'success'){
			if(!empty($this->input->post('state_id'))){
				$data = $this->City_model->get_cities_state($this->input->post('state_id'));
				if(!empty($data)){
					$arr_res = $data;
				}else{
					$arr_res['msg'] = 'No records found';
				}
			}else{
				$arr_res['msg'] = 'State id not empty or Invalid';
			}
		}
		echo $json_res = json_encode($arr_res);
	}
    /*
     * Listing of cities
     */
    function index()
    {
        $params['limit'] = RECORDS_PER_PAGE; 
        $params['offset'] = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;
        
        $config = $this->config->item('pagination');
        $config['base_url'] = site_url('city/index?');
        $config['total_rows'] = $this->City_model->get_all_cities_count();
        $this->pagination->initialize($config);
		$params['search_val'] = '';
		if(!empty($this->input->post('search')) && $this->input->post('Search') == 'Submit'){
			$params['search_val'] = $this->input->post('search');
		}
        $data['cities'] = $this->City_model->get_all_cities($params);
        
        $data['_view'] = 'city/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new city
     */
    function add()
    {   
        $this->load->library('form_validation');

		$this->form_validation->set_rules('country_id','Country Id','required');
		$this->form_validation->set_rules('state_id','State Id','required');
		$this->form_validation->set_rules('name','Name','required');
		
		if($this->form_validation->run())     
        {   
            $params = array(
				'country_id' => $this->input->post('country_id'),
				'state_id' => $this->input->post('state_id'),
				'name' => $this->input->post('name'),
				'cdate' => $this->input->post('cdate'),
				'mdate' => $this->input->post('mdate'),
            );
            
            $city_id = $this->City_model->add_city($params);
            redirect('city/index');
        }
        else
        {
			$this->load->model('Country_model');
			$data['all_countries'] = $this->Country_model->get_all_countries();

			$this->load->model('State_model');
			$data['all_states'] = $this->State_model->get_all_states();
            
            $data['_view'] = 'city/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a city
     */
    function edit($id)
    {   
        // check if the city exists before trying to edit it
        $data['city'] = $this->City_model->get_city($id);
        
        if(isset($data['city']['id']))
        {
            $this->load->library('form_validation');

			$this->form_validation->set_rules('country_id','Country Id','required');
			$this->form_validation->set_rules('state_id','State Id','required');
			$this->form_validation->set_rules('name','Name','required');
		
			if($this->form_validation->run())     
            {   
                $params = array(
					'country_id' => $this->input->post('country_id'),
					'state_id' => $this->input->post('state_id'),
					'name' => $this->input->post('name'),
					'cdate' => $this->input->post('cdate'),
					'mdate' => $this->input->post('mdate'),
                );

                $this->City_model->update_city($id,$params);            
                redirect('city/index');
            }
            else
            {
				$this->load->model('Country_model');
				$data['all_countries'] = $this->Country_model->get_all_countries();

				$this->load->model('State_model');
				$data['all_states'] = $this->State_model->get_all_states();

                $data['_view'] = 'city/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The city you are trying to edit does not exist.');
    } 

    /*
     * Deleting city
     */
    function remove($id)
    {
        $city = $this->City_model->get_city($id);

        // check if the city exists before trying to delete it
        if(isset($city['id']))
        {
            $this->City_model->delete_city($id);
            redirect('city/index');
        }
        else
            show_error('The city you are trying to delete does not exist.');
    }
    
}
