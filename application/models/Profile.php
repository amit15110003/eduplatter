<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class profile extends CI_Model
{
	function __construct()
    {
        parent::__construct();
    }
	
	

	// insert
	function insert_user($data)
    {	
    	$this->db->where('id', $id);
		return $this->db->update('user', $data);
	}
}?>