<?php
defined('BASEPATH') OR exit('No direct access allowed');

class Model_user extends CI_Model
{
	function__construct()
	{
		parent::__construct();
	}
	
	public function insert_user()
	{
		$name = $this->input->post('name');
		$email = $this->input->post('email');
		$contact = $this->input->post('contact');
		$uid = $this->input->post('uid');
		$password =sha1($this->config->item('salt').$this->input->post('pass'));
		
		$query = "insert into users(name,email,contact,uid,pass)values(".$this->db->escape($name).",'".$email."',".$this->db->escape($cotact).",".$this->db->escape($uid).",'".$password."')";
		
		$result = $this->db->query($query);
		if ($this->affected->rows === 1)
		{
			return $name;
		}
		else
		{
			$this->load->library('email');
			$this->email->from('admin@gamil.com');
			$this->email->to('admin1@gmail.com');
			$this->email->subject('registration not perform');
			
			if (isset($emil)) 
			{
				$this->email->message('unable to regisdter with email'.$email.'to the database');
			}
			else
			{
				$this->email->message('unable to register to the database');
			}
			$this->email->send();
			return false;
		}
	
	}