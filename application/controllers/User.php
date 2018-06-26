<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function index()
	{

	}
	public function dashboard()
	{
    $this->load->view('Backend/user/layout/header.php');
		$this->load->view('Backend/user/index');
    $this->load->view('Backend/user/layout/footer.php');
	}
	public function pengiriman()
	{
    $this->load->view('Backend/user/layout/header.php');
		$this->load->view('Backend/user/page/pengiriman');
    $this->load->view('Backend/user/layout/footer.php');
	}

	public function login()
	{
		$this->load->view('Backend/user/login');
	}

	public function profile()
	{
		$this->load->view('Backend/user/layout/header.php');
		$this->load->view('Backend/user/page/profile');
		$this->load->view('Backend/user/layout/footer.php');
	}
	public function driver()
	{
		$this->load->view('Backend/user/layout/header.php');
		$this->load->view('Backend/user/page/driver');
		$this->load->view('Backend/user/layout/footer.php');
	}
}
