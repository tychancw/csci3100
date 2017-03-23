<?php
class Plan extends CI_Controller
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

	}

	public function newtrip()
	{
		if(!$user=$this->session->userdata('uname')){
            exit('Unauthorized Access');
		}

		$startdate = strtotime($this->input->post("tripstart"));
		$enddate = strtotime($this->input->post("tripend"));
		$numDays = abs($startdate - $enddate)/60/60/24;
		$datesStore = array();

		$dateString = date("d-M (D)", $startdate);
		array_push($datesStore, $dateString);

		for($count = 1; $count <= $numDays; $count++){
			$dateString = date("d-M (D)", strtotime("+{$count} day", $startdate));
			array_push($datesStore, $dateString);
		}

		$data = array(
			"status" => "new",
			"slogan" => "New Trip",
			"place" => $this->input->post("location"),
			"datesStore" => $datesStore
		);

		$this->load->view("plan_trip.php", $data);
	}
}