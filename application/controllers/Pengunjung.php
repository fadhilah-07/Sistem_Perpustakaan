<?php 

class Pengunjung extends CI_Controller{
	public function index()
	{
		$data['pengunjung'] = $this->m_pengunjung->tampil_data()->result();
		$this->load->view("templates/template");
		$this->load->view("pengunjung",$data);
		$this->load->view("templates/footer");

	}
	public function tambah_aksi(){
		$id_anggota 	= $this->input->post('id_anggota');
		$password 		= $this->input->post('password');
		$data  			= array(
			'id_anggota'	=> $id_anggota,
			'password' 		=> $password	
		);

		$this->m_pengunjung->input_data($data, 'tb_pengunjung');
		redirect ('Pengunjung/index');
	}

}
