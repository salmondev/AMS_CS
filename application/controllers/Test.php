<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {

	/*public function __construct()
	{
		parent::__construct();
		$st=$this->session->userdata('status');
		if($st!=='Login'){
			header('location:'.base_url().'Test');
		}
	}*/

	public function index()
	{
		$this->load->view('test');
	}
}
