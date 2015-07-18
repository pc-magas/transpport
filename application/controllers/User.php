<?php

class User extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('User_model','user');
	}
	
	function register()
	{
		$status='ok';
		$message='';
		
		$username=$this->input->post('username');
		$password=$this->input->post('password');
		
		$data=$this->user->register($username,$password);
		
		if($data===-2)
		{
			$status='err';
			$message='no_credetials_given';
		}
		elseif($data===false)
		{
			$status='err';
			$message='no_credetials_given';
		}
		
		$this->load->view('json_view.php',array('status'=>$status,'data'=>$data,'message'=>$message));
	}
}
