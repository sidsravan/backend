<?php

 
class User_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    function handlelist($params = array())
    {
	   $result = array();
       $query = $this->db->query('SELECT id,name,handle_name,passcode,password,phone_number,email,otp as phone_otp,user_type,login_with,profile_image, cdate as cdate_date FROM users order by id desc');
       if($query->num_rows()>0){
		   $result = $query->result();
	   }
	   return $result;
    }
    /*
     * Get user by id
     */
    function get_user($id)
    {
        return $this->db->get_where('users',array('id'=>$id))->row_array();
    }
    function get_data($sql_query)
    {
       $result = array();
       if(!empty($sql_query)){
		   $query = $this->db->query($sql_query);
		   if($query->num_rows()>0){
			   $result = $query->result_array();
		   }
	   }
	   return $result;
    }
    
    /*
     * Get all users count
     */
    function get_all_users_count()
    {
        $this->db->from('users');
        return $this->db->count_all_results();
    }
        
    /*
     * Get all users
     */
    function get_all_users($params = array())
    {
        $this->db->order_by('id', 'desc');
        if(isset($params) && !empty($params))
        {
            $this->db->limit($params['limit'], $params['offset']);
            if(!empty($params['search_val'])){
				$this->db->like('name',$params['search_val']);
				$this->db->or_like('handle_name',$params['search_val']);
				$this->db->or_like('phone_number',$params['search_val']);
			}
			if(!empty($params['user_filter'])){
				$this->db->where('user_type', $params['user_filter'] );
			}
			if(!empty($params['login_with'])){
				$this->db->where('login_with', $params['login_with'] );
			}
        }
        $result = $this->db->get('users')->result_array();
        //echo $this->db->last_query();
        return $result;
    }
        
    /*
     * function to add new user
     */
    function add_user($params)
    {
        $this->db->insert('users',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update user
     */
    function update_user($id,$params)
    {
        $this->db->where('id',$id);
        return $this->db->update('users',$params);
    }
    
    /*
     * function to delete user
     */
    function delete_user($id)
    {
        return $this->db->delete('users',array('id'=>$id));
    }
    
    function check_val($table,$field,$value)
	{
		$this->db->where($field,$value);
		$query = $this->db->get($table);
		if (!empty($query->result_array())){
			return 0;
		}
		else{
			return 1;
		}
	}
}
