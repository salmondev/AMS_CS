<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Department_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get department by DEPARTMENTID
     */
    function get_department($DEPARTMENTID)
    {
        return $this->db->get_where('DEPARTMENT',array('DEPARTMENTID'=>$DEPARTMENTID))->row_array();
    }
        
    /*
     * Get all department
     */
    function get_all_department()
    {
        $this->db->order_by('DEPARTMENTID', 'desc');
        return $this->db->get('DEPARTMENT')->result_array();
    }
        
    /*
     * function to add new department
     */
    function add_department($params)
    {
        $this->db->insert('DEPARTMENT',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update department
     */
    function update_department($DEPARTMENTID,$params)
    {
        $this->db->where('DEPARTMENTID',$DEPARTMENTID);
        return $this->db->update('DEPARTMENT',$params);
    }
    
    /*
     * function to delete department
     */
    function delete_department($DEPARTMENTID)
    {
        return $this->db->delete('DEPARTMENT',array('DEPARTMENTID'=>$DEPARTMENTID));
    }
}