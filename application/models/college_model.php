<?php
Class College_model extends CI_Model
{
	function get_collage()
	{
		$this->db->where('su','2');
		$query=$this->db->get('savsoft_users');
		return $query->result_array();
	}

	function get_question_list($cat_id)
	{
		$this->db->where('cat_id',$cat_id);
		$query=$this->db->get('questions');
		return $query->result_array();
	}

	function user_result($collage_id,$uid)
	{
		$array=array('college_id'=>$collage_id,'user_id'=>$uid);
		$this->db->where($array);
		$query=$this->db->get('results');
		return $query->result_array();
	}

	function all_user_result($college_id)
	{
		$this->db->where('college_id',$college_id);
		$query=$this->db->get('results');
		return $query->result_array();
	}
}