<?php

 
class State_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get state by id
     */
    function get_states_country($cid)
    {
        return $this->db->get_where('states',array('country_id'=>$cid))->result_array();
    }
    function get_state($id)
    {
        return $this->db->get_where('states',array('id'=>$id))->row_array();
    }
    
    /*
     * Get all states count
     */
    function get_all_states_count()
    {
        $this->db->from('states');
        return $this->db->count_all_results();
    }
        
    /*
     * Get all states
     */
    function get_all_states($params = array())
    {
        $this->db->order_by('id', 'desc');
        if(isset($params) && !empty($params))
        {
            $this->db->limit($params['limit'], $params['offset']);
            if(!empty($params['search_val'])){
				$this->db->like('name',$params['search_val']);
			}
        }
        return $this->db->get('states')->result_array();
    }
        
    /*
     * function to add new state
     */
    function add_state($params)
    {
        $this->db->insert('states',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update state
     */
    function update_state($id,$params)
    {
        $this->db->where('id',$id);
        return $this->db->update('states',$params);
    }
    
    /*
     * function to delete state
     */
    function delete_state($id)
    {
        return $this->db->delete('states',array('id'=>$id));
    }
}
