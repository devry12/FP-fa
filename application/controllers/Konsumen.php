<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Konsumen extends CI_Controller {

  public function __construct()
{
	parent::__construct();
	$this->load->helper('url');
	$this->load->model('KonsumenModel');
	$this->load->model('UserModel');
}

	public function index()
	{
    $data['GetAllUser'] = $this->UserModel->GetAllUser($_SESSION['id_user']);
		$this->load->view('konsumen/layout/header',$data);
		$this->load->view('konsumen/index');
	}

	public function pesanBarang()
	{
    $this->form_validation->set_rules('nama_barang', 'barang', 'required',
            array('required' => 'You must provide a %s.')
    );
    $this->form_validation->set_rules('jumlah_barang', 'Jumlah Barang', 'required',
            array('required' => 'You must provide a %s.'
                  )
    );
    $this->form_validation->set_rules('tujuan', 'Tujuan', 'required',
            array('required' => 'You must provide a %s.')
    );
    if ($this->form_validation->run() == FALSE)
    {
    $data['GetAllUser'] = $this->UserModel->GetAllUser($_SESSION['id_user']);
    $data['GetAllBar'] = $this->KonsumenModel->GetAllBar();
		$this->load->view('konsumen/layout/header',$data);
		$this->load->view('konsumen/pesanBarang');
		$this->load->view('konsumen/layout/footer');
  }else {
    $this->KonsumenModel->KirimBarang();
    redirect('/user/riwayat');
    }
	}
	public function riwayat()
	{
    $data['GetAllUser'] = $this->UserModel->GetAllUser($_SESSION['id_user']);
    $data['GetRiwayat'] = $this->KonsumenModel->GetRiwayat($_SESSION['id_user']);
		$this->load->view('konsumen/layout/header',$data);
		$this->load->view('konsumen/riwayat');
		$this->load->view('konsumen/layout/footer');
	}
}
