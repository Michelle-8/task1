<?php

class Login extends CI_Controller {

	public function index()
	{
		$data['title'] = 'Log In';
		$this->load->view('admin/login', $data);
	}
	
	public function register()
	{
		//$data['account'] = $this->Account_model->getaccount();
		//$this->load->view('admin/login.php', $data);

		$account['firstname'] = $this->input->post('firstname');
		$account['lastname'] = $this->input->post('lastname');
		$account['email'] = $this->input->post('email');
		$account['username'] = $this->input->post('username');
		$account['password'] = $this->input->post('password');

		$query = $this->Account_model->insertAccount('account');
 
	}
