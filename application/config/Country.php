<?php
 
class Country extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Country_model');
        $this->auth_res = basic_auth_check();
    } 
	
	function countrieslist(){
		$this->auth_res;
		$json_res=''; $arr_res = array();
		$arr_res['status'] = 0;
		$arr_res['msg'] = $this->auth_res;

		if(strtolower($this->auth_res) == 'success'){
			$data = $this->Country_model->get_all_countries_list();
			if(!empty($data)){
				$arr_res = $data;
			}
		}
		echo $json_res = json_encode($arr_res);
	}

    /*
     * Listing of countries
     */
    function index()
    {
        $params['limit'] = RECORDS_PER_PAGE; 
        $params['offset'] = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;
        
        $config = $this->config->item('pagination');
        $config['base_url'] = site_url('country/index?');
        $config['total_rows'] = $this->Country_model->get_all_countries_count();
        $this->pagination->initialize($config);
		$params['search_val'] = '';
		if(!empty($this->input->post('search')) && $this->input->post('Search') == 'Submit'){
			$params['search_val'] = $this->input->post('search');
		}
        $data['countries'] = $this->Country_model->get_all_countries($params);
        
        $data['_view'] = 'country/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new country
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
            
            $country_id = $this->Country_model->add_country($params);
            redirect('country/index');
        }
        else
        {            
            $data['_view'] = 'country/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a country
     */
    function edit($id)
    {   
        // check if the country exists before trying to edit it
        $data['country'] = $this->Country_model->get_country($id);
        
        if(isset($data['country']['id']))
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

                $this->Country_model->update_country($id,$params);            
                redirect('country/index');
            }
            else
            {
                $data['_view'] = 'country/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The country you are trying to edit does not exist.');
    } 

    /*
     * Deleting country
     */
    function remove($id)
    {
        $country = $this->Country_model->get_country($id);

        // check if the country exists before trying to delete it
        if(isset($country['id']))
        {
            $this->Country_model->delete_country($id);
            redirect('country/index');
        }
        else
            show_error('The country you are trying to delete does not exist.');
    }
    
}
