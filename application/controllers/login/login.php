<?php
	
class login extends CI_Controller
{
	function __construct()
 		{
 			parent::__construct();

 			if($this->session->userdata('register'))

 			redirect('index');
 		
 		}
 		function index()
 		{
 			$this->load->view('login/login');
 		}
 		 function verify()
 		{
 			//username= admin password= qwerty
 			$this->load->model('register_model');
 			$check =$this->register_model->validate();
 			//die($check);
 			if($check)
 			{
  				$this->session->set_userdata('register','1');
 				redirect('index');
 			}
 			else
 			{
 				//flashdata for incorrect passowrd and user name 
 				 $this->session->set_flashdata('login_failed', 'incorect username/password');
 				redirect(';login/login');
 			}
 		
	 			
 		}
 		
 	}

 		
	 			
 		
 		

?>