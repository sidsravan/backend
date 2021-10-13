<?php

class All_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
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
