<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Qr extends CI_Controller {

	function __construct ()
	{	
		parent::__construct();
	}

	public function index()
	{	
		$data['_view'] = 'qrcodetext';
        $this->load->view('test',$data);
		//$this->load->view('qrcodetext.php');
		
	}

	public function index2()
	{	
		$data['_view'] = 'location/qrcodetext';
        $this->load->view('test',$data);
		//$this->load->view('qrcodetext.php');
		
	}

	public function index3()
	{	
		$data['_view'] = 'QRwithText';
        $this->load->view('test',$data);
		//$this->load->view('qrcodetext.php');
		
	}
}
