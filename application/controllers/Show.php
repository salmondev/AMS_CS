<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Show extends CI_Controller {

	public function index()
	{
		$this->load->view('show_owner');
	}

}
