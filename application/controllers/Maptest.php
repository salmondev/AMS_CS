<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Maptest extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        
    }

	public function index()
	{
		$data['_view'] = 'maptest';
        $this->load->view('test',$data);
	}
}
