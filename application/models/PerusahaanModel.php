<?php
	if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class PerusahaanModel extends CI_Model {

  public function GetAllPesanan(){
    $this->db->select('*');
    $this->db->from('transaksi');
    $this->db->join('user', 'transaksi.id_pembeli = user.id_user');
    $this->db->join('barang', 'transaksi.id_barang = barang.id_barang');
		$this->db->where("transaksi.status_pengiriman != 'Selesai'");
    $this->db->where('barang.id_perusahaan',$_SESSION['id_user']);
		$this->db->order_by("transaksi.tanggal", "DESC");
    $query = $this->db->get();
    return $query->result_array();
  }
  public function GetDriverName($id){
    $this->db->select('*');
    $this->db->from('user');
    $this->db->where('id_user',$id);
    $query = $this->db->get();
    return $query->result_array();
  }
  public function GetNotifTolak(){
    $user = $_SESSION['id_user'];
    $this->db->select('*');
    $this->db->from('transaksi');
    $this->db->where("driver_status = 'tolak' AND id_penjual =$user AND lihat = 'n' ");
    $query = $this->db->get();
    return $query->num_rows();
  }
  public function LihatTolak(){
    $this->db->set('lihat', 'l');
    $this->db->where('id_penjual', $_SESSION['id_user']);
    $this->db->update('transaksi');
  }
  public function GetDriverReady(){
    $this->db->select('*');
    $this->db->from('user');
    $this->db->where('status','Ready');
    $query = $this->db->get();
    return $query->result_array();
  }

  public function KirimBarang(){
    $this->db->set('status_pengiriman', 'Menunggu Driver');
    $this->db->set('id_penjual', $_SESSION['id_user']);
    $this->db->set('id_driver', $this->input->post('driver'));
    $this->db->set('driver_status', 'belum');
    $this->db->where('id_transaksi', $this->input->post('idTransaksi'));
    $this->db->update('transaksi');
  }

	public function GetRiwayat($id){
		$this->db->select('*');
		$this->db->from('transaksi');
		$this->db->join('barang', 'transaksi.id_barang = barang.id_barang');
		$this->db->join('user', 'transaksi.id_driver = user.id_user');
		$this->db->where('id_penjual',$id);
				$this->db->order_by("transaksi.tanggal", "DESC");
		$query = $this->db->get();
		return $query->result_array();
	}

}
