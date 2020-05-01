<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class m_pengembalian extends CI_Model {
 
public function tigatable ()
 {
	$this->db->select('*');
 	$this->db->from('tb_pengembalian');
 	$this->db->join('tb_anggota','tb_pengembalian.id_anggota=tb_anggota.id_anggota');
 	$this->db->join('tb_buku','tb_pengembalian.id_buku=tb_buku.id_buku');
 	$query = $this->db->get();
 	return $query;
}

}

