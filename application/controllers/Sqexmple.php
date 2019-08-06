<?php
class Sqexmple extends CI_Controller
{
	function  __construct()
	{
		parent ::__construct();
	}
	public function index()
	{
		$this->load->model('sqexmple1');
		$data['result']=$this->sqexmple1->get_book();
		
		foreach($result as $r)
		{
			echo $r->un;
		}
		/*$data['result']=$this->sqexmple1->get_book();
		echo "<pre>";
		echo print_r($data['result']);
		echo "</pre>";*/
	}
}
?>
