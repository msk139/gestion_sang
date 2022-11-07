<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Register extends CI_Controller
{

	public function register()
	{
		$title['title'] = 'Inscription';
		$this->load->view('Admin/include/header', $title)
			->view('auth/register')
			->view('Admin/include/footer');
	}

	function registerNow()
	{

		if($_SERVER['REQUEST_METHOD']=='POST')
		{
			$this->form_validation->set_rules('name','Nom','required');
			$this->form_validation->set_rules('username','Prénom','required');
			$this->form_validation->set_rules('email','Adress Email','required');
			$this->form_validation->set_rules('password','Password','required');
			$this->form_validation->set_rules('confirmation','Confirmation','required');
			$this->form_validation->set_rules('tel','Téléphone','required');
			$this->form_validation->set_rules('localite','Localité','required');
			$this->form_validation->set_rules('groupe_sanguin','Groupe Sanguin','required');

			if($this->form_validation->run()==TRUE)
			{
				$name = $this->input->post('name');
				$username = $this->input->post('username');
				$email = $this->input->post('email');
				$password = $this->input->post('password');
				$confirmation = $this->input->post('confirmation');
				$tel = $this->input->post('tel');
				$localite = $this->input->post('localite');
				$groupe_sanguin = $this->input->post('groupe_sanguin');

				$data = array(
					'name'=>$name,
					'username'=>$username,
					'email'=>$email,
					'password'=>sha1($password),
					'confirmation'=>sha1($confirmation),
					'tel'=>($tel),
					'localite'=>($localite),
					'groupe_sanguin'=>($groupe_sanguin),
					'status'=>'1'
				);

				$this->load->model('user_model');
				$this->user_model->insertuser($data);
				$this->session->set_flashdata('success','Successfully User Created');
				redirect(base_url());
			}
		}
	}
}
