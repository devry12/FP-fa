<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perusahaan extends CI_Controller {

  public function __construct()
{
	parent::__construct();
	$this->load->helper('url');
	$this->load->model('DriverModel');
	$this->load->model('UserModel');
	$this->load->model('PerusahaanModel');
}

	public function index()
	{
    $data['GetAllUser'] = $this->UserModel->GetAllUser($_SESSION['id_user']);
    $data['GetNotifTolak'] = $this->PerusahaanModel->GetNotifTolak();
		$this->load->view('perusahaan/layout/header',$data);
		$this->load->view('perusahaan/index');
    $this->load->view('perusahaan/layout/footer');
	}
	public function pesanan()
	{
    $this->form_validation->set_rules('driver', 'driver', 'required',
            array('required' => 'You must provide a %s.')
    );
    $this->form_validation->set_rules('idTransaksi', 'idTransaksi', 'required',
            array('required' => 'You must provide a %s.'
                  )
    );
    if ($this->form_validation->run() == FALSE)
    {
    $this->PerusahaanModel->LihatTolak();
    $data['GetAllUser']     = $this->UserModel->GetAllUser($_SESSION['id_user']);
    $data['GetAllPesanan']  = $this->PerusahaanModel->GetAllPesanan();
    if ($data['GetAllPesanan'] != null) {
      $data['GetDriverName']  = $this->PerusahaanModel->GetDriverName($data['GetAllPesanan'][0]['id_driver']);
    }
    $data['GetDriverReady']  = $this->PerusahaanModel->GetDriverReady();
    $data['GetNotifTolak'] = $this->PerusahaanModel->GetNotifTolak();
		$this->load->view('perusahaan/layout/header',$data);
		$this->load->view('perusahaan/pesanan');
		$this->load->view('perusahaan/layout/footer');
  }else {
      $this->PerusahaanModel->KirimBarang();
      redirect('/perusahaan/pesanan');
  }
	}


  public function riwayat()
	{
    $data['GetAllUser'] = $this->UserModel->GetAllUser($_SESSION['id_user']);
    $data['GetNotifTolak'] = $this->PerusahaanModel->GetNotifTolak();
    $data['GetRiwayat'] = $this->PerusahaanModel->GetRiwayat($_SESSION['id_user']);
		$this->load->view('perusahaan/layout/header',$data);
		$this->load->view('perusahaan/riwayat');
		$this->load->view('perusahaan/layout/footer');
	}
}
