<?php
 
class Album_name_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get album_name by id
     */
    function get_album_name($id)
    {
        return $this->db->get_where('album_names',array('id'=>$id))->row_array();
    }
    
    /*
     * Get all album_names count
     */
    function get_all_album_names_count()
    {
        $this->db->from('album_names');
        return $this->db->count_all_results();
    }
        
    /*
     * Get all album_names
     */
    function get_all_album_names($params = array())
    {
        $this->db->order_by('id', 'desc');
        if(isset($params) && !empty($params))
        {
            $this->db->limit($params['limit'], $params['offset']);
            if(!empty($params['search_val'])){
				$this->db->like('name',$params['search_val']);
			}
        }
        return $this->db->get('album_names')->result_array();
    }
        
    /*
     * function to add new album_name
     */
    function add_album_name($params)
    {
        $this->db->insert('album_names',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update album_name
     */
    function update_album_name($id,$params)
    {
        $this->db->where('id',$id);
        return $this->db->update('album_names',$params);
    }
    
    /*
     * function to delete album_name
     */
    function delete_album_name($id)
    {
        return $this->db->delete('album_names',array('id'=>$id));
    }
}
