<?php

 
class Message_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get message by id
     */
    function get_message($id)
    {
        return $this->db->get_where('messages',array('id'=>$id))->row_array();
    }
    
    /*
     * Get all messages count
     */
    function get_all_messages_count()
    {
        $this->db->from('messages');
        return $this->db->count_all_results();
    }
        
    /*
     * Get all messages
     */
    function get_all_messages($params = array())
    {
        $this->db->order_by('id', 'desc');
        if(isset($params) && !empty($params))
        {
            $this->db->limit($params['limit'], $params['offset']);
        }
        return $this->db->get('messages')->result_array();
    }
        
    /*
     * function to add new message
     */
    function add_message($params)
    {
        $this->db->insert('messages',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update message
     */
    function update_message($id,$params)
    {
        $this->db->where('id',$id);
        return $this->db->update('messages',$params);
    }
    
    /*
     * function to delete message
     */
    function delete_message($id)
    {
        return $this->db->delete('messages',array('id'=>$id));
    }
}