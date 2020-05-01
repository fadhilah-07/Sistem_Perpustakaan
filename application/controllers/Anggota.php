<?php 

class Anggota extends CI_Controller{
	
	public function anggota1()
	{
		$data['anggota'] = $this->m_anggota->tampil_data()->result();
		$this->load->view("templates/template");
		$this->load->view("anggota",$data);
		$this->load->view("templates/footer");

	}
	public function tambah_anggota(){
		$id_anggota 	= $this->input->post('id_anggota');
		$nama_anggota	= $this->input->post('nama_anggota');
		$alamat			= $this->input->post('alamat');
		$jenis_kelamin 	= $this->input->post('jenis_kelamin');
		$agama 			= $this->input->post('agama');
		$pekerjaan		= $this->input->post('pekerjaan');
		$tempat_lahir 	= $this->input->post('Tempat_lahir');
		$tanggal_lahir 	= $this->input->post('tanggal_lahir');
		$tanggal_daftar	= $this->input->post('tanggal_daftar');
		$data = array(
			'id_anggota'	=> $id_anggota,
			'nama_anggota' 	=> $nama_anggota,
			'alamat'		=> $alamat,
			'jenis_kelamin'	=> $jenis_kelamin,
			'agama'			=> $agama,
			'pekerjaan'		=> $pekerjaan,
			'Tempat_lahir'	=> $tempat_lahir,
			'tanggal_lahir'	=> $tanggal_lahir,
			'tanggal_daftar'=> $tanggal_daftar
		);

		$this->m_anggota->input_data($data, 'tb_anggota');
		redirect ('Anggota/anggota1');
	}

}
