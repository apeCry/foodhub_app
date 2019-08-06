<?php
class User_profile extends CI_Controller
{
	function __construct()
	{
		parent ::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('form_validation');
	}
	function index()
	{
		//$this->load->view('home-layout');
		$this->load->model('user_profile_model');
		$res=$this->user_profile_model->search();
		$this->load->view('user_file',['res'=>$res]);
	}


	
}
?>
