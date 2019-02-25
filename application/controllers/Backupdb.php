<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Backupdb extends CI_Controller {

	function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('file');
        $this->load->helper('download');
        $this->load->library('zip');
    }

	public function index()
	{	
		$data['_view'] = 'backupdb';
        $this->load->view('test',$data);
	}

	public function index2()
	{	
        $data['_view'] = 'restoredb';
        $this->load->view('test',$data);
	}

	public function backup_db()
	{
		$this->load->dbutil();
        $db_format=array('format'=>'zip','filename'=>'amsappne_nfc.sql');
        $backup=& $this->dbutil->backup($db_format);
        $dbname='backup-on-'.date('Y-m-d').'.zip';
        $save='assets/db_backup/'.$dbname;
        write_file($save,$backup);
        force_download($dbname,$backup);
	}
}
