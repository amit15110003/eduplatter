<?php
class refer extends CI_Controller
{
	public function __construct()
	{	
		
		parent::__construct();
		$this->load->helper(array('form','url'));
		$this->load->library(array('session', 'form_validation'));
		$this->load->database();
		$this->load->model('user_model');
         

	}
	
	function index()
	{
	 	$this->load->view('refer');	
	}
}