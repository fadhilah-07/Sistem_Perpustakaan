<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class m_peminjaman extends CI_Model {
 
public function tigatable ()
 {
	$this->db->select('*');
 	$this->db->from('tb_peminjaman');
 	$this->db->join('tb_anggota','tb_peminjaman.id_anggota=tb_anggota.id_anggota');
 	$this->db->join('tb_buku','tb_peminjaman.id_buku=tb_buku.id_buku');
 	$query = $this->db->get();
 	return $query;
}

}

