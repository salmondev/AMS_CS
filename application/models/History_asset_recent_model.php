<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class History_asset_recent_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get history_asset_recent by HISTORY_ASSETID
     */
    function get_history_asset_recent($HISTORY_ASSETID)
    {
        return $this->db->get_where('HISTORY_ASSET_RECENT',array('HISTORY_ASSETID'=>$HISTORY_ASSETID))->row_array();
    }
        
    /*
     * Get all history_asset_recent
     */
    function get_all_history_asset_recent()
    {
        $this->db->order_by('HISTORY_ASSETID', 'desc');
        return $this->db->get('HISTORY_ASSET_RECENT')->result_array();
    }
        
    /*
     * function to add new history_asset_recent
     */
    function add_history_asset_recent($params)
    {
        $this->db->insert('HISTORY_ASSET_RECENT',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update history_asset_recent
     */
    function update_history_asset_recent($HISTORY_ASSETID,$params)
    {
        $this->db->where('HISTORY_ASSETID',$HISTORY_ASSETID);
        return $this->db->update('HISTORY_ASSET_RECENT',$params);
    }
    
    /*
     * function to delete history_asset_recent
     */
    function delete_history_asset_recent($HISTORY_ASSETID)
    {
        return $this->db->delete('HISTORY_ASSET_RECENT',array('HISTORY_ASSETID'=>$HISTORY_ASSETID));
    }
}
