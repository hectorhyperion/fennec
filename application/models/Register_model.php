<?php

		class Register_model extends CI_Model
		{
			function register($enc_password){
			// User data array
			$data = array(

				'name' => $this->input->post('fullname'),
				'address' => $this->input->post('address'),
				'email' => $this->input->post('email'),
				'city/town' => $this->input->post('city/town'),
				'gender' => $this->input->post('gender'),
                'username' => $this->input->post('username'),
                'password' => $enc_password,
                
			);

			// Insert user
			return $this->db->insert('register', $data);
		}
			
			  function validate()
				{
					$arr['username']=$this->input->post('username');
 					$arr['password']=md5($this->input->post('password'));
 					 
 					return $this->db->get_where('register',$arr)->row();
				}
				

		}

?>