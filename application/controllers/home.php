<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
        $this->load->helper(array('url', 'html'));
		$this->load->library('session');
    }

    public function logout()
    {
    	// destroy session
        $data = array('login' => '', 'uname' => '', 'uid' => '');
        $this->session->unset_userdata($data);
        $this->session->sess_destroy();
		redirect(site_url('home/index'));
    }

    function index()
	{
		if($user=$this->session->userdata('uname')){
            $this->load->view("trip_view.php");
        }else{
            $this->load->view("home_view.php");
        }
	}

}