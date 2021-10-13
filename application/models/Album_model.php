<?php
class Album_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get album by id
     */
    function get_album($id)
    {
        return $this->db->get_where('albums',array('id'=>$id))->row_array();
    }
    
    /*
     * Get all albums count
     */
    function get_all_albums_count()
    {
        $this->db->from('albums');
        return $this->db->count_all_results();
    }
        
    /*
     * Get all albums
     */
    function get_all_albums($params = array())
    {
        $this->db->order_by('id', 'desc');
        if(isset($params) && !empty($params))
        {
            $this->db->limit($params['limit'], $params['offset']);
        }
        return $this->db->get('albums')->result_array();
    }
        
    /*
     * function to add new album
     */
    function add_album($params)
    {
        $this->db->insert('albums',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update album
     */
    function update_album($id,$params)
    {
        $this->db->where('id',$id);
        return $this->db->update('albums',$params);
    }
    
    /*
     * function to delete album
     */
    function delete_album($id)
    {
        return $this->db->delete('albums',array('id'=>$id));
    }
}
