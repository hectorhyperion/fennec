<?php

	class index extends CI_Controller{
		 function __construct()
		{
			parent::__construct();
			if(!$this->session->userdata('register'))
				redirect('login/login');
		}
		function index()
		{

			$this->load->view('index');
		}
		function logout()
		{
			$this->session->sess_destroy();
			redirect('login/login');
		}

	}

?>