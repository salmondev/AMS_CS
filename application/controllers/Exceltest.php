<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Exceltest extends CI_Controller {
	function __construct()
    {
        parent::__construct();
        
    }
	public function index()
	{
		$data['_view'] = 'exceltest';
        $this->load->view('test',$data);
	}
}
?>