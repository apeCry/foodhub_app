<?php
class Welcome extends CI_Controller
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
		$this->load->view('home-layout');
	}
	function home()
	{
		$this->load->view('home-layout');
	}
	function product()
	{
		    $this->load->model('user_model');
			$res=$this->user_model->search2();
			$this->load->view('product',['res'=>$res]);
	}
	function contect()
	{
		$this->load->view('contect');
	}
	function search()
	{
		$search=$this->input->post('search');
		$this->load->model('user_model');
		$res=$this->user_model->search($search);
		if($res)
		{
			$this->load->view('user-search-res',['res'=>$res]);
		}
		else
		{
			$this->load->model('user_model');
			$res=$this->user_model->search2();
			$this->load->view('other_product',['res'=>$res]);
		}
	}
	function book_now($id)
	{
		$this->load->model('user_model');
		$res=$this->user_model->book_now($id);
		$this->load->view('order',['d'=>$res]);
		
	}
	
	
	public function online_order()
	{
		/*$this->form_validation->set_rules('cname',"Coustmer Name","required");
		$this->form_validation->set_rules('email','Email','required');
			$this->form_validation->set_rules('mno',"Mobile Number","required");
				$this->form_validation->set_rules('address',"Address","required");
					$this->form_validation->set_rules('city',"City","required");*/
					
		$data=$this->input->post();
		$email=$this->input->post('email');
		unset($data['sub']);
		$this->load->model('user_model');
		$a=$this->user_model->online_order_book($data);
		if($a)
		{
			$this->load->model('user_model');
			$res=$this->user_model->search_res($email);
			$this->load->view('online_order_res',['res'=>$res]);
			
		}
	}

	function write_comment() {
		$this->load->view('write_comment');

	}

	function comment_dis() {
		$this->load->model('Comment_model','awm');
		$res=$this->awm->disp_comment();
		//print_r($res);
		$this->load->view('comment_display',['res'=>$res]);

	}

	function insert_comment()
	{
		$this->form_validation->set_rules('name','Name','required');
		$this->form_validation->set_rules('comment','Comment','required');
		if($this->form_validation->run())
		{
			$data=$this->input->post();
			$this->load->model('Comment_model','awm');
			unset($data['save']);
			$res=$this->awm->comment_insert($data);
			if($res)
			{
				$this->session->set_flashdata('fb','Data Save');
				return redirect('Welcome/write_comment');
			}
			else
			{
				echo "Data Not Insert";
			}
			
		}
		else
		{
			$this->load->view('write_comment');
		}
		//$data=$this->input->post();
		
	}
}
?>
