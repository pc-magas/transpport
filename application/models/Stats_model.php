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
		
		$ret=$this->db->select('`credit` as `score`')->from('`Credits`')->where('`uid`',$uid)->get();
		
		if($ret->num_rows()===0) return FALSE;
		
		return $ret->row()->score;
	}
	
	public function set($score)
	{
		if(!$this->session->has_userdata('uid')) return -1;
		$uid=$this->session->userdata('uid');
		
		if(!is_numeric($score)) return -2;
		
		$new_score=$this->get();
		
		if($new_score===FALSE)
		{
			$this->db->set('`uid`',$uid)->set('`credit`',$score);
		}
		else 
		{
			$this->db->where('`uid`',$uid)->set('`credit`',intval($score)+intval($new_score));
		}
		
		$id;
		$this->db->trans_start();
		if($new_score===FALSE)
		{
			$this->db->insert('`Credits`');
			$id=$this->db->insert_id();
		}
		else 
		{
			$this->db->update('`Credits`');
			$id=true;
		}
		
		
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