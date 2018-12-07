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
		/*
		if($emp_username=='admin' && $emp_password=='admin'){
		$data['result'] = "Login Successfully";
		$this->load->view('test');
	}else{
		redirect('?act=F', 'refresh');
	}*/
/*
	$emp_password=array( 
		'owner_uid' => md5($this->input->post('emp_password')),
	  );*/

	  $emp_password1 = md5($emp_password);

	$sql="SELECT * FROM `OWNER_TABLE` where owner_fname='$emp_username' and owner_uid='$emp_password1'";
	$query = $this->db->query($sql);
	if ($query->num_rows() > 0)
	{
		$newdata = array(
			'user' => $emp_username,
			'logged_in' => 'OK'
		);
		$this->session->set_userdata($newdata);
		redirect('login/home');
	}
	else
	{
		/*echo "<script>
			  alert('Access Denied');
			  </script>";
			  */
			  $message = "Username and/or Password incorrect.\\nTry again.";
			  echo "<script type='text/javascript'>alert('$message');</script>";
		//redirect('?act=F','refresh');
		redirect('login');
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
	else{
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
