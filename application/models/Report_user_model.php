<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Report_user_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get report_user by id
     */
    function get_report_user($id)
    {
        return $this->db->get_where('report_user',array('id'=>$id))->row_array();
    }
    
    /*
     * Get all report_user count
     */
    function get_all_report_user_count()
    {
        $this->db->from('report_user');
        return $this->db->count_all_results();
    }
        
    /*
     * Get all report_user
     */
    function get_all_report_user($params = array())
    {
        $this->db->order_by('id', 'desc');
        if(isset($params) && !empty($params))
        {
            $this->db->limit($params['limit'], $params['offset']);
        }
        return $this->db->get('report_user')->result_array();
    }
        
    /*
     * function to add new report_user
     */
    function add_report_user($params)
    {
        $this->db->insert('report_user',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update report_user
     */
    function update_report_user($id,$params)
    {
        $this->db->where('id',$id);
        return $this->db->update('report_user',$params);
    }
    
    /*
     * function to delete report_user
     */
    function delete_report_user($id)
    {
        return $this->db->delete('report_user',array('id'=>$id));
    }
}