<?php
class Post_type_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get post_type by id
     */
    function get_post_type($id)
    {
        return $this->db->get_where('post_types',array('id'=>$id))->row_array();
    }
    
    /*
     * Get all post_types count
     */
    function get_all_post_types_count()
    {
        $this->db->from('post_types');
        return $this->db->count_all_results();
    }
        
    /*
     * Get all post_types
     */
    function get_all_post_types($params = array())
    {
        $this->db->order_by('id', 'desc');
        if(isset($params) && !empty($params))
        {
            $this->db->limit($params['limit'], $params['offset']);
            if(!empty($params['search_val'])){
				$this->db->like('name',$params['search_val']);
			}
        }
        return $this->db->get('post_types')->result_array();
    }
        
    /*
     * function to add new post_type
     */
    function add_post_type($params)
    {
        $this->db->insert('post_types',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update post_type
     */
    function update_post_type($id,$params)
    {
        $this->db->where('id',$id);
        return $this->db->update('post_types',$params);
    }
    
    /*
     * function to delete post_type
     */
    function delete_post_type($id)
    {
        return $this->db->delete('post_types',array('id'=>$id));
    }
}
