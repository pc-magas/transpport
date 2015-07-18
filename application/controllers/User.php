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
			$message='user_already_logedin';
		}
		elseif($data===-1)
		{
			$status='err';
			$message='user_already_exists';
		}
		
		$this->load->view('json_view.php',array('status'=>$status,'data'=>$data,'message'=>$message));
	}
	
	function login()
	{
		$status='ok';
		$message='';
		
		$username=$this->input->post('username');
		$password=$this->input->post('password');
		
		$data=$this->user->login($username,$password);
		
		if($data===-2)
		{
			$status='err';
			$message='no_cedetials_given';
		}
		elseif($data===-1)
		{
			$status='err';
			$message='user_not_exists';
		}
		elseif($data===false)
		{
			$status='err';
			$message='login_failed';
		}
		
		$this->load->view('json_view.php',array('status'=>$status,'data'=>$data,'message'=>$message));
	}
	
}
