<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Owner_table extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Owner_table_model');
    } 

    /*
     * Listing of owner_table
     */
    function index()
    {
        $data['owner_table'] = $this->Owner_table_model->get_all_owner_table();
        
        $data['_view'] = 'owner_table/index';
        $this->load->view('test',$data);
    }

    /*
     * Adding a new owner_table
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'OWNER_UID' => $this->input->post('OWNER_UID'),
				'OWNER_FNAME' => $this->input->post('OWNER_FNAME'),
				'OWNER_LNAME' => $this->input->post('OWNER_LNAME'),
            );
            
            $owner_table_id = $this->Owner_table_model->add_owner_table($params);
            redirect('owner_table/index');
        }
        else
        {            
            $data['_view'] = 'owner_table/add';
            $this->load->view('test',$data);
        }
    }  

    /*
     * Editing a owner_table
     */
    function edit($)
    {   
        // check if the owner_table exists before trying to edit it
        $data['owner_table'] = $this->Owner_table_model->get_owner_table($);
        
        if(isset($data['owner_table']['']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'OWNER_UID' => $this->input->post('OWNER_UID'),
					'OWNER_FNAME' => $this->input->post('OWNER_FNAME'),
					'OWNER_LNAME' => $this->input->post('OWNER_LNAME'),
                );

                $this->Owner_table_model->update_owner_table($,$params);            
                redirect('owner_table/index');
            }
            else
            {
                $data['_view'] = 'owner_table/edit';
                $this->load->view('test',$data);
            }
        }
        else
            show_error('The owner_table you are trying to edit does not exist.');
    } 

    /*
     * Deleting owner_table
     */
    function remove($)
    {
        $owner_table = $this->Owner_table_model->get_owner_table($);

        // check if the owner_table exists before trying to delete it
        if(isset($owner_table['']))
        {
            $this->Owner_table_model->delete_owner_table($);
            redirect('owner_table/index');
        }
        else
            show_error('The owner_table you are trying to delete does not exist.');
    }
    
}
