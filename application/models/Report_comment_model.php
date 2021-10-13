<?php

 
class Report_comment_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get vote_type by id
     */
    function get_vote_type($id)
    {
        return $this->db->get_where('report_comment',array('id'=>$id))->row_array();
    }
    
    /*
     * Get all report_comment count
     */
    function get_all_report_comment_count()
    {
        $this->db->from('report_comment');
        return $this->db->count_all_results();
    }
        
    /*
     * Get all report_comment
     */
    function get_all_report_comment($params = array())
    {
        $this->db->order_by('id', 'desc');
        if(isset($params) && !empty($params))
        {
            $this->db->limit($params['limit'], $params['offset']);
            if(!empty($params['search_val'])){
				$this->db->like('name',$params['search_val']);
			}
        }
        return $this->db->get('report_comment')->result_array();
    }
        
    /*
     * function to add new vote_type
     */
    function add_vote_type($params)
    {
        $this->db->insert('report_comment',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update vote_type
     */
    function update_vote_type($id,$params)
    {
        $this->db->where('id',$id);
        return $this->db->update('report_comment',$params);
    }
    
    /*
     * function to delete vote_type
     */
    function delete_vote_type($id)
    {
        return $this->db->delete('report_comment',array('id'=>$id));
    }
}
