<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Peminjaman extends CI_Controller {

 function __construct()
 {
 parent::__construct();
 $this->load->model('m_peminjaman');
 $this->load->helper(array('form', 'url'));
 }

 public function peminjaman_buku()
 {
 // query memanggil function tigatable di model
    $data['join3'] = $this->m_peminjaman->tigatable()->result();
    $this->load->view("templates/template");
    $this->load->view('peminjaman',$data);
 } 
  
}