<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengembalian extends CI_Controller {

 function __construct()
 {
 parent::__construct();
 $this->load->model('m_pengembalian');
 $this->load->helper(array('form', 'url'));
 }

 public function pengembalian_buku()
 {
 // query memanggil function tigatable di model
    $data['join3'] = $this->m_pengembalian->tigatable()->result();
    $this->load->view("templates/template");
    $this->load->view('pengembalian',$data);
 } 
  
}