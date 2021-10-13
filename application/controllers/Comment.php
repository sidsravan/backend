<?php

class Comment extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model(array('Comment_model','All_model'));
        $this->auth_res = basic_auth_check();
    } 

    /*
     * Listing of comments
     */
    function commentList($user_id = null){
		$this->auth_res;
		$json_res='';
		$arr_res = array();
		$arr_res['status'] = 0;
		$arr_res['msg'] = $this->auth_res;
		$up_vote_status = $down_vote_status = '';
		if(!empty($user_id)){
			$up_vote_status = "(SELECT up_vote FROM votes WHERE up_vote = $user_id ) AS up_vote_status";
			$down_vote_status = "(SELECT down_vote FROM votes WHERE down_vote = $user_id ) AS down_vote_status";
		}
		log_message('info', 'CommentList-Request--> ' . var_export($_POST,true));
		if(strtolower($this->auth_res) == 'success'){
			if(!empty($this->input->post('user_id')) && !empty($this->input->post('post_id')) && empty($this->input->post('hide_com_id')) && empty($this->input->post('del_com_id')) && empty($this->input->post('report_comment'))){
				$user_id = $this->input->post('user_id');
				$img_url = base64_to_image($this->input->post('comment_image'));
				$comment_inser_arr = array(
				   'user_id'=>$this->input->post('user_id'),
				   'post_id'=>$this->input->post('post_id'),
				   'comment_text'=>$this->input->post('comment_text'),
				   'comment_image'=>$img_url,
				   'parent_id'=>$this->input->post('parent_id')
				);
				$this->db->insert('comments', $comment_inser_arr);
				$post_id = $this->input->post('post_id');
				$comments_sql = 'SELECT c.id,c.user_id,c.post_id,c.comment_text, c.comment_image,c.parent_id,u.name,u.handle_name,u.profile_image,
(SELECT COUNT(v.up_vote) FROM votes v WHERE v.comment_based_id = c.id AND v.up_vote>0) AS up_vote_count,
(SELECT COUNT(v.down_vote) FROM votes v WHERE v.comment_based_id = c.id AND v.down_vote>0) AS down_vote_count,c.cdate as cdate_date,
IFNULL((SELECT vs.up_vote FROM votes vs where vs.comment_based_id = c.id and vs.up_vote = "'.$user_id.'" order by vs.id limit 1),0) as up_vote_user_id,
IFNULL((SELECT vs1.down_vote FROM votes vs1 where vs1.comment_based_id = c.id and vs1.down_vote = "'.$user_id.'" order by vs1.id limit 1),0) as down_vote_user_id
FROM 
	comments c,
	users u
WHERE 
c.user_id =u.id 
AND c.post_id = "'.$post_id.'"
AND c.parent_id = 0
AND c.del_status = 1
ORDER BY c.id ASC';
				$post_data = $this->All_model->get_data($comments_sql);
				if(!empty($post_data)){	
					$arr_res = $post_data;
				}
			}else if(!empty($this->input->post('postid')) || !empty($this->input->post('Postid')) || !empty($this->input->post('post_id'))){
				$del_com_id = $hide_qry = '';
				
				if(!empty($this->input->post('postid')))
					$postId = $this->input->post('postid');
					
				if(!empty($this->input->post('Postid')))
					$postId = $this->input->post('Postid');

				if(!empty($this->input->post('post_id')))
					$postId = $this->input->post('post_id');

				$user_id = '';
				if(!empty($this->input->post('user_id')))
					$user_id = $this->input->post('user_id');
				
				// -- Delete comment Start here -- //
				if(!empty($this->input->post('del_com_id'))){
					$del_com_id = $this->input->post('del_com_id');
					//$this->db->query("delete FROM comments WHERE id = '".$del_com_id."' AND post_id = '".$postId."'");
					$this->db->query("UPDATE comments SET del_status = '0' WHERE id = $del_com_id");
				}
				// -- Delete comment End here -- //
				
				// -- Comment hide start here -- // 
				if(!empty($this->input->post('hide_com_id'))){
					$hide_com_id = $this->input->post('hide_com_id');
					
					$com_data = $this->All_model->get_data("select hide from comments WHERE post_id = $postId AND id = $hide_com_id");
					if(!empty($com_data)){
						$arr = explode(",",$com_data[0]['hide']);
						if (!in_array($user_id, $arr)) {
							$com_hide_data = $com_data[0]['hide'].','.$user_id;
							$this->db->query("UPDATE comments SET hide = '".$com_hide_data."' WHERE id = $hide_com_id");
						}
						$hide_qry = "AND NOT FIND_IN_SET('".$user_id."',c.hide) <> 0";
					}
				}
				// -- Comment hide end here -- // 
				
				
				
				$order = 'ORDER BY c.id ASC';
				// -- Most recent comment start here -- //
				if(strtolower($this->input->post('most_recent')) == 'y'){
					$order = 'ORDER BY c.id DESC';
				}
				// -- Most recent comment end here -- //
				
				// -- Most discussed comment start here -- //
				if(strtolower($this->input->post('most_discussed')) == 'y'){
					$order = 'ORDER BY c.id DESC';
				}
				// -- Most discussed comment end here -- //
				
				// -- Most upvoted comment start here -- //
				if(strtolower($this->input->post('most_upvoted')) == 'y'){
					$order = 'ORDER BY up_vote_count DESC';
				}
				// -- Most upvoted comment end here -- //
				
				// -- Report comment start here -- //
				if(!empty($this->input->post('report_comment')) && !empty($this->input->post('comment_id'))){
					$report_comment = array(
					   'user_id '=>$this->input->post('user_id'),
					   'comment_id'=>$this->input->post('comment_id'),
					   'report_coment_text'=>$this->input->post('report_comment')
					);
					$this->db->insert('report_comment', $report_comment);
				}
				// -- Report comment end here -- //
				
				
				
				$comments_sql = "SELECT c.id,c.user_id,c.post_id,c.comment_text,c.comment_image,c.parent_id,u.name,u.handle_name,u.profile_image,
(SELECT COUNT(v.up_vote) FROM votes v WHERE v.comment_based_id = c.id AND v.up_vote>0) AS up_vote_count,
(SELECT COUNT(v.down_vote) FROM votes v WHERE v.comment_based_id = c.id AND v.down_vote>0) AS down_vote_count,
null AS comment_count,
c.cdate as cdate_date,
IFNULL((SELECT vs.up_vote FROM votes vs where vs.comment_based_id = c.id and vs.up_vote = '".$user_id."' order by vs.id limit 1),0) as up_vote_user_id,
IFNULL((SELECT vs1.down_vote FROM votes vs1 where vs1.comment_based_id = c.id and vs1.down_vote = '".$user_id."' order by vs1.id limit 1),0) as down_vote_user_id
FROM 
	comments c,
	users u
WHERE 
c.user_id =u.id 
AND c.post_id = '".$postId."'
AND c.parent_id = 0
AND c.del_status = 1
AND NOT FIND_IN_SET('".$user_id."',c.hide) <> 0
$order";
log_message('info', 'CommentList-Query --> ' . var_export($comments_sql,true));
				if(!empty($this->input->post('report_comment')) && !empty($this->input->post('comment_id'))){
					$arr_res['status'] = 1;
					$arr_res['msg'] = 'Comment reporting added';
					$post_data = $arr_res;
				}else{
					$post_data = $this->All_model->get_data($comments_sql);
				}
				if(!empty($post_data)){	
					$arr_res = $post_data;
				}else{
					$arr_res['msg'] = 'No records found!';
				}
			}else{
				$sql_query = "SELECT c.id, 
								   c.user_id, 
								   c.post_id, 
								   c.comment_text, 
								   c.comment_image,
								   c.parent_id, 
								   u.name, 
								   u.handle_name, 
								   u.profile_image, 
								   (SELECT Count(v.up_vote) FROM   votes v WHERE  v.comment_based_id = c.id AND v.up_vote > 0) AS up_vote_count, 
								   (SELECT Count(v.down_vote) FROM   votes v WHERE  v.comment_based_id = c.id AND v.down_vote > 0) AS down_vote_count, 
								   null AS comment_count,
								   $up_vote_status
								   $down_vote_status
								   c.cdate AS cdate_date,
								   IFNULL((SELECT vs.up_vote FROM votes vs where vs.comment_based_id = c.id and vs.up_vote = '".$user_id."' order by vs.id limit 1),0) as up_vote_user_id,
								   IFNULL((SELECT vs1.down_vote FROM votes vs1 where vs1.comment_based_id = c.id and vs1.down_vote = '".$user_id."' order by vs1.id limit 1),0) as down_vote_user_id
								FROM  comments c, 
								   users u 
								WHERE c.user_id = u.id 
								AND c.parent_id = 0
								AND c.del_status = 1
								ORDER BY c.id ASC";
				
				$post_data = $this->All_model->get_data($sql_query);
				if(!empty($post_data)){	
					$arr_res = $post_data;
				}
			}
		}
		log_message('info', 'CommentList-Response --> ' . var_export($arr_res,true));
		if(empty($arr_res))
			$arr_res['msg'] = 'No records found';
		echo json_encode($arr_res);
	}
	function commentvotes(){
		$this->auth_res;
		$json_res='';
		$arr_res = array();
		$arr_res['status'] = 0;
		$arr_res['msg'] = $this->auth_res;
		
		if(strtolower($this->auth_res) == 'success'){
			if(!empty($this->input->post('id')) && !empty($this->input->post('type'))){
				$sql_cond = '';
				if($this->input->post('type') == 'upvote'){
					$type = 1;
					$down_vote = 0;
					$voteVal = $up_vote = $this->input->post('up_vote');
					$sql_cond = "and up_vote = '".$up_vote."' ";
				}else if($this->input->post('type') == 'downvote'){
					$type = 2;
					$up_vote = 0;
					$voteVal = $down_vote = $this->input->post('down_vote');
				}
				$sql_cond = "and (up_vote = '".$voteVal."' or down_vote = '".$voteVal."') ";
				$cid = $this->input->post('id');
				$sel_qry = "SELECT * FROM votes WHERE comment_based_id = $cid $sql_cond";
				$vdata = $this->All_model->get_data($sel_qry);
				if(empty($vdata[0]['id'])){
					$post_inser_arr = array(
					   'comment_based_id'=>$this->input->post('id'),
					   'vote_type_id'=>$type,
					   'up_vote'=>$up_vote,
					   'down_vote'=>$down_vote
					);
					$this->db->insert('votes', $post_inser_arr);
				}else{
					$vid = $vdata[0]['id'];
					$vote_update_qry = $this->db->query("UPDATE votes SET down_vote =$down_vote,up_vote=$up_vote WHERE comment_based_id = $cid AND id = $vid ");
				}
				$up_vote_query = 'SELECT COUNT(up_vote) AS up_vote_count FROM votes where up_vote>0 and comment_based_id= '.$this->input->post('id');
				$down_vote_query = 'SELECT COUNT(down_vote) AS down_vote_count FROM votes where down_vote>0 and comment_based_id= '.$this->input->post('id');
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
				$sql_query = 'SELECT c.id,c.user_id,c.post_id,c.comment_text,c.comment_image,c.parent_id,u.name,u.handle_name,u.profile_image,
								(SELECT COUNT(v.up_vote) FROM votes v WHERE v.comment_based_id = c.id AND v.up_vote>0) AS up_vote_count,
								(SELECT COUNT(v.down_vote) FROM votes v WHERE v.comment_based_id = c.id AND v.down_vote>0) AS down_vote_count, c.cdate as cdate_date
							FROM 
								comments c,
								users u
							WHERE 
								c.user_id =u.id 
							ORDER BY c.id ASC ';
				$post_data = $this->All_model->get_data($sql_query);
				if(!empty($post_data)){
					$arr_res = $post_data;
				}
			}
		}
		//log_message('Response ==>', var_export($arr_res,true));

		echo json_encode($arr_res);
	}
	function get_child_comment_list(){
		$this->auth_res;
		$json_res='';
		$arr_res = array();
		$arr_res['status'] = 0;
		$arr_res['msg'] = $this->auth_res;
		if(strtolower($this->auth_res) == 'success'){
			log_message('info', 'get_child_comment_list-Request--> ' . var_export($_POST,true));
			if(!empty($this->input->post('parent_id'))){
				$parent_id = $this->input->post('parent_id');
				$post_id = $this->input->post('post_id');
				
				$user_id = '';
				if(!empty($this->input->post('user_id')))
					$user_id = $this->input->post('user_id');
				// -- Delete comment Start here -- //
				if(!empty($this->input->post('del_com_id'))){
					$del_com_id = $this->input->post('del_com_id');
					//$this->db->query("delete FROM comments WHERE id = '".$del_com_id."' AND post_id = '".$postId."'");
					$this->db->query("UPDATE comments SET del_status = '0' WHERE id = $del_com_id");
				}
				// -- Delete comment End here -- //
				
				// -- Comment hide start here -- // 
				if(!empty($this->input->post('hide_com_id'))){
					$hide_com_id = $this->input->post('hide_com_id');
					
					$com_data = $this->All_model->get_data("select hide from comments WHERE id = $hide_com_id");
					if(!empty($com_data)){
						$arr = explode(",",$com_data[0]['hide']);
						if (!in_array($user_id, $arr)) {
							$com_hide_data = $com_data[0]['hide'].','.$user_id;
							$this->db->query("UPDATE comments SET hide = '".$com_hide_data."' WHERE id = $hide_com_id");
						}
					}
				}
				// -- Comment hide end here -- //
				
				// -- Report comment start here -- //
				if(!empty($this->input->post('report_comment')) && !empty($this->input->post('comment_id'))){
					$report_comment = array(
					   'comment_id'=>$this->input->post('comment_id'),
					   'report_coment_text'=>$this->input->post('report_comment')
					);
					$this->db->insert('report_comment', $report_comment);
				}
				// -- Report comment end here -- //
				
				$comments_sql = 'SELECT c.id, 
										   c.user_id, 
										   c.post_id, 
										   c.comment_text, 
										   c.comment_image, 
										   c.parent_id, 
										   u.name, 
										   u.handle_name, 
										   u.profile_image, 
										   (SELECT COUNT(v.up_vote) FROM votes v WHERE v.comment_based_id = c.id AND v.up_vote>0) AS up_vote_count,
										   (SELECT COUNT(v.down_vote) FROM votes v WHERE v.comment_based_id = c.id AND v.down_vote>0) AS down_vote_count,
										    c.cdate as cdate_date,
										    IFNULL((SELECT vs.up_vote FROM votes vs where vs.comment_based_id = c.id and vs.up_vote = "'.$user_id.'" order by vs.id limit 1),0) as up_vote_user_id,
								   IFNULL((SELECT vs1.down_vote FROM votes vs1 where vs1.comment_based_id = c.id and vs1.down_vote = "'.$user_id.'" order by vs1.id limit 1),0) as down_vote_user_id
									FROM   comments c, 
										   users u 
									WHERE  c.user_id = u.id 
										   AND c.post_id = "'.$post_id.'"
										   AND c.parent_id = "'.$parent_id.'"
										   AND c.del_status = 1
										   AND NOT FIND_IN_SET("'.$user_id.'",c.hide) <> 0
									ORDER  BY c.id ASC';
				$post_data = $this->All_model->get_data($comments_sql);
				if(!empty($post_data)){
					$arr_res = $post_data;
				}
			}else{
				$sql_query = 'SELECT c.id, 
								   c.user_id, 
								   c.post_id, 
								   c.comment_text, 
								   c.comment_image,
								   c.parent_id, 
								   u.name, 
								   u.handle_name, 
								   u.profile_image, 
								   (SELECT Count(v.up_vote) FROM   votes v WHERE  v.comment_based_id = c.id AND v.up_vote > 0) AS up_vote_count, 
								   (SELECT Count(v.down_vote) FROM   votes v WHERE  v.comment_based_id = c.id AND v.down_vote > 0) AS down_vote_count, 
								    c.cdate AS cdate_date,
								    IFNULL((SELECT vs.up_vote FROM votes vs where vs.comment_based_id = c.id and vs.up_vote = "'.$user_id.'" order by vs.id limit 1),0) as up_vote_user_id,
								   IFNULL((SELECT vs1.down_vote FROM votes vs1 where vs1.comment_based_id = c.id and vs1.down_vote = "'.$user_id.'" order by vs1.id limit 1),0) as down_vote_user_id
								FROM  comments c, 
								   users u 
								WHERE c.user_id = u.id 
								AND c.del_status = 1
								ORDER BY c.id ASC';
				$post_data = $this->All_model->get_data($sql_query);
				if(!empty($post_data)){	
					$arr_res = $post_data;
				}
			}
		}
		echo json_encode($arr_res);
	}
    function index()
    {
        $flimit = $params['limit'] = RECORDS_PER_PAGE; 
        $last_limit = $params['offset'] = ($this->input->get('per_page')) ? $this->input->get('per_page') : '';
        
        $config = $this->config->item('pagination');
        $config['base_url'] = site_url('comment/index?');
        $config['total_rows'] = $this->Comment_model->get_all_comments_count();
        $this->pagination->initialize($config);
		$search_qry = '';
		if(!empty($this->input->post('search')) && $this->input->post('Search') == 'Submit'){
			$search_val = $this->input->post('search');
			$search_qry = "AND c.comment_text LIKE '%{$search_val}%' ";
		}
        //$data['comments'] = $this->Comment_model->get_all_comments($params);
        $sql_query = "SELECT c.id, c.parent_id,c.comment_text,c.comment_image,u.handle_name,p.post_image,c.cdate
			FROM
				comments c, 
				users u,
				posts p
			WHERE 
				c.user_id = u.id
			AND 	c.post_id = p.id
			$search_qry
			ORDER BY c.id ASC LIMIT $flimit $last_limit";
        $data['comments'] = $this->All_model->get_data($sql_query);
        
        $data['_view'] = 'comment/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new comment
     */
    function add()
    {   
        $this->load->library('form_validation');

		$this->form_validation->set_rules('user_id','User Id','required');
		$this->form_validation->set_rules('comment_text','Comment Text','required');
		$this->form_validation->set_rules('comment_image','Comment Image','required');
		
		if($this->form_validation->run())     
        {   
            $params = array(
				'user_id' => $this->input->post('user_id'),
				'post_id' => $this->input->post('post_id'),
				'parent_id' => $this->input->post('parent_id'),
				'comment_image' => $this->input->post('comment_image'),
				'cdate' => $this->input->post('cdate'),
				'mdate' => $this->input->post('mdate'),
				'comment_text' => $this->input->post('comment_text'),
            );
            
            $comment_id = $this->Comment_model->add_comment($params);
            redirect('comment/index');
        }
        else
        {
			$this->load->model('User_model');
			$data['all_users'] = $this->User_model->get_all_users();
            
            $data['_view'] = 'comment/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a comment
     */
    function edit($id)
    {   
        // check if the comment exists before trying to edit it
        $data['comment'] = $this->Comment_model->get_comment($id);
        
        if(isset($data['comment']['id']))
        {
            $this->load->library('form_validation');

			$this->form_validation->set_rules('user_id','User Id','required');
			$this->form_validation->set_rules('comment_text','Comment Text','required');
			$this->form_validation->set_rules('comment_image','Comment Image','required');
		
			if($this->form_validation->run())     
            {   
                $params = array(
					'user_id' => $this->input->post('user_id'),
					'post_id' => $this->input->post('post_id'),
					'parent_id' => $this->input->post('parent_id'),
					'comment_image' => $this->input->post('comment_image'),
					'cdate' => $this->input->post('cdate'),
					'mdate' => $this->input->post('mdate'),
					'comment_text' => $this->input->post('comment_text'),
                );

                $this->Comment_model->update_comment($id,$params);            
                redirect('comment/index');
            }
            else
            {
				$this->load->model('User_model');
				$data['all_users'] = $this->User_model->get_all_users();

                $data['_view'] = 'comment/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The comment you are trying to edit does not exist.');
    } 

    /*
     * Deleting comment
     */
    function remove($id)
    {
        $comment = $this->Comment_model->get_comment($id);

        // check if the comment exists before trying to delete it
        if(isset($comment['id']))
        {
            $this->Comment_model->delete_comment($id);
            redirect('comment/index');
        }
        else
            show_error('The comment you are trying to delete does not exist.');
    }
    
}
