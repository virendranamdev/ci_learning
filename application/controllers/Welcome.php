<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	
	
	public function index()
	{

		$this->load->view('include/header');
		$this->load->view('home');
		$this->load->view('include/footer');
	}
	
	public function register_user()
	{
		$this->load->library('form_validation');
		
		$this->form_validation->set_rules('name','Name','trim|required|xss_clean');
		$this->form_validation->set_rules('email','Email','required|trim|valid_email|is_unique[users.email]|xss_clean');
		$this->form_validation->set_rules('contact','Contact', 'required|trim|numeric|max_length[11]|min_length[10]');
		$this->form_validation->set_rules('uid','User Id', 'required|trim|min_length[5]|max_length[7]|is_unique[users.uid]|xss_clean', array('is_unique' => 'userid already exist'));
		$this->form_validation->set_rules('pass','Password','required|trim|xss_clean');
		$this->form_validation->set_rules('cpass','Confirm Password','required|matches[password]|xss_clean');
	
		if ($this->form_validation->run()==false) 
		{
		$this->load->view('home');
		}
		else
		{
			$this->load->model('model_user');
			$result = $this->model_user->insert_user();
			if ($result) 
			{
				$this->load->view('reg_success', array('first_name'=> '$result'));
			}
			else
			{
				echo "contact your administrator admin@example.com";
			}
		}
	}
}
