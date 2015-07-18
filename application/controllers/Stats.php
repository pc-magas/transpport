<?php

class Stats extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Stats_model','stats');
	}
	
	function get()
	{
		$status='ok';
		$message='';
		
		$data=$this->stats->get();
		
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
	
	function set()
	{
		$status='ok';
		$message='';
		
		$score=$this->input->post('score');
		$data=$this->stats->set($score);
		
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
