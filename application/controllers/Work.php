<?php
class work extends CI_Controller
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
        	$result['query']=$this->user_model->showwork($this->session->userdata('uid'));
     		$this->load->view('sidenav');
			$this->load->view('work');
			$this->load->view('viewwork',$result);
        }
		else
		{
			$data = array(
				'id' => $this->input->post('id'),
				'uid' => $this->input->post('uid'),
				'project' => $this->input->post('project'),
				'supervisor' => $this->input->post('supervisor'),
				'position' => $this->input->post('position'),
				'duration' => $this->input->post('duration')
			);
		if ($this->user_model->insert_work($data))
			{
				$this->session->set_flashdata('msg','<div class="alert alert-success text-center"> Successfully Updated</div>');
				redirect('work');
			}
			else
			{
				// error
				$this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Oops! Error.  Something Went Wrong</div>');
				redirect('work');
			}
		}
	
		
	}
	public function Deletework($id)
	{
			
		$result['query']=$this->user_model->showwork($this->session->userdata('uid'));
     		$this->load->view('sidenav');
			$this->load->view('work');
			$this->load->view('viewwork',$result);
	  
	  echo "<script>
	 x = confirm ('You want to proceed deleting?')";
	 
	  $r=$this->user_model->deletework($id);
	  if($r){
	  echo "Successfully Deleted Data";
	  }
	  else {
		  echo "Can Not Delete Data";
	  }
	  
	   
	  
	  redirect('work');
	 
	}
}