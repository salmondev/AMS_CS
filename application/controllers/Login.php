<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}
	public function index()
	{
		$this->load->view('login');
	}

public function check()
{
		$emp_username=$this->input->post('emp_username');
		$emp_password=$this->input->post('emp_password');
		

	  $emp_password1 = md5($emp_password);

	$sql="SELECT * FROM `OWNER_TABLE` where owner_fname='$emp_username' and md5(owner_uid)='$emp_password1'";
	$query = $this->db->query($sql);
	
	$query1 = $this->db->query('SELECT * FROM OWNER_TABLE WHERE auth="ADMIN"');
    $res = $query->result();  // this returns an object of all results
    $row = $res[0];           // get the first row
    

	

	if ($query->num_rows() > 0)
	{
		$newdata = array(
			'user' => $emp_username,
			'logged_in' => 'OK',
			'lv' => $row->auth
		);
		$this->session->set_userdata($newdata);
		redirect('login/home');
	}
	else
	{
		echo "<script>
			  alert('Access Denied');
			  window.location.href='http://amsapp.net/index.php/login';
			  </script>";
	}

}

public function home()
{
	$emp_username=$this->input->post('emp_username');

	$status=$this->session->userdata('logged_in');
	if ($status<>'OK')
	{
		redirect('login');
	}
	else {
		$data['name'] = "$emp_username";
		$this->load->view('test',$data);
	}
}

public function logout()
{
	$this->session->unset_userdata('user');
	$this->session->unset_userdata('logged_in');
	$this->session->sess_destroy();
	redirect('login');
}
}
