<?php
 
class Post extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model(array('Post_model','All_model'));
        $this->auth_res = basic_auth_check();
    } 

	function postlist(){
		$this->auth_res;
		$json_res='';
		$arr_res = array();
		$arr_res['status'] = 0;
		$arr_res['msg'] = $this->auth_res;
		if(strtolower($this->auth_res) == 'success'){
			
			log_message('info', 'PostList-Request--> ' . var_export($_POST,true));
			
			$user_id = $this->input->post('user_id');
			// -- delete post start here --//
			if(!empty($this->input->post('user_id')) && !empty($this->input->post('post_del_id'))){
				$post_del_id = $this->input->post('post_del_id');
				$this->db->query("UPDATE posts SET del_status = '0' WHERE id = $post_del_id");
			}
			
			// -- delete post end here --//
			
			// -- Report post start here -- //
				if(!empty($this->input->post('report_text')) && !empty($this->input->post('post_id'))){
					$report_post = array(
					   'user_id'=>$this->input->post('user_id'),
					   'post_id'=>$this->input->post('post_id'),
					   'report_text'=>$this->input->post('report_text')
					);
					$this->db->insert('report_post', $report_post);
				}
			// -- Report post end here -- //
			
			// -- Post hide start here -- // 
				if(!empty($this->input->post('hide_post_id'))){
					$hide_post_id = $this->input->post('hide_post_id');
					
					$post_data = $this->All_model->get_data("select hide from posts WHERE id = $hide_post_id");
					if(!empty($post_data)){
						$arr = explode(",",$post_data[0]['hide']);
						if (!in_array($user_id, $arr)) {
							$pos_hide_data = $post_data[0]['hide'].','.$user_id;
							$this->db->query("UPDATE posts SET hide = '".$pos_hide_data."' WHERE id = $hide_post_id");
						}
					}
				}
			// -- Post hide end here -- // 
			
			if(!empty($this->input->post('userId')) && !empty($this->input->post('post_image'))){
				$img_url = base64_to_image($this->input->post('post_image'));
				$desc = $this->input->post('post_description');
				$post_inser_arr = array(
				   'user_id'=>$this->input->post('userId'),
				   'post_type_id'=>$this->input->post('ptypeId'),
				   'post_image'=>$img_url,
				   'description'=>$this->input->post('post_description')
				);
				if($this->input->post('post_id')>0){
					$this->Post_model->update_post($this->input->post('post_id'),$post_inser_arr);
				}else{
					$this->db->insert('posts', $post_inser_arr);            
				}
				$post_ins_id = $this->db->insert_id();
				$arrDesc = explode(" ",$desc);
				$pattern = '/#/i';
				if(!empty($arrDesc)){
					$matched_hashtags = [];
					for($i=0; $i < count($arrDesc); $i++)
					{
						if(preg_match($pattern, $arrDesc[$i])){
							$matched_hashtag_name = str_replace("#","",strtolower($arrDesc[$i]));
							$check_unique = $this->All_model->check_val('hashtags','name',$matched_hashtag_name);
							if($check_unique > 0){
								$matched_hashtags[] = array("user_id"=>$this->input->post('userId')
															,"post_id"=>$post_ins_id
															,"name"=>$matched_hashtag_name
														    );
							}
						}
					}
					if(!empty($matched_hashtags)){
						$this->db->insert_batch('hashtags', $matched_hashtags); 
					}
				}

				$arr_res['status'] = 1;
				if($this->input->post('post_id')>0){
					$arr_res['msg'] = 'Updated Success';
				}else{
					$arr_res['msg'] = 'Inserted Success';
				}
				$arr_res['post_image'] = $img_url;
			}else{
				$fromLimit=0; $toLimit=9;
				if($this->input->post('from') && $this->input->post('to')){
					$fromLimit = $this->input->post('from');
					$toLimit = $this->input->post('to');
				}
				$sql_query = "SELECT p.id,p.user_id,p.post_image, p.description as post_description, 1 as commentids,u.name,CONCAT('@',u.handle_name) AS handle_name,u.profile_image,
(SELECT count(v.up_vote) FROM votes v where v.post_based_id = p.id and v.up_vote>0) as up_vote_count,
(SELECT count(v1.up_vote) FROM votes v1 where v1.post_based_id= p.id and v1.down_vote>0) as down_vote_count,p.cdate,
(SELECT COUNT(id) FROM comments WHERE post_id = p.id) AS comment_count,p.post_type_id,
(SELECT vs.up_vote FROM votes vs where vs.post_based_id = p.id and vs.up_vote = '".$user_id."' order by vs.id limit 1) as up_vote_user_id,
(SELECT vs1.down_vote FROM votes vs1 where vs1.post_based_id = p.id and vs1.down_vote = '".$user_id."' order by vs1.id limit 1) as down_vote_user_id
FROM 
	posts p,users u
where
    p.user_id = u.id 
    AND p.del_status = 1
    AND NOT FIND_IN_SET('".$user_id."',p.hide) <> 0
    order by p.id desc LIMIT $fromLimit, $toLimit";
				if(!empty($this->input->post('report_text'))){
					$arr_res['status'] = 1;
					$arr_res['msg'] = 'Post reporting added';
					$post_data = $arr_res;
				}else{
					$post_data = $this->All_model->get_data($sql_query);
				}
				if(!empty($post_data)){	
					$arr_res = $post_data;
				}
			}
		}
		log_message('info', 'PostList-Respos--> ' . var_export($arr_res,true));
		if(empty($arr_res))
			$arr_res['msg'] = 'No records found';
		echo json_encode($arr_res);
	}

	function likes(){
		$this->auth_res;
		$json_res='';
		$arr_res = array();
		$arr_res['status'] = 0;
		$arr_res['msg'] = $this->auth_res;
		if(strtolower($this->auth_res) == 'success'){
			//log_message('REQUEST', var_export($_POST,true));
			if(!empty($this->input->post('id')) && !empty($this->input->post('type'))){
				if($this->input->post('type') == 'upvote'){
					$type = 1;
					$down_vote = 0;
					$voteVal = $up_vote = $this->input->post('up_vote');
				}else if($this->input->post('type') == 'downvote'){
					$type = 2;
					$up_vote = 0;
					$voteVal = $down_vote = $this->input->post('down_vote');
				}
				$sql_cond = "and (up_vote = '".$voteVal."' or down_vote = '".$voteVal."') ";
				$cid = $this->input->post('id');
				$sel_qry = "SELECT * FROM votes WHERE post_based_id = $cid $sql_cond";
				$vdata = $this->All_model->get_data($sel_qry);
				if(empty($vdata[0]['id'])){
					$post_inser_arr = array(
					   'post_based_id'=>$this->input->post('id'),
					   'vote_type_id'=>$type,
					   'up_vote'=>$up_vote,
					   'down_vote'=>$down_vote
					);
					$this->db->insert('votes', $post_inser_arr);
				}else{
					$vid = $vdata[0]['id'];
					$vote_update_qry = $this->db->query("UPDATE votes SET down_vote =$down_vote,up_vote=$up_vote WHERE post_based_id = $cid AND id = $vid ");
				}
				$up_vote_query = 'SELECT COUNT(up_vote) AS up_vote_count FROM votes where up_vote>0 and post_based_id= '.$this->input->post('id');
				$down_vote_query = 'SELECT COUNT(down_vote) AS down_vote_count FROM votes where down_vote>0 and post_based_id= '.$this->input->post('id');
				$up_votes_data = $this->All_model->get_data($up_vote_query);
				$down_votes_data = $this->All_model->get_data($down_vote_query);
				$arr_res['status'] = 1;
				$arr_res['msg'] = 'Inserted Success';
				$up_vote_count = $down_vote_count = 0;
				if(isset($up_votes_data[0]['up_vote_count']))
					$up_vote_count = $up_votes_data[0]['up_vote_count'];
				
				if(isset($down_votes_data[0]['down_vote_count']))
					$down_vote_count = $down_votes_data[0]['down_vote_count'];
				
				$arr_res['up_vote_count'] = $up_vote_count;
				$arr_res['down_vote_count'] = $down_vote_count;
			}else{
				$sql_query = 'select p.id,p.post_image,p.description as post_description, p.cdate
							  ,1 as up_vote_count
							  ,1 as down_vote_count 
							  ,1 as up_vote 
							  ,1 as down_vote 
							  ,1 as commentids
                              ,u.name
                              ,u.handle_name
                              ,u.profile_image
							from posts p,
                                 users u
							order by p.id desc';
				$post_data = $this->All_model->get_data($sql_query);
				if(!empty($post_data)){
					$arr_res = $post_data;
				}
			}
		}
		//log_message('Response ==>', var_export($arr_res,true));

		echo json_encode($arr_res);
	}

	function votes(){
		$this->auth_res;
		$json_res='';
		$arr_res = array();
		$arr_res['status'] = 0;
		$arr_res['msg'] = $this->auth_res;
		if(strtolower($this->auth_res) == 'success'){
			//log_message('REQUEST', var_export($_POST,true));
			if(!empty($this->input->post('id')) && !empty($this->input->post('type'))){
				if($this->input->post('type') == 'upvote'){
					$type = 1;
					$down_vote = 0;
					$voteVal = $up_vote = $this->input->post('up_vote');
				}else if($this->input->post('type') == 'downvote'){
					$type = 2;
					$up_vote = 0;
					$voteVal = $down_vote = $this->input->post('down_vote');
				}
				$sql_cond = "and (up_vote = '".$voteVal."' or down_vote = '".$voteVal."') ";
				$cid = $this->input->post('id');
				$sel_qry = "SELECT * FROM votes WHERE post_based_id = $cid $sql_cond";
				$vdata = $this->All_model->get_data($sel_qry);
				if(empty($vdata[0]['id'])){
					$post_inser_arr = array(
					   'post_based_id'=>$this->input->post('id'),
					   'vote_type_id'=>$type,
					   'up_vote'=>$up_vote,
					   'down_vote'=>$down_vote
					);
					$this->db->insert('votes', $post_inser_arr);
				}else{
					$vid = $vdata[0]['id'];
					$vote_update_qry = $this->db->query("UPDATE votes SET down_vote =$down_vote,up_vote=$up_vote WHERE post_based_id = $cid AND id = $vid ");
				}
				$up_vote_query = 'SELECT COUNT(up_vote) AS up_vote_count FROM votes where up_vote>0 and post_based_id= '.$this->input->post('id');
				$down_vote_query = 'SELECT COUNT(down_vote) AS down_vote_count FROM votes where down_vote>0 and post_based_id= '.$this->input->post('id');
				$up_votes_data = $this->All_model->get_data($up_vote_query);
				$down_votes_data = $this->All_model->get_data($down_vote_query);
				$arr_res['status'] = 1;
				$arr_res['msg'] = 'Inserted Success';
				$up_vote_count = $down_vote_count = 0;
				if(isset($up_votes_data[0]['up_vote_count']))
					$up_vote_count = $up_votes_data[0]['up_vote_count'];
				
				if(isset($down_votes_data[0]['down_vote_count']))
					$down_vote_count = $down_votes_data[0]['down_vote_count'];
				
				$arr_res['up_vote_count'] = $up_vote_count;
				$arr_res['down_vote_count'] = $down_vote_count;
			}else{
				$sql_query = 'select p.id,p.post_image,p.description as post_description, p.cdate
							  ,1 as up_vote_count
							  ,1 as down_vote_count 
							  ,1 as up_vote 
							  ,1 as down_vote 
							  ,1 as commentids
                              ,u.name
                              ,u.handle_name
                              ,u.profile_image
							from posts p,
                                 users u
							order by p.id desc';
				$post_data = $this->All_model->get_data($sql_query);
				if(!empty($post_data)){
					$arr_res = $post_data;
				}
			}
		}
		//log_message('Response ==>', var_export($arr_res,true));

		echo json_encode($arr_res);
	}
	
    /*
     * Listing of posts
     */
    function index()
    {
        $flimit = $params['limit'] = RECORDS_PER_PAGE; 
        $last_limit = $params['offset'] = ','.($this->input->get('per_page')) ? $this->input->get('per_page') : '';
        
        $config = $this->config->item('pagination');
        $config['base_url'] = site_url('post/index?');
        $config['total_rows'] = $this->Post_model->get_all_posts_count();
        $this->pagination->initialize($config);

        //$data['posts'] = $this->Post_model->get_all_posts($params);
        $sql_query = "SELECT p.id,u.handle_name,pt.name,p.post_image,p.description AS post_description, p.cdate 
					FROM 
						posts p, 
						users u,
						post_types pt
					WHERE 
						p.user_id=u.id
					AND     p.post_type_id =pt.id
					ORDER BY p.id DESC LIMIT $flimit $last_limit";
        $data['posts'] = $this->All_model->get_data($sql_query);
        $data['_view'] = 'post/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new post
     */
    function add()
    {   
        $this->load->library('form_validation');

		$this->form_validation->set_rules('post_image','Post Image','required');
		$this->form_validation->set_rules('description','Description','required');
		
		if($this->form_validation->run())     
        {   
            $params = array(
				'user_id' => $this->input->post('user_id'),
				'post_type_id' => $this->input->post('post_type_id'),
				'post_image' => $this->input->post('post_image'),
				'cdate' => $this->input->post('cdate'),
				'mdate' => $this->input->post('mdate'),
				'description' => $this->input->post('description'),
            );
            
            $post_id = $this->Post_model->add_post($params);
            redirect('post/index');
        }
        else
        {
			$this->load->model('User_model');
			$data['all_users'] = $this->User_model->get_all_users();

			$this->load->model('Post_type_model');
			$data['all_post_types'] = $this->Post_type_model->get_all_post_types();
            
            $data['_view'] = 'post/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a post
     */
    function edit($id)
    {   
        // check if the post exists before trying to edit it
        $data['post'] = $this->Post_model->get_post($id);
        
        if(isset($data['post']['id']))
        {
            $this->load->library('form_validation');

			$this->form_validation->set_rules('post_image','Post Image','required');
			$this->form_validation->set_rules('description','Description','required');
		
			if($this->form_validation->run())     
            {   
                $params = array(
					'user_id' => $this->input->post('user_id'),
					'post_type_id' => $this->input->post('post_type_id'),
					'post_image' => $this->input->post('post_image'),
					'cdate' => $this->input->post('cdate'),
					'mdate' => $this->input->post('mdate'),
					'description' => $this->input->post('description'),
                );

                $this->Post_model->update_post($id,$params);            
                redirect('post/index');
            }
            else
            {
				$this->load->model('User_model');
				$data['all_users'] = $this->User_model->get_all_users();

				$this->load->model('Post_type_model');
				$data['all_post_types'] = $this->Post_type_model->get_all_post_types();

                $data['_view'] = 'post/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The post you are trying to edit does not exist.');
    } 

    /*
     * Deleting post
     */
    function remove($id)
    {
        $post = $this->Post_model->get_post($id);

        // check if the post exists before trying to delete it
        if(isset($post['id']))
        {
            $this->Post_model->delete_post($id);
            redirect('post/index');
        }
        else
            show_error('The post you are trying to delete does not exist.');
    }
    
}
