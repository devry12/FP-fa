<?php
	if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class DriverModel extends CI_Model {

    public function GetAllTugasBar(){
      $this->db->select('*');
      $this->db->from('transaksi');
      $this->db->join('barang', 'transaksi.id_barang = barang.id_barang');
      $this->db->join('user', 'transaksi.id_pengirim = user.id_user');
      $this->db->where("transaksi.status_pengiriman = 'Mencari Driver'  OR user.status = 'Ready'");

      $query = $this->db->get();
      return $query->result_array();
    }
    public function GetTugas(){
      $this->db->select('*');
      $this->db->from('transaksi');
      $this->db->join('barang', 'transaksi.id_barang = barang.id_barang');
      $this->db->where('id_driver',$_SESSION['id_user']);
      $query = $this->db->get();
      return $query->result_array();
    }


    public function UpdateTransaksi(){
      $this->db->set('status_pengiriman', 'Prosess');
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


}
