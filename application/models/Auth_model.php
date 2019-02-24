<?php

 /*
class Auth_model extends CI_Model
{
    /*function __construct()
    {
        parent::__construct();
    }*/
/*
	public function Login($u,$p)
	{
		$owner_fname=$u;
		$owner_uid=$p;
		$login=$this->db->get_where('OWNER_TABLE' , array('owner_fname' => $owner_fname , 'owner_uid' => $owner_uid ));
		if (count($login->result())>=0) {
			foreach ($login->result() as $key) {
				$sess['status']='Login';
				$sess['name']=$key->name;
				$sess['owner_fname']=$key->owner_fname;
				$this->session->set_userdata($sess);
			}
			header('location:'.base_url().'Test');
		}else {
			header('location:'.base_url().'Login');
		}
		
	}
}*/

class User_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}
	public function fetch_user_login($username,$password)
	{
		$this->db->where('username',$username);
		$this->db->where('password',$this->salt_pass($password));
		$query = $this->db->get('tb_admin');
		return $query->row();
	}
	public function record_count($username,$password)
	{
		$this->db->where('username',$username);
		$this->db->where('password',$this->salt_pass($password));
		return $this->db->count_all_results('tb_admin');
	}
 
	public function salt_pass($password)
	{
		return md5($password);
	}
 
	public function read_user($id)
	{
		$this->db->where('id',$id);
		$query = $this->db->get('tb_admin');
		if($query->num_rows() > 0){
			$data = $query->row();
			return $data;
		}
		return FALSE;
	}
	public function entry_user($id)
	{
		$data = array('admin_name' => $this->input->post('admin_name'));
			$this->db->update('tb_admin', $data, array('id'=> $id));
	}
}


