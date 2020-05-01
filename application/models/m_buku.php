<?php  

class m_buku extends CI_Model{
	public function tampil_data()
	{
		return $this->db->get('tb_buku');
	}
	public function input_data($data)
    {
        $this->db->insert('tb_buku', $data);
    }
}