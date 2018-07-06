<?php
	if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class UserModel extends CI_Model {

    // This for insert user from register
    	public function insert_user()
    	{
    		$this->load->helper('string');
    		$data = [
    			'username'	=> $this->input->post('username'),
    			'nama_lengkap'		=> $this->input->post('nama_lengkap'),
    			'email'		=> $this->input->post('email'),
    			'nohape'		=> $this->input->post('nohape'),
    			'password'	=> password_hash($this->input->post('password'),PASSWORD_DEFAULT),
    		];
    		$this->db->insert('user', $data);
    	}


    // This for get user from database
  	public function get_user($key,$val)
  	{
  		$query = $this->db->get_where('user',array($key=>$val));
  		if (!empty($query->row_array())) {
  			return $query->result_array();
  		}
  		return false;
  	}

    // This for check password from database
	public function CheckPassword($username,$password)
	{
		$hash = $this->get_user('username',$username)[0]['password'];
		if (password_verify($password,$hash)) {
			return true;
		}
	return false;
	}


	  public function GetAllUser($id){
	    $this->db->select('*');
	    $this->db->from('user');
	    $this->db->where('id_user',$id);
	    $query = $this->db->get();
	    return $query->result_array();
	  }

}
