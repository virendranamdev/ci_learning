<?php 
defined('BASEPATH') OR exit ('No Direct Access Allowed');

class Contact extends CI_Controller
{
	public function index()
	{
		$this->load->view('include/header');
		$this->load->view('view_contact');
		$this->load->view('include/footer');
	}
}
?>