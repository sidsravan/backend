<?php
 
class City_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    function get_cities_state($cid)
    {
        return $this->db->get_where('cities',array('state_id'=>$cid))->result_array();
    }
    /*
     * Get city by id
     */
    function get_city($id)
    {
        return $this->db->get_where('cities',array('id'=>$id))->row_array();
    }
    
    /*
     * Get all cities count
     */
    function get_all_cities_count()
    {
        $this->db->from('cities');
        return $this->db->count_all_results();
    }
        
    /*
     * Get all cities
     */
    function get_all_cities($params = array())
    {
        $this->db->order_by('id', 'desc');
        if(isset($params) && !empty($params))
        {
            $this->db->limit($params['limit'], $params['offset']);
            if(!empty($params['search_val'])){
				$this->db->like('name',$params['search_val']);
			}
        }
        return $this->db->get('cities')->result_array();
    }
        
    /*
     * function to add new city
     */
    function add_city($params)
    {
        $this->db->insert('cities',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update city
     */
    function update_city($id,$params)
    {
        $this->db->where('id',$id);
        return $this->db->update('cities',$params);
    }
    
    /*
     * function to delete city
     */
    function delete_city($id)
    {
        return $this->db->delete('cities',array('id'=>$id));
    }
}
