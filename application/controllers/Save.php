<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Save extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        
    }

	public function index()
	{
		$data['_view'] = 'savedata';
        $this->load->view('test',$data);
	}
}
