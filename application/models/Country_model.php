<?php

 
class Country_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get country by id
     */
    function get_country($id)
    {
        return $this->db->get_where('countries',array('id'=>$id))->row_array();
    }
    
    /*
     * Get all countries count
     */
    function get_all_countries_count()
    {
        $this->db->from('countries');
        return $this->db->count_all_results();
    }
        
    /*
     * Get all countries
     */
	function get_all_countries_list(){
		$result = array();
		$query = $this->db->query('select id,name from countries order by name asc');
		if($query->num_rows()>0){
			$result = $query->result();
		}
		return $result;
	}
    function get_all_countries($params = array())
    {
		print_r($params);
        $this->db->order_by('id', 'desc');
        if(isset($params) && !empty($params))
        {
            $this->db->limit($params['limit'], $params['offset']);
            if(!empty($params['search_val'])){
				$this->db->like('name',$params['search_val']);
			}
        }
		$countries = $this->db->get('countries')->result_array();
			echo $this->db->last_query(); 
        return $countries;
    }
        
    /*
     * function to add new country
     */
    function add_country($params)
    {
        $this->db->insert('countries',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update country
     */
    function update_country($id,$params)
    {
        $this->db->where('id',$id);
        return $this->db->update('countries',$params);
    }
    
    /*
     * function to delete country
     */
    function delete_country($id)
    {
        return $this->db->delete('countries',array('id'=>$id));
    }
}
