<?php

class Stats_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->library('session');
	}
	
	public function get()
	{
		if(!$this->session->has_userdata('uid')) return -1;
		$uid=$this->session->userdata('uid');
		
		$ret=$this->db->select('SUM(`credit`) as `score`')->from('`Credits`')->where('`uid`',$uid)->get();
		
		if($ret->num_rows()===0) return 0;
		
		return $ret->row()->score;
	}
	
	public function set($score)
	{
		if(!$this->session->has_userdata('uid')) return -1;
		$uid=$this->session->userdata('uid');
		
		if(!is_numeric($score)) return -2;
		
		$this->db->set('`uid`',$uid)->set('`credit`',$score);
		
		$this->db->trans_start();
		$this->db->insert('`Credits`');
		$id=$this->db->insert_id();
		$this->db->trans_complete();
		
		if($this->db->trans_status()===FALSE)
		{
			$this->db->trans_rollback();
			return false;
		}
		else 
		{
			$this->db->trans_commit();
			return $id;
		}
	}
}