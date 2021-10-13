<?php
 
class Hashtag_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get hashtag by id
     */
    function get_hashtag($id)
    {
        return $this->db->get_where('hashtags',array('id'=>$id))->row_array();
    }
    
    /*
     * Get all hashtags count
     */
    function get_all_hashtags_count()
    {
        $this->db->from('hashtags');
        return $this->db->count_all_results();
    }
        
    /*
     * Get all hashtags
     */
    function get_all_hashtags($params = array())
    {
        $this->db->order_by('id', 'desc');
        if(isset($params) && !empty($params))
        {
            $this->db->limit($params['limit'], $params['offset']);
			if(!empty($params['search_val'])){
				$this->db->like('name',$params['search_val']);
			}
			if(!empty($params['blocked_filter'])){
				$bid = 0;
				if($params['blocked_filter'] == 'blocked'){
					$bid = 1;
				}
				$this->db->where('block', $bid );
			}
        }
        return $this->db->get('hashtags')->result_array();
    }
        
    /*
     * function to add new hashtag
     */
    function add_hashtag($params)
    {
        $this->db->insert('hashtags',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update hashtag
     */
    function update_hashtag($id,$params)
    {
        $this->db->where('id',$id);
        return $this->db->update('hashtags',$params);
    }
    
    /*
     * function to delete hashtag
     */
    function delete_hashtag($id)
    {
        return $this->db->delete('hashtags',array('id'=>$id));
    }
}
