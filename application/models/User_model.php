<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class user_model extends CI_Model
{
	function __construct()
    {
        parent::__construct();
    }
	
	function get_user($email, $pwd)
	{
		$this->db->where('email', $email);
		$this->db->where('password', md5($pwd));
        $query = $this->db->get('user');
		return $query->result();
	}
	function get_account($uid)
	{
		$this->db->where('uid', $uid);
        $query = $this->db->get('account');
		return $query->result();
	}
	
	// get user
	function get_user_by_id($id)
	{
		$this->db->where('id', $id);
        $query = $this->db->get('user');
		return $query->result();
	}
	
	// insert
	function insert_user($data)
    {
		return $this->db->insert('user', $data);
	}

	function update($id, $fname, $lname, $contact)
    {	
    	$data = array('fname'=>$fname, 'lname'=>$lname, 'contact'=>$contact);
    	$this->db->where('id', $id);
		return $this->db->update('user', $data);
	}

	function insertcollege($id,$uid, $cname,$cdept,$ccourse, $cyear, $cobt, $cout,$cadditional)
    {	
    	$data = array('id'=>$id,'uid'=>$uid,'cname'=> $cname,'cdept'=>$cdept,'ccourse'=>$ccourse,'cyear'=> $cyear,'cobt'=>$cobt,'cout'=> $cout,'cadditional'=>$cadditional);
    	$insert_query = $this->db->insert_string('college', $data);
		$insert_query = str_replace('INSERT INTO','INSERT IGNORE INTO',$insert_query);
		$this->db->where('id', $id);
		$this->db->query($insert_query); 

		if(!$this->db->insert_id()){
    $query=$this->db    ->where('id', $data['id'])
                        ->update('college',$data);
		};  
	}
	function get_college_by_id($id)
	{
		$this->db->where('uid', $id);
        $query = $this->db->get('college');
		return $query->result();
	}
	function insertschool($id,$uid, $sname,$sboard,$per, $syear,$additional)
    {	
    	$data = array('id'=>$id,'uid'=>$uid,'sname'=> $sname,'sboard'=>$sboard,'per'=>$per,'syear'=> $syear,'additional'=>$additional);
    	$insert_query = $this->db->insert_string('school', $data);
		$insert_query = str_replace('INSERT INTO','INSERT IGNORE INTO',$insert_query);
		$this->db->where('id', $id);
		$this->db->query($insert_query); 

		if(!$this->db->insert_id()){
    $query=$this->db    ->where('id', $data['id'])
                        ->update('school',$data);
		};  
	}
	function get_school_by_id($id)
	{
		$this->db->where('uid', $id);
        $query = $this->db->get('school');
		return $query->result();
	}
	function insert_skills($id,$uid, $i,$cl,$s,$a,$l,$details)
    {	
    	$data = array('id'=>$id,'uid'=> $uid,'i'=>$i,'cl'=>$cl,'s'=>$s,'a'=>$a,'l'=>$l,'details'=>$details);
		//return $this->db->('skills', $data);

    	//$data1=array('skills'=>'skills+1',);
    	/*$this->db->set('i','i+1',FALSE);
		$this->db->update('skills');*/
	
	/*$this->db->insert('skills', $data);
	$this->db->set('id', 'id', FALSE);
	$this->db->where('id', $id);
	$this->db->update('skills');*/
	$insert_query = $this->db->insert_string('skills', $data);
$insert_query = str_replace('INSERT INTO','INSERT IGNORE INTO',$insert_query);
$this->db->where('id', $id);
$this->db->query($insert_query); 

if(!$this->db->insert_id()){
    $query=$this->db    ->where('id', $data['id'])
                        ->update('skills',$data);
};  
	

	}

	function get_skills_by_id($uid)
	{
		$this->db->where('uid', $uid);
        $query = $this->db->get('skills');
		return $query->result();
	}

	function insert_work($data)
    {
		return $this->db->insert('work', $data);
	}
	public function showwork($uid)
	{
		$this->db->where('uid', $uid);
		$query=$this->db->get('work');;
		return $query->result();
	}
	public function deletework($id)
	{
		$this->db->where('id', $id);
	return($this->db->delete('work'));
	}

	function insert_othercourses($data)
    {
		return $this->db->insert('courses', $data);
	}
	public function showothercourses($uid)
	{
		$this->db->where('uid', $uid);
		$query=$this->db->get('courses');;
		return $query->result();
	}
	public function deleteothercourses($id)
	{
		$this->db->where('id', $id);
	return($this->db->delete('courses'));
	}

	public function addnew_skills($data){
        if(empty($data)){
            return false;
        }
        $this->db->insert_batch('skills', $data); 
        return ($this->db->affected_rows()>0?TRUE:FALSE);
    }

  
    public function update_skills($data,$where){
        if(empty($data)){
            return false;
        }
        $this->db->update_batch('skills', $data,$where); 
        return ($this->db->affected_rows()?TRUE:FALSE);
    }

    function get_plans_by_id($id)
	{
		$this->db->where('id', $id);
        $query = $this->db->get('plans');
		return $query->result();
	}
}?>