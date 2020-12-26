<?php 

class signup extends CI_Controller
	{

			 function __construct()
		{
			parent::__construct();
			$this->load->library('form_validation');
			$this->load->model('register_model');

		}
		function index(){
			$this->load->view('register/header');
				$this->load->view('register/signup');
				$this->load->view('register/footer');
		}

		
			 
		function register(){
			 
			$this->form_validation->set_rules('fullname','Full Name', 'required');
			$this->form_validation->set_rules('address','Address' , 'required');
			$this->form_validation->set_rules('email', 'Email','trim|required|valid_email');
			$this->form_validation->set_rules('city/town', 'City/Town','required');
		//	$this->form_validation->set_rules('gender', 'gender' ,'required');
			$this->form_validation->set_rules('username','User Name','trim|required|min_length[3]');
			
			$this->form_validation->set_rules('password','Password' ,'required');
			$this->form_validation->set_rules('confirm_password', 'Confirm Password', 'required|matches[password]');
			//$this->form_validation->set_rules('password2','Re-type Password' , 'matches[password]');

			if($this->form_validation->run() === FALSE)
			{
				$this->load->view('register/header');
				$this->load->view('register/signup');
				$this->load->view('register/footer');
			} else {
				// Encrypt password
				$enc_password = md5($this->input->post('password'));

				$this->register_model->register($enc_password);

				// Set message
				$this->session->set_flashdata('user_registered', 'You are now registered and can log in');
			 

				redirect('login/login');
			}
		}
	}

?>