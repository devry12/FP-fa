<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Driver extends CI_Controller {

  public function __construct()
{
	parent::__construct();
	$this->load->helper('url');
	$this->load->model('DriverModel');
	$this->load->model('UserModel');
}

	public function index()
	{
    $data['GetAllUser'] = $this->UserModel->GetAllUser($_SESSION['id_user']);
		$this->load->view('driver/layout/header',$data);
		$this->load->view('driver/index');
	}

	public function tugasBaru()
	{
    if (!isset($_SESSION['id_user'])) {
      redirect('/');
    }
    $this->form_validation->set_rules('idTransaksi', 'ditransaki', 'required',
            array('required' => 'You must provide a %s.')
    );
    if ($this->form_validation->run() == FALSE)
    {
    $data['GetAllUser']     = $this->UserModel->GetAllUser($_SESSION['id_user']);
    $data['GetAllTugasBar'] = $this->DriverModel->GetAllTugasBar();
		$this->load->view('driver/layout/header',$data);
		$this->load->view('driver/driver');
  }else{
      $this->DriverModel->UpdateTransaksi();
      $this->DriverModel->UpdateStatusDriver();
      redirect('/driver/status');
  }
	}

	public function status()
	{
    if (!isset($_SESSION['id_user'])) {
      redirect('/');
    }
    $this->form_validation->set_rules('lokasi', 'lokasi', 'required',
            array('required' => 'You must provide a %s.')
    );
    if ($this->form_validation->run() == FALSE)
    {
    $data['GetAllUser']     = $this->UserModel->GetAllUser($_SESSION['id_user']);
    $data['GetTugas']       = $this->DriverModel->GetTugas();
		$this->load->view('driver/layout/header',$data);
		$this->load->view('driver/status');
  }else{
      $this->DriverModel->UpdateLokasi();
      redirect('/driver');
  }
	}

}
