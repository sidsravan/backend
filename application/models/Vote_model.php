<?php
 
class Vote_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get vote by id
     */
    function get_vote($id)
    {
        return $this->db->get_where('votes',array('id'=>$id))->row_array();
    }
    
    /*
     * Get all votes count
     */
    function get_all_votes_count()
    {
        $this->db->from('votes');
        return $this->db->count_all_results();
    }
        
    /*
     * Get all votes
     */
    function get_all_votes($params = array())
    {
        $this->db->order_by('id', 'desc');
        if(isset($params) && !empty($params))
        {
            $this->db->limit($params['limit'], $params['offset']);
        }
        return $this->db->get('votes')->result_array();
    }
        
    /*
     * function to add new vote
     */
    function add_vote($params)
    {
        $this->db->insert('votes',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update vote
     */
    function update_vote($id,$params)
    {
        $this->db->where('id',$id);
        return $this->db->update('votes',$params);
    }
    
    /*
     * function to delete vote
     */
    function delete_vote($id)
    {
        return $this->db->delete('votes',array('id'=>$id));
    }
}
