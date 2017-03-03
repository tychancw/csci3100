<?php
class Signup extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
        $this->load->helper(array('url', 'html'));
		$this->load->library('session');
	}
	
	public function index()
	{

		$data = array(
			"email" => $this->input->post("email"),
			"password" => $this->input->post("password"),
		);

		if ($this->user_model->insert_user($data))
		{
			$this->session->set_flashdata('msg','<div class="alert alert-success text-center">You are Successfully Registered! Please login to access your Profile!</div>');
			echo 1;
		}
		else
		{
			// error
			$this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Oops! Error.  Please try again later!!!</div>');
			echo 0;
		}
	}
}