<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Map extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        
    }

	public function index()
	{
		$data['_view'] = 'map';
        $this->load->view('test',$data);
	}
}
