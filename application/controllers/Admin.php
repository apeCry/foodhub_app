<?php
class Admin extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('encryption');
		$this->load->model('Admin_model');
	}
	function index()
	{
		$this->load->view('admin_home');
	}
	public function login()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules("un","User Name","required");
		$this->form_validation->set_rules("user_email","User Email","required");
		$this->form_validation->set_rules("ps","Password","required");
		if($this->form_validation->run())
		{
			$un=$this->input->post('un');
			
			$email_address=$this->input->post('user_email');
			$ps=$this->input->post('ps');
			$this->load->model('admin_model','am');
			$u=$this->am->login($email_address,$ps);
			// if($u)
			// {
			// 	    $this->load->library('session');
			// 		$this->session->set_userdata('un',$u);
			// 		$this->load->view('admin_welcome');
			// }
			//print_r ($u);
			if ($u === 'Wrong Password') {
				$this->load->library('session');
				$this->session->set_flashdata('message',$u);
				$this->load->view('admin_home');
			}
			if ($u === 'First verified your email address') {
				$this->load->library('session');
				$this->session->set_flashdata('message',$u);
				$this->load->view('admin_home');
			}
			if ($u === 'Wrong Email Address') {
				$this->load->library('session');
				$this->session->set_flashdata('message',$u);
				$this->load->view('admin_home');
			}
			else
			{
				$this->load->library('session');
				$this->session->set_userdata('un',$u);
				$this->load->view('admin_welcome');
			}
		}
		else
		{
			$this->load->view('admin_home');
		}
		
	}
	public function home_open()
	{
		$this->load->library('session');
		$this->session->set_userdata('un',$un);
		$this->load->view('admin_welcome');
	}
	
	public function forgot_password() {
		$this->load->view('forgot_password');
	}
	
	public function reset_link() {
		$email=$this->input->post('email');
		$find_email = $this->Admin_model->forgot_password($email);
		if($find_email){
			// $this->usermodel->sendpassword($findemail);
			$tokan = rand(1000,9999);
			
			$this->Admin_model->update_tokan_password($email,$tokan);

			$subject = "Please reset your pass word";
			$message = "Please click on the password reset link <br> <a href='".base_url()."admin/reset/".$tokan."'>Reset Password</a>";


			$config = array(
				'protocol'  => 'smtp',
				'smtp_host' => 'ssl://smtp.googlemail.com',
				'smtp_port' => 465,
				'smtp_user'  => 'hciniubi@gmail.com', 
				'smtp_pass'  => 'zhenniubi', 
				'mailtype'  => 'html',
				'charset'    => 'utf-8',
			   );
			   $this->load->library('email', $config);
			   $this->email->set_newline("\r\n");
			   $this->email->from('hciniubi@gmail.com');
			   $this->email->to($email);
			   $this->email->subject($subject);
			   $this->email->message($message);
			   $this->email->send();
			   if($this->email->send())
				{
					$this->session->set_flashdata('message', 'Please check your email box');
					//redirect('admin/forgot_password');
				}


		} else{
			$this->session->set_flashdata('msg',' Email not found!');
			redirect('admin/forgot_password');
		}  
	}

	public function reset() {
		$data['tokan'] = $this->uri->segment(3);
		$_SESSION['tokan'] = $data['tokan'];
		$this->load->view('resetpass');
	}

	public function update_password() {
		$_SESSION['tokan'];
		$data = $this->input->post();
		if ($data['password']==$data['cpassword']) {
			$encrypted_password = $this->encryption->encrypt($data['password']);
			$this->Admin_model->update_password($_SESSION['tokan'],$encrypted_password);
			$this->session->set_flashdata('message',' reset password successfully, please login now!');
			redirect('admin/index');
		} else {
			$this->session->set_flashdata('msg',' password do not match!');
			$this->load->view('resetpass');
		}

	}

}
?>
