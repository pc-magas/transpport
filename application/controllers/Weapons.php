<?php

class Weapons extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Weapons_model','weapons');
	}
	
	function get()
	{
		$status='ok';
		$message='';
		
		$data=$this->weapons->get();
		
		if($data===-1)
		{
			$status='err';
			$message='user_not_logedin';	
		}
		elseif($data===false)
		{
			$data=0;
		}
		
		$this->load->view('json_view.php',array('status'=>$status,'data'=>$data,'message'=>$message));
	}
	
	function add()
	{
		$status='ok';
		$message='';
		
		$w=$this->input->post('weapon_id');
		$data=$this->weapons->add($w);
		
		if($data===-1)
		{
			$status='err';
			$message='user_not_logedin';	
		}
		elseif($data===-2)
		{
			$status='err';
			$message='invalid_credit';
		}
		
		$this->load->view('json_view.php',array('status'=>$status,'data'=>$data,'message'=>$message));
	}
}
