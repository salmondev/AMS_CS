<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Location extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Location_model');
    } 

    /*
     * Listing of location
     */
    function index()
    {
        $data['location'] = $this->Location_model->get_all_location();
        
        $data['_view'] = 'location/index';
        $this->load->view('test',$data);
	}
	
	function index2()
    {
        $data['location'] = $this->Location_model->get_all_location();
        
        $data['_view'] = 'location/genqrlocation';
        $this->load->view('test',$data);
	}
	
	function index3()
    {
        $data['location'] = $this->Location_model->get_all_location();
        
		$this->load->view('genqrlocate',$data);
	}

	function index4()
    {
        $data['location'] = $this->Location_model->get_all_location();
        
		$this->load->view('location/printQRlocate',$data);
	}

    /*
     * Adding a new location
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
			$BID = $this->input->post('LOCATION_BUILDING_ID');
			$FID = $this->input->post('LOCATION_FLOOR_ID');
			$RID = $this->input->post('LOCATION_ROOM_ID');
			$DID = $this->input->post('DEPARTMENTID');
            $params = array(
				'DEPARTMENTID' => $this->input->post('DEPARTMENTID'),
				//'LOCATION_BARCODE' => $this->input->post('LOCATION_BARCODE'),
				'LOCATION_BARCODE' => $BID.'-'.$FID.'-'.$RID.'-'.$DID,
				'LOCATION_BUILDING_ID' => $this->input->post('LOCATION_BUILDING_ID'),
				'LOCATION_BUILDING_NAME' => $this->input->post('LOCATION_BUILDING_NAME'),
				'LOCATION_FLOOR_ID' => $this->input->post('LOCATION_FLOOR_ID'),
				'LOCATION_ROOM_ID' => $this->input->post('LOCATION_ROOM_ID'),
            );
            
            $location_id = $this->Location_model->add_location($params);
            redirect('location/index');
        }
        else
        {
			$this->load->model('Department_model');
			$data['all_department'] = $this->Department_model->get_all_department();
            
            $data['_view'] = 'location/add';
            $this->load->view('test',$data);
        }
    }  

    /*
     * Editing a location
     */
    function edit($LOCATION_ID)
    {   
        // check if the location exists before trying to edit it
        $data['location'] = $this->Location_model->get_location($LOCATION_ID);
        
        if(isset($data['location']['LOCATION_ID']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
				$BID = $this->input->post('LOCATION_BUILDING_ID');
			    $FID = $this->input->post('LOCATION_FLOOR_ID');
			    $RID = $this->input->post('LOCATION_ROOM_ID');
			    $DID = $this->input->post('DEPARTMENTID');
                $params = array(
					'DEPARTMENTID' => $this->input->post('DEPARTMENTID'),
					//'LOCATION_BARCODE' => $this->input->post('LOCATION_BARCODE'),
					'LOCATION_BARCODE' => $BID.'-'.$FID.'-'.$RID.'-'.$DID,
					'LOCATION_BUILDING_ID' => $this->input->post('LOCATION_BUILDING_ID'),
					'LOCATION_BUILDING_NAME' => $this->input->post('LOCATION_BUILDING_NAME'),
					'LOCATION_FLOOR_ID' => $this->input->post('LOCATION_FLOOR_ID'),
					'LOCATION_ROOM_ID' => $this->input->post('LOCATION_ROOM_ID'),
                );

                $this->Location_model->update_location($LOCATION_ID,$params);            
                redirect('location/index');
            }
            else
            {
				$this->load->model('Department_model');
				$data['all_department'] = $this->Department_model->get_all_department();

                $data['_view'] = 'location/edit';
                $this->load->view('test',$data);
            }
        }
        else
            show_error('The location you are trying to edit does not exist.');
    } 

    /*
     * Deleting location
     */
    function remove($LOCATION_ID)
    {
        $location = $this->Location_model->get_location($LOCATION_ID);

        // check if the location exists before trying to delete it
        if(isset($location['LOCATION_ID']))
        {
            $this->Location_model->delete_location($LOCATION_ID);
            redirect('location/index');
        }
        else
            show_error('The location you are trying to delete does not exist.');
    }
    
}
