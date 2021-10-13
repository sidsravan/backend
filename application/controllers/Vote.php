<?php
 
class Vote extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Vote_model');
    } 

    /*
     * Listing of votes
     */
    function index()
    {
        $params['limit'] = RECORDS_PER_PAGE; 
        $params['offset'] = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;
        
        $config = $this->config->item('pagination');
        $config['base_url'] = site_url('vote/index?');
        $config['total_rows'] = $this->Vote_model->get_all_votes_count();
        $this->pagination->initialize($config);

        $data['votes'] = $this->Vote_model->get_all_votes($params);
        
        $data['_view'] = 'vote/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new vote
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'comment_based_id' => $this->input->post('comment_based_id'),
				'user_based_id' => $this->input->post('user_based_id'),
				'vote_type_id' => $this->input->post('vote_type_id'),
				'value' => $this->input->post('value'),
				'cdate' => $this->input->post('cdate'),
				'mdate' => $this->input->post('mdate'),
            );
            
            $vote_id = $this->Vote_model->add_vote($params);
            redirect('vote/index');
        }
        else
        {
			$this->load->model('Comment_model');
			$data['all_comments'] = $this->Comment_model->get_all_comments();

			$this->load->model('User_model');
			$data['all_users'] = $this->User_model->get_all_users();

			$this->load->model('Vote_type_model');
			$data['all_vote_types'] = $this->Vote_type_model->get_all_vote_types();
            
            $data['_view'] = 'vote/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a vote
     */
    function edit($id)
    {   
        // check if the vote exists before trying to edit it
        $data['vote'] = $this->Vote_model->get_vote($id);
        
        if(isset($data['vote']['id']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'comment_based_id' => $this->input->post('comment_based_id'),
					'user_based_id' => $this->input->post('user_based_id'),
					'vote_type_id' => $this->input->post('vote_type_id'),
					'value' => $this->input->post('value'),
					'cdate' => $this->input->post('cdate'),
					'mdate' => $this->input->post('mdate'),
                );

                $this->Vote_model->update_vote($id,$params);            
                redirect('vote/index');
            }
            else
            {
				$this->load->model('Comment_model');
				$data['all_comments'] = $this->Comment_model->get_all_comments();

				$this->load->model('User_model');
				$data['all_users'] = $this->User_model->get_all_users();

				$this->load->model('Vote_type_model');
				$data['all_vote_types'] = $this->Vote_type_model->get_all_vote_types();

                $data['_view'] = 'vote/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The vote you are trying to edit does not exist.');
    } 

    /*
     * Deleting vote
     */
    function remove($id)
    {
        $vote = $this->Vote_model->get_vote($id);

        // check if the vote exists before trying to delete it
        if(isset($vote['id']))
        {
            $this->Vote_model->delete_vote($id);
            redirect('vote/index');
        }
        else
            show_error('The vote you are trying to delete does not exist.');
    }
    
}
