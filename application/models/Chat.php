<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class chat extends CI_Model
{
	function __construct()
    {
        parent::__construct();
    }

	function insert_chat($data)
    {
		return $this->db->insert('chat', $data);
	}
	public function showchat($uid)
	{
		$this->db->where('uid', $uid);
		$this->db->order_by("time" ,"desc");
		$query=$this->db->get('chat');
		return $query->result();
		
	}
}?>