<?php
 
class Album extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Album_model');
        $this->auth_res = basic_auth_check();
    } 
	function album_list(){
		$this->auth_res;
		$json_res=''; $arr_res = array();
		$arr_res['status'] = 0;
		$arr_res['msg'] = $this->auth_res;

		if(strtolower($this->auth_res) == 'success'){
			log_message('info', 'album-Request--> ' . var_export($_POST,true));
			$user_id = $this->input->post('user_id');
			$album_cond = '';
			if(!empty($this->input->post('album_id'))){
				$album_id = $this->input->post('album_id');
				$album_cond = "AND a.album_id = '".$album_id."'";
			}
			if(!empty($this->input->post('name')) && !empty($this->input->post('user_id'))){
				$name = strtolower($this->input->post('name'));
				$album_name_list = $this->All_model->get_data("SELECT id,user_id,name FROM album_names where user_id='".$user_id."' and LOWER(NAME) = '".$name."'");
				if(!empty($album_name_list[0]['id'])){
					$arr_res['status'] = 1;
					$arr_res['msg'] = 'Album name already exist.';
				}else{
					$arr_res['status'] = 1;
					$inser_arr = array(
						'user_id'=>$user_id,
						'name'=>$this->input->post('name')
					);
					$this->db->insert('album_names', $inser_arr);
					$arr_res['msg'] = 'Album name added successfully.';
				}
				$album_data = $this->All_model->get_data("SELECT id,user_id,name FROM album_names where user_id='".$user_id."' ORDER BY id DESC");
				$arr_res['data'] = $album_data;
			}else if(!empty($this->input->post('album_name')) && !empty($this->input->post('user_id')) && !empty($this->input->post('post_id'))){
					$post_id = $this->input->post('post_id');
					$arr_res['status'] = 1;
					
					$album_name = strtolower($this->input->post('album_name'));
					$album_name_list = $this->All_model->get_data("SELECT id,user_id,name FROM album_names where user_id='".$user_id."' and LOWER(NAME) = '".$album_name."'");
					if(!empty($album_name_list[0]['id'])){
						$album_id = $album_name_list[0]['id'];
					}
				
					$inser_arr = array(
						'user_id'=>$user_id,
						'post_id'=>$this->input->post('post_id'),
						'album_id'=>$album_id
					);
					$album_list = $this->All_model->get_data("SELECT id,user_id FROM albums where user_id='".$user_id."' and post_id = '".$post_id."' and album_id = '".$album_id."' ");
					if(!empty($album_list[0]['id'])){
						$arr_res['msg'] = 'Selected post already exist at your album.';
					}else{
						$this->db->insert('albums', $inser_arr);
						$arr_res['msg'] = 'Album added successfully.';
					}
			}else if(!empty($user_id)){
				$fromLimit=0; $toLimit=9;
				if($this->input->post('from') && $this->input->post('to')){
					$fromLimit = trim(strtolower($this->input->post('from')));
					$toLimit = trim(strtolower($this->input->post('to')));
				}
				$arr_res['status'] = 1;
				$arr_res['data'] = $this->All_model->get_data("SELECT a.id, u.id user_id,u.name,CONCAT('@',u.handle_name) AS handle_name, p.post_image, p.description post_description,p.post_type_id,u.profile_image, an.name as album_name,u.profile_image,p.cdate,
				(SELECT count(v.up_vote) FROM votes v where v.post_based_id = p.id and v.up_vote>0) as up_vote_count,
				(SELECT count(v1.up_vote) FROM votes v1 where v1.post_based_id= p.id and v1.down_vote>0) as down_vote_count,p.cdate,
				(SELECT COUNT(id) FROM comments WHERE post_id = p.id) AS comment_count
				FROM 
					albums a,
					album_names an,
					users u,
					posts p
				WHERE 
						a.album_id = an.id
				AND 	a.user_id = u.id
				AND 	a.post_id = p.id
				AND 	a.user_id = '".$user_id."'
				$album_cond
				ORDER BY a.id DESC");
			}
		}
		if($arr_res['status']==0){
			$arr_res['status'] = 0;
			$arr_res['msg'] = 'No Records found';
			$arr_res['data'] = '';
		}
		log_message('info', 'album-Response--> ' . var_export($arr_res,true));
		echo $json_res = json_encode($arr_res);
	}
	
	function album_name_list(){
		$this->auth_res;
		$json_res=''; $arr_res = array();
		$arr_res['status'] = 0;
		$arr_res['msg'] = $this->auth_res;
		if(strtolower($this->auth_res) == 'success'){
			if(!empty($this->input->post('user_id'))){
				$user_id = $this->input->post('user_id');
				$album_data = $this->All_model->get_data("SELECT id,user_id,name FROM album_names where user_id = '".$user_id."' ORDER BY id DESC");
				if(!empty($album_data)){
					$arr_res['status'] = 1;
					$arr_res['data'] = $album_data;
				}
			}
		}
		if(empty($arr_res['data'])){
			$arr_res['status'] = 0;
			$arr_res['msg'] = 'No Records found';
			$arr_res['data'] = '';
		}
		echo $json_res = json_encode($arr_res);
	}
	
    /*
     * Listing of albums
     */
    function index()
    {
        $flimit = $params['limit'] = RECORDS_PER_PAGE; 
        $last_limit = $params['offset'] = ($this->input->get('per_page')) ? $this->input->get('per_page') : '';
        
        $config = $this->config->item('pagination');
        $config['base_url'] = site_url('album/index?');
        $config['total_rows'] = $this->Album_model->get_all_albums_count();
        $this->pagination->initialize($config);
		$search_qry = '';
		if(!empty($this->input->post('search')) && $this->input->post('Search') == 'Submit'){
			$search_val = $this->input->post('search');
			$search_qry = "AND a.album_id LIKE '%{$search_val}%' ";
		}
        //$data['albums'] = $this->Album_model->get_all_albums($params);
        $sql_query = "SELECT a.id, a.album_id as name,u.handle_name AS user_id, p.post_image AS post_id, a.cdate
						FROM 
							albums a, 
							users u,
							posts p
						WHERE 
							a.user_id = u.id
						AND 	a.post_id = p.id
						$search_qry
						ORDER BY a.id DESC";
        $data['albums'] = $this->All_model->get_data($sql_query);
        $data['_view'] = 'album/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new album
     */
    function add()
    {   
        $this->load->library('form_validation');

		$this->form_validation->set_rules('user_id','User Id','required');
		$this->form_validation->set_rules('post_id','Post Id','required');
		//$this->form_validation->set_rules('name','Name','required');
		
		if($this->form_validation->run())     
        {   
            $params = array(
				'user_id' => $this->input->post('user_id'),
				'post_id' => $this->input->post('post_id'),
				'album_id' => $this->input->post('album_id'),
				'cdate' => $this->input->post('cdate'),
				'mdate' => $this->input->post('mdate'),
            );
            
            $album_id = $this->Album_model->add_album($params);
            redirect('album/index');
        }
        else
        {
			$this->load->model(array('User_model','Post_model','Album_name_model'));
			$data['all_users'] = $this->User_model->get_all_users();
			$data['posts'] = $this->Post_model->get_all_posts();
			$data['album_names'] = $this->Album_name_model->get_all_album_names();
            
            $data['_view'] = 'album/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a album
     */
    function edit($id)
    {   
        // check if the album exists before trying to edit it
        $data['album'] = $this->Album_model->get_album($id);
        
        if(isset($data['album']['id']))
        {
            $this->load->library('form_validation');

			$this->form_validation->set_rules('user_id','User Id','required');
			$this->form_validation->set_rules('post_id','Post Id','required');
			$this->form_validation->set_rules('album_id','album_id','required');
		
			if($this->form_validation->run())     
            {   
                $params = array(
					'user_id' => $this->input->post('user_id'),
					'post_id' => $this->input->post('post_id'),
					'album_id' => $this->input->post('album_id'),
					'cdate' => $this->input->post('cdate'),
					'mdate' => $this->input->post('mdate'),
                );

                $this->Album_model->update_album($id,$params);            
                redirect('album/index');
            }
            else
            {
				$this->load->model('User_model');
				$data['all_users'] = $this->User_model->get_all_users();

                $data['_view'] = 'album/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The album you are trying to edit does not exist.');
    } 

    /*
     * Deleting album
     */
    function remove($id)
    {
        $album = $this->Album_model->get_album($id);

        // check if the album exists before trying to delete it
        if(isset($album['id']))
        {
            $this->Album_model->delete_album($id);
            redirect('album/index');
        }
        else
            show_error('The album you are trying to delete does not exist.');
    }
    
}
