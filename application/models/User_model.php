<?php

class User_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		
		$this->load->database();
		
		$this->load->library('session');
		$this->load->helper('password');
	}
	
	public function login($username,$password)
	{
		if(empty($username) && empty($password)) return -2;
		
		if($this->session->has_userdata('uid')) return true;
		
		$result=$this->db->select('`uid`,`username`,`password`,`salt`')->from('`Users`')->where('`username`',$username)->get();
		
		if($result->num_rows()===0) return -1;
		$result=$result->row();
		$password=password($password,$result->salt);
		
		if($result->password==$password)
		{
			$this->db->set_userdata($result->uid);
			return true;
		}
	}
	
	public function register($username,$password)
	{
		if(empty($username) && empty($password)) return -2;
		
		if($this->session->has_userdata('uid')) return false;
		
		$password=password($password);
		var_dump($password);
		$this->db->set('`salt`',$password['salt']);
		$this->db->set('`password`',$password['password']);
		$this->db->set('`username`',$username);
		
		$this->db->trans_start();
		$this->db->insert('`Users`');
		$id=$this->db->insert_id();
		$this->db->trans_complete();
		
		if($this->db->trans_status()===FALSE)
		{
			$this->db->rollback();
			return false;
		}
		else 
		{
			$this->db->commit();
			return id;
		}
	}
}
