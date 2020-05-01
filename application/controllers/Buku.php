<?php 

class Buku extends CI_Controller{
	public function buku_perpus()
	{
		$data['buku'] = $this->m_buku->tampil_data()->result();
		$this->load->view("templates/template");
		$this->load->view("buku",$data);
		$this->load->view("templates/footer");

	}
	public function tambah_buku(){
		$id_buku			= $this->input->post('id_buku');
		$judul_buku			= $this->input->post('judul_buku');
		$pengarang			= $this->input->post('pengarang');
		$penerbit 			= $this->input->post('penerbit');
		$jumlah_halaman		= $this->input->post('jumlah_halaman');
		$tahun_terbit		= $this->input->post('tahun_terbit');
		$asal_perolehan 	= $this->input->post('asal_perolehan');
		$tanggal_input 		= $this->input->post('tanggal_input');
		$data = array(
			'id_buku'		=> $id_buku,
			'judul_buku' 	=> $judul_buku,
			'pengarang'		=> $pengarang,
			'penerbit'		=> $penerbit,
			'jumlah_halaman'=> $jumlah_halaman,
			'tahun_terbit'	=> $tahun_terbit,
			'asal_perolehan'=> $asal_perolehan,
			'tanggal_input'	=> $tanggal_input
		);

		$this->m_buku->input_data($data, 'tb_buku');
		redirect ('Buku/buku_perpus');
	}

}
