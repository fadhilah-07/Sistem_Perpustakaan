<?php  

class m_anggota extends CI_Model{
	public function tampil_data()
	{
		return $this->db->get('tb_anggota');
	}
	public function input_data($data)
    {
        $this->db->insert('tb_anggota', $data);
    }
}