<?php 
defined('BASEPATH') OR exit ('No Direct Access Allowed');

class Login extends CI_Controller
{
	public function index()
	{
		$this->load->view('include/header');
		$this->load->view('view_login');
		$this->load->view('include/footer');
	}
}
?>