<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct()
{
	parent::__construct();
	$this->load->helper('url');
	$this->load->model('UserModel');
}

	public function index()
	{

	}

	public function login()
	{
		if (isset($_SESSION['id_user'])) {
			redirect('/');
		}
		$this->form_validation->set_rules('TxtUser', 'Username', 'required|callback_CheckUsername',
						array('required' => 'You must provide a %s.')
		);
		$this->form_validation->set_rules('TxtPasswd', 'Password', 'required|callback_CheckPassword',
						array('required' => 'You must provide a %s.')
		);

		if ($this->form_validation->run() == FALSE)
		{
		$this->load->view('user/login');
	}else {
		// Save user
			$user = $this->UserModel->get_user('username',$this->input->post('TxtUser'));
			// Set session
			$_SESSION['id_user']    = $user[0]['id_user'];
			$_SESSION['logged_in']  = true;
			if ($user[0]['level'] == "Admin") {
				redirect('admin/dashboard');
			}elseif ($user[0]['level'] == "Perusahaan") {
				redirect('perusahaan/dashboard');
			}elseif ($user[0]['level'] == "Driver") {
				redirect('driver/dashboard');
			}else {
				redirect('user/dashboard');
			}

	}
}

	public function register()
	{
		$this->form_validation->set_rules('username', 'Username', 'required|is_unique[user.username]',
						array('required' => 'You must provide a %s.',
									'is_unique'	=> '%s already exist!')
		);
		$this->form_validation->set_rules('password', 'Password', 'required',
						array('required' => 'You must provide a %s.'
									)
		);
		$this->form_validation->set_rules('nama_lengkap', 'Nama Lengkap', 'required',
						array('required' => 'You must provide a %s.')
		);
		$this->form_validation->set_rules('email', 'Email', 'required|is_unique[user.email]',
						array('required' => 'You must provide a %s.',
									'is_unique'	=> '%s already exist!')
		);
		$this->form_validation->set_rules('nohape', 'No Handphone', 'required',
						array('required' => 'You must provide a %s.')
		);
		if ($this->form_validation->run() == FALSE)
		{
		$this->load->view('user/register');
	}else {
		//Save user
		$this->UserModel->insert_user();
		redirect('/user/login');
	}
	}


	// This for check password
		public function CheckPassword($password)
		{
			$user = $this->UserModel->get_user('username',$this->input->post('TxtUser'));
			if (!$this->UserModel->CheckPassword($user[0]['username'],$password))
			{
				$this->form_validation->set_message('CheckPassword','This %s is incorrect.');
				return false;
			}
			return true;
		}

	// This for check useername
		public function CheckUsername($username)
		{
			if(!$this->UserModel->get_user('username',$username)){
				$this->form_validation->set_message('CheckUsername','This %s not exists.');
				return false;
			}
			return true;
		}

		public function logout()
		{
			unset($_SESSION['id_user'],$_SESSION['logged_in']);
			redirect('/user/login/');
		}
}
