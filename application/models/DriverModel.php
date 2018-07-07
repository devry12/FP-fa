<?php
	if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class DriverModel extends CI_Model {

    public function GetAllTugasBar(){
			$driver  = $_SESSION['id_user'];
      $this->db->select('*');
      $this->db->from('transaksi');
      $this->db->join('barang', 'transaksi.id_barang = barang.id_barang');
      $this->db->join('user', 'transaksi.id_pembeli = user.id_user');
      $this->db->where("transaksi.id_driver = $driver");
      $this->db->where("transaksi.driver_status != 'terima'");
			$this->db->order_by("tanggal", "DESC");

      $query = $this->db->get();
      return $query->result_array();
    }
    public function GetTugas(){
      $this->db->select('*');
      $this->db->from('transaksi');
      $this->db->join('barang', 'transaksi.id_barang = barang.id_barang');
      $this->db->where('id_driver',$_SESSION['id_user']);
      $this->db->where("status_pengiriman != 'Selesai' ");
			$this->db->order_by("tanggal", "DESC");
      $query = $this->db->get();
      return $query->result_array();
    }


    public function UpdateTransaksi(){
      $this->db->set('status_pengiriman', 'Prosess');
      $this->db->set('driver_status', 'terima');
      $this->db->set('id_driver', $_SESSION['id_user']);
      $this->db->where('id_transaksi', $this->input->post('idTransaksi'));
      $this->db->update('transaksi');
    }

    public function UpdateStatusDriver(){
      $this->db->set('status', 'Sibuk');
      $this->db->where('id_user',$_SESSION['id_user']);
      $this->db->update('user');
    }
    public function UpdateLokasi(){
      $this->db->set('lokasi', $this->input->post('lokasi'));
      $this->db->where('id_transaksi',$this->input->post('idTransaksi'));
      $this->db->update('transaksi');
    }
    public function TugasSelesai(){
      $this->db->set('status_pengiriman', "Selesai");
      $this->db->set('driver_status', "selesai");
      $this->db->where('id_transaksi',$this->input->post('idTransaksi'));
      $this->db->update('transaksi');
    }
    public function TolakPesanan(){
      $this->db->set('status_pengiriman', 'Menunggu');
      $this->db->set('lihat', 'n');
      $this->db->set('id_driver', null);
      $this->db->set('driver_status', 'tolak');
      $this->db->where('id_transaksi',$this->input->post('idTransaksi'));
      $this->db->update('transaksi');
    }


}
