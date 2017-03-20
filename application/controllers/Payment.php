<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class payment extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
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
			$details = $this->user_model->get_plans_by_id($this->input->post('plan'));
        	$data['amount'] = $details[0]->amount;
        	$data['productinfo'] = $details[0]->productinfo;
		$this->load->view('payment',$data);
	}
	
	public function success()
	{
		$this->load->view('success');
	}
	public function failure()
	{
		$this->load->view('failure');
	}
	
}
