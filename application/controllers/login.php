<?php
class Login extends CI_Controller
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
		$email = $this->input->post("email");
        $password = $this->input->post("password");
        $uresult = $this->user_model->get_user($email, $password);

        if(count($uresult) > 0){
        	// set session
			$sess_data = array('login' => TRUE, 'uname' => $uresult[0]->fname, 'uid' => $uresult[0]->id);
			$this->session->set_userdata($sess_data);
            echo 1;
        }else{
            echo 0;
        }
    }
}