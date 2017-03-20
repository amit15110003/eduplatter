<?php
class profile extends CI_Controller
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
		$this->form_validation->set_rules('id', 'id', 'required');
		$this->form_validation->set_rules('fname', 'First Name', 'trim|required|alpha|min_length[3]|max_length[30]');
		$this->form_validation->set_rules('lname', 'Last Name', 'trim|required|alpha|min_length[3]|max_length[30]');
		$this->form_validation->set_rules('contact', 'contact');
		
		if ($this->form_validation->run() == FALSE)
        {
        	$details = $this->user_model->get_user_by_id($this->session->userdata('uid'));
        	$data['ucontact'] = $details[0]->contact;
        	$data['fname'] = $details[0]->fname;
        	$data['lname'] = $details[0]->lname;
			$this->load->view('sidenav',$data);
			$this->load->view('home',$data);
        }
		else
		{
			$id=$_POST['id'];
		    $fname=$_POST['fname'];
		    $lname=$_POST['lname'];
		    $contact=$_POST['contact'];
			$result=$this->user_model->update($id, $fname, $lname, $contact);

		if ($result)
			{
				$this->session->set_flashdata('msg','<div class="alert alert-success text-center"> Successfully Updated</div>');
				redirect('profile/index');
			}
			else
			{
				// error
				$this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Oops! Error.  Something Went Wrong</div>');
				redirect('profile/index');
			}
		}
	}

	
	public function skills()
	{	
		$this->form_validation->set_rules('uid', 'uid', 'required');
		
		if ($this->form_validation->run() == FALSE)
        {

			
        	$details = $this->user_model->get_skills_by_id($this->session->userdata('uid'));
            if (!empty($details))
			{	$data['id'] = $details[0]->id;
				$data['i'] = $details[0]->i;
        	$data['cl'] = $details[0]->cl;
        	$data['s'] = $details[0]->s;
        	$data['a'] = $details[0]->a;
        	$data['l'] = $details[0]->l;
        	$data['details'] = $details[0]->details;
				
			}
			else {$data['id'] = '';
				$data['i'] = '';
        	$data['cl'] ='';
        	$data['s'] = '';
        	$data['a'] = '';
        	$data['l'] ='';
        	$data['details'] ='';
			}
        	
			$this->load->view('sidenav',$data);
			$this->load->view('skills',$data);
        }
		else
		{
			/*$data = array(
				'i' => $this->input->post('i'),
				'cl' => $this->input->post('cl'),
				's' => $this->input->post('s'),
				'a' => $this->input->post('a'),
				'l' => $this->input->post('l'),
				'details' => $this->input->post('details')
			);*/
			$id=$_POST['id'];
			$uid=$_POST['uid'];
			$i=$_POST['i'];
			$cl=$_POST['cl'];
			$s=$_POST['s'];
			$a=$_POST['a'];
			$l=$_POST['l'];
			$details=$_POST['details'];
			$result=$this->user_model->insert_skills($id,$uid,$i,$cl,$s,$a,$l,$details);
			if ($result)
			{
				$this->session->set_flashdata('msg','<div class="alert alert-success text-center"> Successfully Updated</div>');
				redirect('profile/skills');
			}
			else
			{
				// error
				$this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Oops! Error.  Something Went Wrong</div>');
				redirect('profile/skills');
			}
		}
		
	}
	
	public function achievements()
	{
		$this->load->view('sidenav');
		$this->load->view('achievements');
	}
		
}