<?php
class education extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form','url'));
		$this->load->library(array('session', 'form_validation'));
		$this->load->database();
		$this->load->model('user_model');
		if(!$this->session->userdata('uid')){
                redirect('login', 'refresh');
         }
	}

	public function index()
	{
		
			$this->form_validation->set_rules('uid', 'uid', 'required');
			

			if ($this->form_validation->run() == FALSE)
        {
        	
        	$details = $this->user_model->get_college_by_id($this->session->userdata('uid'));
        	if (!empty($details)){
        	$data['id'] = $details[0]->id;
        	$data['cname'] = $details[0]->cname;
        	$data['cdept'] = $details[0]->cdept;
        	$data['ccourse'] = $details[0]->ccourse;
        	$data['cyear'] = $details[0]->cyear;
        	$data['cobt'] = $details[0]->cobt;
        	$data['cout'] = $details[0]->cout;
        	$data['cadditional'] = $details[0]->cadditional;
        }
			else {
				$data['id'] = '';
				$data['cname'] = '';
        	$data['cdept'] = '';
        	$data['ccourse'] = '';
        	$data['cyear'] = '';
        	$data['cobt'] = '';
        	$data['cout'] = '';
        	$data['cadditional'] = '';
			}
			$this->load->view('sidenav',$data);
			$this->load->view('education',$data);

        }
		else
		{	
			$id=$_POST['id'];
			$uid=$_POST['uid'];
		    $cname=$_POST['cname'];
		    $cdept=$_POST['cdept'];
		    $ccourse=$_POST['ccourse'];
		    $cyear=$_POST['cyear'];
		    $cobt=$_POST['cobt'];
		    $cout=$_POST['cout'];
		    $cadditional=$_POST['cadditional'];
			$result=$this->user_model->insertcollege($id,$uid, $cname,$cdept,$ccourse, $cyear, $cobt, $cout,$cadditional);
		if ($result)
			{
				$this->session->set_flashdata('msg','<div class="alert alert-success text-center"> Successfully Updated</div>');
				redirect('education');
			}
			else
			{
				// error
				$this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Oops! Error.  Something Went Wrong</div>');
				redirect('education');
			}
		}
	
		
	}
	public function school()
	{
		
			$this->form_validation->set_rules('uid', 'uid', 'required');
			

			if ($this->form_validation->run() == FALSE)
        {
        	
        	$details = $this->user_model->get_school_by_id($this->session->userdata('uid'));
        	if (!empty($details)){
        	$data['id'] = $details[0]->id;
        	$data['sname'] = $details[0]->sname;
        	$data['sboard'] = $details[0]->sboard;
        	$data['per'] = $details[0]->per;
        	$data['syear'] = $details[0]->syear;
        	$data['additional'] = $details[0]->additional;
        }
			else {
				$data['id'] = '';
				$data['sname'] = '';
        	$data['sboard'] = '';
        	$data['per'] = '';
        	$data['syear'] = '';
        	$data['additional'] = '';
			}
			$this->load->view('sidenav',$data);
			$this->load->view('school',$data);

        }
		else
		{	
			$id=$_POST['id'];
			$uid=$_POST['uid'];
		    $sname=$_POST['sname'];
		    $sboard=$_POST['sboard'];
		    $per=$_POST['per'];
		    $syear=$_POST['syear'];
		    $additional=$_POST['additional'];
			$result=$this->user_model->insertschool($id,$uid, $sname,$sboard,$per, $syear,$additional);
		if ($result)
			{
				$this->session->set_flashdata('msg','<div class="alert alert-success text-center"> Successfully Updated</div>');
				redirect('education/school');
			}
			else
			{
				// error
				$this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Oops! Error.  Something Went Wrong</div>');
				redirect('education/school');
			}
		}
	
		
	}

	public function othercourses()
	{
		
		
			$this->form_validation->set_rules('uid', 'uid', 'required');
			

			if ($this->form_validation->run() == FALSE)
        {
        	$result['query']=$this->user_model->showothercourses($this->session->userdata('uid'));
     		$this->load->view('sidenav');
			$this->load->view('othercourses');
			$this->load->view('viewothercourses',$result);
        }
		else
		{
			$data = array(
				'id' => $this->input->post('id'),
				'uid' => $this->input->post('uid'),
				'name' => $this->input->post('name'),
				'desc' => $this->input->post('desc'),
				'duration' => $this->input->post('duration'),
				'add' => $this->input->post('add')
			);
		if ($this->user_model->insert_othercourses($data))
			{
				$this->session->set_flashdata('msg','<div class="alert alert-success text-center"> Successfully Updated</div>');
				redirect('education/othercourses');
			}
			else
			{
				// error
				$this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Oops! Error.  Something Went Wrong</div>');
				redirect('education/othercourses');
			}
		}
	
		
	}
	public function Deletecourses($id)
	{
			
		$result['query']=$this->user_model->showothercourses($this->session->userdata('uid'));
     		$this->load->view('sidenav');
			$this->load->view('othercourses');
			$this->load->view('viewothercourses',$result);
	  
	  echo "<script>
	 x = confirm ('You want to proceed deleting?')";
	 
	  $r=$this->user_model->deleteothercourses($id);
	  if($r){
	  echo "Successfully Deleted Data";
	  }
	  else {
		  echo "Can Not Delete Data";
	  }
	  
	   
	  
	  redirect('education/othercourses');
	 
	}
}