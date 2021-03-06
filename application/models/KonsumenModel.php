<?php
	if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class KonsumenModel extends CI_Model {

  public function GetAllBar(){
    $this->db->select('*');
    $this->db->from('barang');
    $query = $this->db->get();
    return $query->result_array();
  }

  // This for Kirim Barang
    public function KirimBarang()
    {
      $this->load->helper('string');
      $data = [
        'id_pembeli'	=> $_SESSION['id_user'],
        'id_barang'	=> $this->input->post('nama_barang'),
        'jumlah_barang'		=> $this->input->post('jumlah_barang'),
        'tujuan'		=> $this->input->post('tujuan'),
      ];
      $this->db->insert('transaksi', $data);
    }

    public function GetRiwayat($id){
      $this->db->select('*');
      $this->db->from('transaksi');
      $this->db->join('barang', 'transaksi.id_barang = barang.id_barang');
      $this->db->join('user', 'transaksi.id_driver = user.id_user');
      $this->db->where('id_pembeli',$id);
			$this->db->order_by("transaksi.tanggal", "DESC");
      $query = $this->db->get();
      return $query->result_array();
    }


}
