<?php 
class Admin_welcome extends CI_controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('form_validation');
	}
	function home_open()
	{
		$this->load->view('admin_welcome');
	}
	public function insert_pro_page()
	{
		$this->load->view('procuct_insert');
	}
	public function disp_pro_page()
	{
		$this->load->model('admin_welcome_model','awm');
		$res=$this->awm->disp_pro();
		//print_r($res);
		$this->load->view('procuct_display',['res'=>$res]);
	}
	function sell_pro_list_page()
	{
		$this->load->view('sell-product-list');
	}
	function order_booking_page()
	{
		$this->load->view('order_booking',['d'=>'']);
	}
	function online_order_page()
	{
		$this->load->model('admin_welcome_model');
		$data=$this->admin_welcome_model->online_order_list();
		//print_r($data);
	    $this->load->view('online_order',['data'=>$data]);
	}
	function ofline_order_page()
	{
		$this->load->model('admin_welcome_model');
		$ofres=$this->admin_welcome_model->ofline_order_page();
		/*echo "<pre>";
		print_r($ofres);
		echo "</pre>";*/
		$this->load->view('ofline_order',['ofres'=>$ofres]);
	}
	function on_py_page()
	{
		$this->load->view('online_payment');
	}
	function of_py_page()
	{
		$this->load->view('ofline_payment');
	}
	function all_py_page()
	{
		$this->load->view('all_payment');
	}
	
	public function update_product($id)
	{
		$this->load->model('admin_welcome_model');
		$data=$this->admin_welcome_model->update1($id);
		//print_r($data);
		$this->load->view('admin_product_edit',['data'=>$data]);
	}
	public function product_update2()
	{
		$data=$this->input->post();
		unset($data['sub']);
		//print_r($data);
		$id=$this->input->post('id');
		$this->load->model('admin_welcome_model');
		if($this->admin_welcome_model->update2($id,$data))
		{
			
			return redirect('admin_welcome/disp_pro_page');
		}
		else
		{
			echo "Not Update";
		}
	}
	
	
	function inset_product()
	{
		$this->form_validation->set_rules('name','Name','required');
		$this->form_validation->set_rules('price','Price','required');
		if($this->form_validation->run())
		{
			$data=$this->input->post();
			$this->load->model('admin_welcome_model','awm');
			unset($data['sub']);
			$res=$this->awm->product_insert($data);
			if($res)
			{
				$this->session->set_flashdata('fb','Data Save');
				return redirect('admin_welcome/insert_pro_page');
			}
			else
			{
				echo "Data Not Insert";
			}
			
		}
		else
		{
			$this->load->view('procuct_insert');
		}
		//$data=$this->input->post();
		
	}
	
	public function delete_product($id)
	{
		$this->load->model('admin_welcome_model');
		
		if($this->admin_welcome_model->del($id))
		{
			echo "Delete";
		}
		else
		{
			echo "Not Delete";
		}
	}
	public function search_product()
	{
		$data=$this->input->post('pname');
		$this->load->model('admin_welcome_model');
		$data1=$this->admin_welcome_model->search1($data);
		if($data1)
		{
		$this->load->view('order_booking',['d'=>$data1]);
		}
		else
		{
			$this->load->model('admin_welcome_model');
			$res=$this->admin_welcome_model->search2();
			$this->load->view('order_booking',['d'=>""]);
		}
	}
	public function ofline_order()
	{
		/*$this->form_validation->set_rules('cname',"Coustmer Name","required");
		$this->form_validation->set_rules('email','Email','required');
			$this->form_validation->set_rules('mno',"Mobile Number","required");
				$this->form_validation->set_rules('address',"Address","required");
					$this->form_validation->set_rules('city',"City","required");*/
					
		$data=$this->input->post();
		$email=$this->input->post('email');
		unset($data['sub']);
		$this->load->model('admin_welcome_model');
		$a=$this->admin_welcome_model->ofline_order_book($data);
		if($a)
		{
			$this->load->model('admin_welcome_model');
			$res=$this->admin_welcome_model->search_res($email);
			$this->load->view('ofline_order_res',['res'=>$res]);
			
		}
	}

	public function user_profile()
	{
		//$this->load->view('home-layout');
		$un=$this->session->userdata('un');
		$this->load->model('user_profile_model');
		$res=$this->user_profile_model->search($un);
		$this->load->view('user_file',['res'=>$res]);
	}

	public function update_admin($id)
	{
		$this->load->model('User_profile_model');
		$data=$this->User_profile_model->update1($id);
		//print_r($data);
		$this->load->view('admin_user_edit',['data'=>$data]);
	}

	public function update_admin2()
	{
		$data=$this->input->post();
		unset($data['sub']);
		//print_r($data);
		$id=$this->input->post('id');
		$this->load->model('User_profile_model');
		if($this->User_profile_model->update2($id,$data))
		{
			//echo "Your profile has been Updated, Please login again";
			return redirect('Private_area/logout');
			
		}
		else
		{
			echo "Not Update";
		}
	}
}
?>
