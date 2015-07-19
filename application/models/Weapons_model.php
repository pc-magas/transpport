<?php

class Weapons_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		
		$this->load->library('session');
		$this->load->database();
	}
	
	public function get($line_id=null)
	{
		if(!$this->session->has_userdata('uid')) return -1;
		$uid=$this->session->userdata('uid');
		
		$this->db->select('`Weapons`.`times`,`Lines`.`line_number` as `number`, `Lines`.`name` as `name`,`Lines`.`id` as `line_id`,`Weapons`.`level` as `level`,')
				 ->from('`Lines`')->join('`Weapons`','Lines.id=Weapons.line_id')->where('`Weapons`.`uid`',$uid);
		
		$result;
		
		if(!empty($line_id))
		{
			$this->db->where('`Lines`.`id`',$line_id);	
		}
		$result=$this->db->get();
		
		return $result->result_array();
	}
	
	public function add($line_id)
	{
		if(!$this->session->has_userdata('uid')) return -1;
		$uid=$this->session->userdata('uid');
		
		$data=$this->db->select('`line_id`,`level`,`points_to_lvl`,`times`')->from('`Weapons`')
						->where('`uid`',$uid)
						->where('`line_id`',$line_id)->get();
		
		$update=$data->num_rows()>0;
		$data=$data->row();
		
		$this->db->trans_start();
		
		if(!$update)
		{
			$this->db->set('`level`',1)->set('`points_to_lvl`',5)->set('`uid`',$uid)->set('`line_id`',$line_id)->insert('`Weapons`');
		}
		else
		{
			$next_lvl=intval($data->points_to_lvl)-1;
			$level=intval($data->level);
			if($next_lvl<0)
			{
				$next_lvl=5;
				$level++;
			}
			$times=intval($data->times)+1;
			$this->db->set('`level`',$level)->set('`points_to_lvl`',$next_lvl)->set('`uid`',$uid)->set('`line_id`',$line_id)->set('`times`',$times)->update('`Weapons`');
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
			return true;
		}
	}
	
	
}

