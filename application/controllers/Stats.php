<?php

class Stats extends CI_Controller
{
	public function __construct()
	{
		parent::construct();
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
		
		$this->load->view('json_view.php',array('status'=>$status,'data'=>$data,'message'=>$message));
	}
}
