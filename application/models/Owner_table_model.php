<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Owner_table_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get owner_table by 
     */
    function get_owner_table($owner_uid)
    {
        return $this->db->get_where('OWNER_TABLE',array(''=>$owner_uid))->row_array();
    }
        
    /*
     * Get all owner_table
     */
    function get_all_owner_table()
    {
        $this->db->order_by('', 'desc');
        return $this->db->get('OWNER_TABLE')->result_array();
    }
        
    /*
     * function to add new owner_table
     */
    function add_owner_table($params)
    {
        $this->db->insert('OWNER_TABLE',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update owner_table
     */
    function update_owner_table($owner_uid,$params)
    {
        $this->db->where('',$owner_uid);
        return $this->db->update('OWNER_TABLE',$params);
    }
    
    /*
     * function to delete owner_table
     */
    function delete_owner_table($owner_uid)
    {
        return $this->db->delete('OWNER_TABLE',array(''=>$owner_uid));
    }
}
