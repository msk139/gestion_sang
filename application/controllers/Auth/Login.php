<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller
{



public function login()
    {
        $title['title'] = 'Login';
        $this->load->view('Admin/include/header', $title)
                   ->view('auth/login')
                   ->view('Admin/include/footer');
        
    }

    function loginnow()
	{
		if($_SERVER['REQUEST_METHOD']=='POST')
		{
			$this->form_validation->set_rules('email','Adress Email','required');
			$this->form_validation->set_rules('password','Password','required');

			if($this->form_validation->run()==TRUE)
			{
				$email = $this->input->post('email');
				$password = $this->input->post('password');
				$password = sha1($password);

				$this->load->model('user_model');
				$status = $this->user_model->checkPassword($password,$email);
				if($status!=false)
				{
					$username = $status->username;
					$email = $status->email;

					$session_data = array(
						'username'=>$username,
						'email' => $email,
					);

					$this->session->set_userdata('UserLoginSession',$session_data);

					redirect(base_url());
				}
				else
				{
					$this->session->set_flashdata('error','Votre Adresse email ou Mot de passe est incorrect');
					redirect(base_url('login'));
				}

			}
			else
			{
				$this->session->set_flashdata('error','Remplissez tous les champs obligatoires');
				redirect(base_url('login'));
			}
		}
	}

}