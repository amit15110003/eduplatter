<?php
class consultancy extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form','url'));
		$this->load->library(array('session', 'form_validation'));
		$this->load->database();
		$this->load->model('chat');
		if(!$this->session->userdata('uid')){
                redirect('login', 'refresh');
         }
         
	}
	
	public function index()
	{
		
		
			$this->form_validation->set_rules('uid', 'uid', 'required');
			$this->form_validation->set_rules('msg', 'msg', 'required');

			if ($this->form_validation->run() == FALSE)
        {
        	$result['query']=$this->chat->showchat($this->session->userdata('uid'));
     		$this->load->view('sidenav');
			$this->load->view('chat/consultancy',$result);
        }
		else
		{
			$data = array(
				'id' => $this->input->post('id'),
				'uid' => $this->input->post('uid'),
				'msg' => $this->input->post('msg'),
				'status'=>'user'
			);
		if ($this->chat->insert_chat($data))
			{
				$this->session->set_flashdata('msg','<div class="alert alert-success text-center"> Successfully Updated</div>');
				redirect('consultancy');
			}
			else
			{
				// error
				$this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Oops! Error.  Something Went Wrong</div>');
				redirect('consultancy');
			}
		}
	
		
	}
		
}