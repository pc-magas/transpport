<?php

class User_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		
		$this->load->database();
		
		//$this->load->library('session');
		$this->load->helper('password');
	}
	
	public function login($username,$password)
	{
		$this->db->select('`uid`,`username`,`password`,`salt`')->from('`Users`')->where('`username`',$username);
		
		
	}
}
